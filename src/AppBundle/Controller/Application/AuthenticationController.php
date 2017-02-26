<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;
use AppBundle\Service\AuthenticationService;
use AppBundle\Service\SessionService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends Action {

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        /* @var SessionService $session */
        $session = $this->get('app.session');
        if ($session->isLoggedIn()) {
            return $this->redirectToRoute('home');
        }

        $data = [];

        if ($request->isMethod('post')) {
            $authenticationService = $this->get('app.authentication');
            $canLogin = $authenticationService->tryLogin(
                $request->get('email'),
                $request->get('password')
            );
            if (!$canLogin) {
                return $this->render('application/login.html.twig', [
                    'error' => true
                ]);
            }

            return $this->redirectToRoute('home');
        } else {
            if ($request->get('username')) {
                $data['username'] = $request->get('username');
            }
        }

        return $this->render('application/login.html.twig', $data);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {
        /* @var AuthenticationService $authenticationService */
        $authenticationService = $this->get('app.authentication');

        $authenticationService->endSession();

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction(Request $request) {
        /* @var SessionService $session */
        $session = $this->get('app.session');
        if ($session->isLoggedIn()) {
            return $this->redirectToRoute('home');
        }

        if ($request->isMethod('post')) {
            $account = new Account();
            $account->setDisplayName($request->get('displayName'));
            $account->setUsername($request->get('username'));
            $account->setEmail($request->get('email'));
            $account->setPassword($request->get('password'));
            $account->setAccountType(Account::ACCOUNT_TYPE_USER);
            $account->setAccountState(Account::ACCOUNT_STATE_REGISTERED);

            $errors = $this->validateAccount($account);
            if (count($errors) > 0) {
                return $this->render('application/signup.html.twig', [
                    'errors' => $errors
                ]);
            }

            $accountService = $this->get('app.account');
            if (!$accountService->createAccount($account)) {
                return $this->render('application/signup.html.twig', [
                    'errors' => [
                        'Account could not be created'
                    ]
                ]);
            }

            return $this->redirectToRoute('login', [
                'u' => $account->getUsername()
            ]);
        }

        return $this->render('application/signup.html.twig', []);
    }

    /**
     * @param Account $account
     * @return mixed
     */
    private function validateAccount($account) {
        $validator = $this->get('validator');
        $errors = $validator->validate($account);

        return $errors;
    }
}