<?php
namespace AppBundle\Controller\Home;

use AppBundle\Application\Action;
use AppBundle\Entity\Product;

/**
 * @package AppBundle\Controller\Home
 */
class ProductItemController extends Action {

    /**
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productItemAction(Product $product) {
        return $this->render('home/productItem.html.twig', ['product' => $product]);
    }
}