<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;

class HeaderController extends Action {

    public function headerAction() {
        /* @var \AppBundle\Service\SessionService $session */
        $session = $this->get('app.session');

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');
        $username = null;
        if ($session->isLoggedIn()) {
            $account = $accountService->getById($session->getAccountId());
            if ($account) {
                $username = $account->getUsername();
            }
        }

        $data = [
            'isLoggedIn' => $session->isLoggedIn(),
            'username' => $username,
            'menu' => [
                'isSignup' => $_SERVER["REQUEST_URI"] == '/signup',
                'isLogin' => $_SERVER["REQUEST_URI"] == '/login',
                'isFeed' => $_SERVER["REQUEST_URI"] == '/feed',
                'isProfile' => $_SERVER["REQUEST_URI"] == '/profile',
            ]
        ];

        return $this->render('application/header.html.twig', $data);
    }
}