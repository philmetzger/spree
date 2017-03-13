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
     * @param string $url
     * @param string[] $images
     * @param float $price
     * @param int $mainCategory
     * @param int $subCategory
     * @param string $color
     * @param string $size
     * @param string $gender
     * @param string $brand
     * @param string $store
     */
    public function addProduct($name, $url, $images, $price, $mainCategory, $subCategory,
                               $color, $size, $gender, $brand, $store) {
        $product = new Product();

        $em = $this->doctrine->getManager();

        $em->persist($product);

        $em->flush();
    }
}