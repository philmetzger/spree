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
     * @ORM\Column(type="string")
     * @param string $url
     */
    private $url;

    /**
     * @ORM\Column(type="array")
     * @param array $images
     */
    private $images;

    /**
     * @ORM\Column(type="float")
     * @param float $price
     */
    private $price;

    /**
     * @ORM\Column(name="main_category", type="integer")
     * @param int $mainCategory
     */
    private $mainCategory;

    /**
     * @ORM\Column(name="sub_category", type="integer")
     * @param int $subCategory
     */
    private $subCategory;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $color
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $size
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=20)
     * @param string $gender
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $brand
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=256)
     * @param string $story
     */
    private $store;

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
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getImages() {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages($images) {
        $this->images = $images;
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
    public function getMainCategory() {
        return $this->mainCategory;
    }

    /**
     * @param int $mainCategory
     */
    public function setMainCategory($mainCategory) {
        $this->mainCategory = $mainCategory;
    }

    /**
     * @return int
     */
    public function getSubCategory() {
        return $this->subCategory;
    }

    /**
     * @param int $subCategory
     */
    public function setSubCategory($subCategory) {
        $this->subCategory = $subCategory;
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
     * @return string
     */
    public function getStore() {
        return $this->store;
    }

    /**
     * @param string $store
     */
    public function setStore($store) {
        $this->store = $store;
    }
}