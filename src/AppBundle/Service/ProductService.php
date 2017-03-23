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
     * @return array
     */
    public function getProductColors() {
        $qb = $this->doctrine
            ->getEntityManager()
            ->createQueryBuilder();

        $result = $qb->select('distinct p.color')
            ->from('AppBundle:Product', 'p');

        $result = $result->getQuery()->execute();
        if (!$result) {
            return [];
        }

        $colors = [];
        foreach ($result as $colorResult) {
            $colors[] = $colorResult['color'];
        }

        return $colors;
    }

    /**
     * @return null|Product[]
     */
    public function getProducts() {
        $products = $this->doctrine
            ->getRepository('AppBundle:Product')
            ->findBy(
                [],
                [],
                20,
                0
            );
        if (!$products) {
            return null;
        }

        return $products;
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
     * @param int $productId
     * @return void
     */
    public function deleteByProductId($productId) {
        $product = $this->doctrine
            ->getRepository('AppBundle:Product')
            ->find($productId);
        if ($product) {
            $em = $this->doctrine->getEntityManager();

            $em->remove($product);
            $em->flush();
        }
    }

    /**
     * @param string $name
     * @param string $description
     * @param string $sourceUrl
     * @param string $imagePrimary
     * @param string $imageSecondary
     * @param float $price
     * @param int $categoryId
     * @param string $category
     * @param string $color
     * @param string $size
     * @param string $gender
     * @param string $brand
     *
     * @return Product
     */
    public function addProduct($name, $description, $sourceUrl, $imagePrimary, $imageSecondary, $price,
                               $categoryId, $category, $color, $size, $gender, $brand) {
        $product = new Product();

        $product->setName($name);
        $product->setDescription($description);
        $product->setSourceUrl($sourceUrl);
        $product->setImageUrlPrimary($imagePrimary);
        $product->setImageUrlSecondary($imageSecondary);
        $product->setPrice($price);
        $product->setCategoryId($categoryId);
        $product->setCategory($category);
        $product->setColor($color);
        $product->setSize($size);
        $product->setGender($gender);
        $product->setBrand($brand);

        $em = $this->doctrine->getManager();

        $em->persist($product);

        $em->flush();

        $em->clear();

        return $product;
    }
}