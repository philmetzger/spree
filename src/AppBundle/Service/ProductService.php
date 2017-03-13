<?php
namespace AppBundle\Service;

use AppBundle\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class ProductService
 */
class ProductService {

    /**
     * @var Registry
     */
    private $doctrine;

    /**
     * @param Registry $doctrine
     */
    public function __construct(Registry $doctrine) {
        $this->doctrine = $doctrine;
    }

    /**
     * @param int $productId
     * @return null|Product
     */
    public function getById($productId) {
        $entity = $this->doctrine
            ->getRepository('AppBundle:Product')
            ->findOneBy([
                'id' => $productId
            ]);
        if (!$entity) {
            return null;
        }

        return $entity;
    }

    /**
     * @param string $name
     * @param string $description
     * @param string $sourceUrl
     * @param string $imagePrimary
     * @param string $imageSecondary
     * @param float $price
     * @param int $mainCategoryId
     * @param string $mainCategory
     * @param int $subCategoryId
     * @param string $subCategory
     * @param string $color
     * @param string $size
     * @param string $gender
     * @param string $brand
     */
    public function addProduct($name, $description, $sourceUrl, $imagePrimary, $imageSecondary, $price,
                               $mainCategoryId, $mainCategory, $subCategoryId, $subCategory, $color, $size, $gender, $brand) {
        $product = new Product();

        $product->setName($name);
        $product->setDescription($description);
        $product->setSourceUrl($sourceUrl);
        $product->setImageUrlPrimary($imagePrimary);
        $product->setImageUrlSecondary($imageSecondary);
        $product->setPrice($price);
        $product->setMainCategoryId($mainCategoryId);
        $product->setMainCategory($mainCategory);
        $product->setSubCategoryId($subCategoryId);
        $product->setSubCategory($subCategory);
        $product->setColor($color);
        $product->setSize($size);
        $product->setGender($gender);
        $product->setBrand($brand);

        $em = $this->doctrine->getManager();

        $em->persist($product);

        $em->flush();
    }
}