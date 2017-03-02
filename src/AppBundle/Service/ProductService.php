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
}