<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="postgres.accounts")
 */
class Account {

    const ACCOUNT_STATE_REGISTERED = 'registered';
    const ACCOUNT_STATE_ACTIVE = 'active';

    const ACCOUNT_TYPE_USER = 'user';
    const ACCOUNT_TYPE_ADMIN = 'admin';

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
     * @Assert\NotBlank(
     *      message="Your username cannot be blank"
     * )
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9_]*$/",
     *     message="Your username can only contain letters, numbers, and underscores"
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Your username must be at least {{ limit }} characters long",
     *      maxMessage = "Your username cannot be longer than {{ limit }} characters"
     * )
     */
    private $username;

    /**
     * @ORM\Column(name="display_name", type="string", length=256)
     * @param string $displayName
     * @Assert\NotBlank(
     *      message="Your name cannot be blank"
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters"
     * )
     */
    private $displayName;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     * @param string $email
     * @Assert\NotBlank(
     *      message="Your email cannot be blank"
     * )
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not valid.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1024, nullable=false)
     * @param string $password
     * @Assert\NotBlank(
     *      message="Your password cannot be blank"
     * )
     * @Assert\Length(
     *      min = 6,
     *      max = 255,
     *      minMessage = "Your password must be at least {{ limit }} characters long",
     *      maxMessage = "Your password cannot be longer than {{ limit }} characters"
     * )
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
     * @Assert\NotBlank()
     */
    private $accountType;

    /**
     * @ORM\Column(name="account_state", type="string", length=16, nullable=false)
     * @param string $accountState
     * @Assert\NotBlank()
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
    public function getDisplayName() {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
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