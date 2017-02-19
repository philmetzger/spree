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
            return $this->redirectToRoute('feed');
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

            return $this->redirectToRoute('feed');
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

        return $this->redirectToRoute('feed');
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction(Request $request) {
        /* @var SessionService $session */
        $session = $this->get('app.session');
        if ($session->isLoggedIn()) {
            return $this->redirectToRoute('feed');
        }

        if ($request->isMethod('post')) {
            $account = new Account();
            $account->setDisplayName($request->get('displayName'));
            $account->setUsername('strangeQuirks');
            $account->setEmail($request->get('email'));
            $account->setPassword($request->get('password'));
            $account->setAccountType(Account::ACCOUNT_TYPE_USER);
            $account->setAccountState(Account::ACCOUNT_STATE_REGISTERED);

            $validator = $this->get('validator');
            $errors = $validator->validate($account);
            if (count($errors) > 0) {
                return $this->render('application/signup.html.twig', [
                    'errors' => $errors
                ]);
            }

            $accountService = $this->get('app.account');
            $accountCreated = $accountService->createAccount($account);
            if (!$accountCreated) {
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
}