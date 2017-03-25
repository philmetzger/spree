<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileEditController extends Action {

    /**
     * @Route("/profile/{username}/edit", name="profileEdit")
     */
    public function profileEditAction($username = null) {
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

        /* @var \AppBundle\Service\SessionService $sessionService */
        $sessionService = $this->get('app.session');
        if ($account->getId() != $sessionService->getAccountId()) {
            return $this->redirectToRoute('profile', ['username' => $account->getUsername()]);
        }

        $data['title'] = $this->getTitle($username);

        return $this->render('profile/profileEdit.html.twig', $data);
    }

    /**
     * @param string $username
     * @return string
     */
    private function getTitle($username) {
        return $username . ' | Edit';
    }
}