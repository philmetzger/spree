<?php
namespace AppBundle\Controller\Home;

use AppBundle\Application\Action;
use AppBundle\Entity\Category;

/**
 * @package AppBundle\Controller\Home
 */
class FilterController extends Action {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function filterAction() {
        $data = [
            'mainCategories' => $this->getMainCategories(),
            'colors' => $this->getColors()
        ];

        return $this->render('home/filter.html.twig', $data);
    }

    /**
     * @return array
     */
    private function getColors() {
        /* @var \AppBundle\Service\ProductService $productService */
        $productService = $this->get('app.product');

        $colors = $productService->getProductColors();
        if (!$colors) {
            return [];
        }

        return $colors;
    }

    /**
     * @return array
     */
    private function getMainCategories() {
        /* @var \AppBundle\Service\CategoryService $categoryService */
        $categoryService = $this->get('app.category');

        $mainCategories = $categoryService->getMainCategories();
        if (!$mainCategories) {
            return [];
        }

        $data = [];

        /* @var Category $category */
        foreach ($mainCategories as $category) {
            $data[$category->getId()] = $category->getName();
        }

        return $data;
    }
}