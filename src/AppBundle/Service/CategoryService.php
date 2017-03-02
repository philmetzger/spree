<?php
namespace AppBundle\Service;

use AppBundle\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class CategoryService
 */
class CategoryService {

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
     * @param int $categoryId
     * @return null|Category
     */
    public function getById($categoryId) {
        $entity = $this->doctrine
            ->getRepository('AppBundle:Category')
            ->findOneBy([
                'id' => $categoryId
            ]);
        if (!$entity) {
            return null;
        }

        return $entity;
    }
}