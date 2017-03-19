<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="postgres.products")
 */
class Product {

    /**
     * Product constructor.
     */
    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @param int $id
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
     * @ORM\Column(type="text")
     * @param string $description
     */
    private $description;

    /**
     * @ORM\Column(name="source_url", type="string")
     * @param string $sourceUrl
     */
    private $sourceUrl;

    /**
     * @ORM\Column(name="image_url_primary", type="string")
     * @param string $imageUrlPrimary
     */
    private $imageUrlPrimary;

    /**
     * @ORM\Column(name="image_url_secondary", type="string")
     * @param string $imageUrlSecondary
     */
    private $imageUrlSecondary;

    /**
     * @ORM\Column(type="float")
     * @param float $price
     */
    private $price;

    /**
     * @ORM\Column(name="category_id", type="integer")
     * @param int $categoryId
     */
    private $categoryId;

    /**
     * @ORM\Column(type="string", length=255)
     * @param string $category
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=100)
     * @param string $color
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=50)
     * @param string $size
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=50)
     * @param string $gender
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $brand
     */
    private $brand;

    /**
     * @ORM\Column(type="datetime")
     * @param \DateTime $createdAt
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @param \DateTime $updatedAt
     */
    private $updatedAt;

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
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
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
    public function getSourceUrl() {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl($sourceUrl) {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @return string
     */
    public function getImageUrlPrimary() {
        return $this->imageUrlPrimary;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrlPrimary($imageUrl) {
        $this->imageUrlPrimary = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrlSecondary() {
        return $this->imageUrlSecondary;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrlSecondary($imageUrl) {
        $this->imageUrlSecondary = $imageUrl;
    }

    /**
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category) {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color) {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size) {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender) {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getBrand() {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }
}