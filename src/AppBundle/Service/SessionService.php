<?php
namespace AppBundle\Service;
use AppBundle\Entity\Account;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class AccountService
 */
class SessionService {

    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(
        Session $session
    ) {
        $this->session = $session;
    }

    /**
     * @return bool
     */
    public function isLoggedIn() {
        if ($this->session->get('accountId')) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function getAccountId() {
        return $this->session->get('accountId');
    }
}