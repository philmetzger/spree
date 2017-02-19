<?php
namespace AppBundle\Service;
use AppBundle\Entity\Account;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class AccountService
 */
class AccountService {

    /**
     * @var Registry
     */
    private $doctrine;

    /**
     * AccountService constructor.
     * @param Registry $doctrine
     */
    public function __construct(Registry $doctrine) {
        $this->doctrine = $doctrine;
    }

    /**
     * @param string $email
     * @return null|Account
     */
    public function getByEmail($email) {
        $account = $this->doctrine
            ->getRepository('AppBundle:Account')
            ->findOneBy([
                'email' => $email
            ]);
        if (!$account) {
            return null;
        }

        return $account;
    }

    /**
     * @param int $accountId
     * @return null|Account
     */
    public function getById($accountId) {
        $account = $this->doctrine
            ->getRepository('AppBundle:Account')
            ->findOneBy([
                'id' => $accountId
            ]);
        if (!$account) {
            return null;
        }

        return $account;
    }

    /**
     * @param string $username
     * @return null|Account
     */
    public function getByUsername($username) {
        $account = $this->doctrine
            ->getRepository('AppBundle:Account')
            ->findOneBy([
                'username' => $username
            ]);
        if (!$account) {
            return null;
        }

        return $account;
    }

    /**
     * @param Account $account
     * @return Account
     */
    public function createAccount(Account $account) {
        $account->setPassword(password_hash($account->getPassword(), PASSWORD_DEFAULT));
        $account->setEmail(strtolower($account->getEmail()));

        $account->setRegistrationDate(new \DateTime());
        $account->setLoginCount(0);

        $existingAccount = $this->getByEmail($account->getEmail());
        if ($existingAccount) {
            return false;
        }

        $existingAccount = $this->getByUsername($account->getUsername());
        if ($existingAccount) {
            return false;
        }

        $em = $this->doctrine->getManager();

        $em->persist($account);
        $em->flush();

        return $account;
    }
}