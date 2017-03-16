<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="postgres.categories")
 */
class Category {

    const CATEGORY_TYPE_FASHION = 1;
    const CATEGORY_TYPE_ACCESSORIES = 2;
    const CATEGORY_TYPE_SHOES = 3;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @param int $username
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     * @param string $name
     * @Assert\Length(
     *      min = 1,
     *      max = 255,
     *      minMessage = "The name must be at least {{ limit }} characters long",
     *      maxMessage = "The name cannot be longer than {{ limit }} characters"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $description
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @param int $type
     */
    private $type;

    /**
     * @ORM\Column(name="parent_id", type="integer")
     * @param int $parentId
     */
    private $parentId;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getParentId() {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId($parentId) {
        $this->parentId = $parentId;
    }
}