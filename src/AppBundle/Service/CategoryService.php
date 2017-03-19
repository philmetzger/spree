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

    /**
     * @return null|Category[]
     */
    public function getMainCategories() {
        $entities = $this->doctrine
            ->getRepository('AppBundle:Category')
            ->findBy([
                'parentId' => 0
            ]);
        if (!$entities) {
            return null;
        }

        return $entities;
    }

    /**
     * @deprecated Name is not indexed yet.
     *
     * @param string $categoryName
     * @return null|Category
     */
    public function getByName($categoryName) {
        $entity = $this->doctrine
            ->getRepository('AppBundle:Category')
            ->findOneBy([
                'name' => $categoryName
            ]);
        if (!$entity) {
            return null;
        }

        return $entity;
    }

    /**
     * @deprecated Name is not indexed yet.
     *
     * @param string $categoryName
     * @return null|Category
     */
    public function getBySimilarName($categoryName) {
        $qb = $this->doctrine
            ->getEntityManager()
            ->createQueryBuilder();

        $result = $qb->select('c')
            ->from('AppBundle:Category', 'c')
            ->where("lower(c.name) = lower(:name)")
            ->setParameter('name', $categoryName);

        return $result->getQuery()->execute();
    }

    /**
     * @param string $name
     * @param int $type
     * @param int $parentId
     * @param null|string $description
     */
    public function addCategory($name, $type, $parentId, $description = null) {
        $category = new Category();
        $category->setName($name);
        $category->setType($type);
        $category->setParentId($parentId);
        $category->setDescription($description);

        $em = $this->doctrine->getManager();

        $em->persist($category);

        $em->flush();
    }
}