<?php
namespace AppBundle\Service;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class AuthenticationService
 */
class AuthenticationService {

    /**
     * @var AccountService
     */
    private $accountService;

    /**
     * @var Session
     */
    private $session;

    /**
     * @param AccountService $accountService
     * @param Session $session
     */
    public function __construct(
        AccountService $accountService,
        Session $session
    ) {
        $this->accountService = $accountService;
        $this->session = $session;
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function tryLogin($email, $password) {
        $account = $this->accountService->getByEmail(strtolower($email));
        if (!$account) {
            return false;
        }

        if (!password_verify($password, $account->getPassword())) {
            return false;
        }

        $this->session->set('accountId', $account->getId());

        return true;
    }

    /**
     * @return void
     */
    public function endSession() {
        $this->session->set('accountId', null);
        $this->session->clear();
    }
}