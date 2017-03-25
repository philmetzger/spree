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
        $displayName = null;
        if ($session->isLoggedIn()) {
            $account = $accountService->getById($session->getAccountId());
            if ($account) {
                $username = $account->getUsername();
                $displayName = $account->getDisplayName();
            }
        }

        $currentRunningRoute = $this->container->get('request_stack')->getMasterRequest()->get('_route');

        $data = [
            'isLoggedIn' => $session->isLoggedIn(),
            'username' => $username,
            'displayName' => $displayName,
            'menu' => [
                'isSignup' => $currentRunningRoute == 'signup',
                'isLogin' => $currentRunningRoute == 'login',
                'isHome' => $currentRunningRoute == 'home',
                'isProfile' => $currentRunningRoute == 'profile',
            ]
        ];

        return $this->render('application/header.html.twig', $data);
    }
}