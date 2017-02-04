<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="postgres.accounts")
 */
class Account {

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @param int $username
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     * @param string $username
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $firstname
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $lastname
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     * @param string $email
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1024, nullable=false)
     * @param string $password
     */
    private $password;

    /**
     * @ORM\Column(name="registration_date", type="datetime", nullable=false)
     * @param \DateTime $registrationDate
     */
    private $registrationDate;

    /**
     * @ORM\Column(name="last_login", type="datetime")
     * @param \DateTime $lastLogin
     */
    private $lastLogin;

    /**
     * @ORM\Column(name="login_count", type="integer")
     * @param int $loginCount
     */
    private $loginCount;

    /**
     * @ORM\Column(name="account_type", type="string", length=16, nullable=false)
     * @param string $accountType
     */
    private $accountType;

    /**
     * @ORM\Column(name="account_state", type="string", length=16, nullable=false)
     * @param string $accountState
     */
    private $accountState;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate() {
        return $this->registrationDate;
    }

    /**
     * @param \DateTime $registrationDate
     */
    public function setRegistrationDate($registrationDate) {
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin() {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime $lastLogin
     */
    public function setLastLogin($lastLogin) {
        $this->lastLogin = $lastLogin;
    }

    /**
     * @return int
     */
    public function getLoginCount() {
        return $this->loginCount;
    }

    /**
     * @param int $loginCount
     */
    public function setLoginCount($loginCount) {
        $this->loginCount = $loginCount;
    }

    /**
     * @return string
     */
    public function getAccountType() {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getAccountState() {
        return $this->accountState;
    }

    /**
     * @param string $accountState
     */
    public function setAccountState($accountState) {
        $this->accountState = $accountState;
    }
}