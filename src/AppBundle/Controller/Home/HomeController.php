<?php
namespace AppBundle\Controller\Home;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Action {

    /**
     * @Route("/home", name="home")
     */
    public function homeAction() {
        /* @var \AppBundle\Service\ProductService $productService */
        $productService = $this->get('app.product');

        $products = $productService->getProducts();
        return $this->render('home/home.html.twig', [
            'products' => $products
        ]);
    }
}