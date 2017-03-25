<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends Action {

    const SUBMENU_PRODUCTS = 'products';
    const SUBMENU_COLLETIONS = 'collections';

    /**
     * @var array
     */
    private $constants = [
        self::SUBMENU_PRODUCTS,
        self::SUBMENU_COLLETIONS,
    ];

    /**
     * @Route("/profile/{username}", name="profile")
     * @Route("/profile/{username}/{submenu}", requirements={"submenu"="^(?!edit)$"})
     */
    public function profileAction($username = null, $submenu = null) {
        if (is_null($username)) {
            return $this->redirectToRoute('home');
        }

        $data = [];

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        /* @var \AppBundle\Service\SessionService $sessionService */
        $sessionService = $this->get('app.session');

        $account = $accountService->getByUsername($username);
        if (!$account) {
            return $this->redirectToRoute('home');
        }

        $data['name'] = $account->getDisplayName();
        $data['username'] = $account->getUsername();
        $data['description'] = $account->getDescription();
        $data['firstLetter'] = mb_substr($account->getDisplayName(), 0, 1, 'utf-8');
        $data['submenu'] = $this->getSubmenu($submenu) ?: 'products';
        $data['isCurrentAccount'] = $account->getId() == $sessionService->getAccountId();
        $data['isLoggedIn'] = $sessionService->isLoggedIn();

        $data['urls'] = [
            'profileProductsUrls' => '/profile/' . $account->getUsername() . '/' . self::SUBMENU_PRODUCTS,
            'profileCollectionsUrls' => '/profile/' . $account->getUsername() . '/' . self::SUBMENU_COLLETIONS,
        ];

        $data['title'] = $this->getTitle($username, $submenu);

        return $this->render('profile/profile.html.twig', $data);
    }

    /**
     * @param string $username
     * @param string|null $submenu
     * @return string
     */
    private function getTitle($username, $submenu) {
        $title = $username;

        if ($submenu) {
            $title .= ' | ' . $submenu;
        }

        return $title;
    }

    /**
     * @param string|null $submenu
     * @return null|string
     */
    private function getSubmenu($submenu) {
        if (in_array($submenu, $this->constants)) {
            return $submenu;
        }

        return null;
    }
}