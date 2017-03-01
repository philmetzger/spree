<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends Action {

    const SUBMENU_PRODUCTS = 'products';
    const SUBMENU_COLLETIONS = 'collections';
    const SUBMENU_FOLLOWERS = 'followers';
    const SUBMENU_FOLLOWINGS = 'followings';

    /**
     * @Route("/profile/{username}", name="profile")
     * @Route("/profile/{username}/{submenu}")
     */
    public function profileAction($username = null, $submenu = null) {
        if (is_null($username)) {
            return $this->redirectToRoute('home');
        }

        $data = [];

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        $account = $accountService->getByUsername($username);
        if (!$account) {
            return $this->redirectToRoute('home');
        }

        $data['name'] = $account->getDisplayName();
        $data['username'] = $account->getUsername();
        $data['description'] = $account->getDescription();
        $data['firstLetter'] = mb_substr($account->getDisplayName(), 0, 1, 'utf-8');
        $data['submenu'] = $submenu ?: 'products';

        return $this->render('profile/profile.html.twig', $data);
    }
}