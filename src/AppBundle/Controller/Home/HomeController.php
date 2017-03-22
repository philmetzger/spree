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
        foreach ($products as $product) {
            $pro = "lp.hm.com/hmprod?set=key[source],value[/environment/2016/6HT_0140_002R.jpg]&set=key[rotate],value[0.3]&set=key[width],value[1929]&set=key[height],value[2256]&set=key[x],value[1720]&set=key[y],value[202]&set=key[type],value[FASHION_FRONT]&hmver=0&set=key[quality],value[80]&set=key[size],value[346x405]&call=url[file:/mobile/v2/product]";
//            var_dump($pro, $product->getImageUrlPrimary());die;
            copy('lp.hm.com/hmprod?set=key[source],value[/environment/2016/6HT_0140_002R.jpg]&set=key[rotate],value[0.3]&set=key[width],value[1929]&set=key[height],value[2256]&set=key[x],value[1720]&set=key[y],value[202]&set=key[type],value[FASHION_FRONT]&hmver=0&set=key[quality],value[80]&set=key[size],value[346x405]&call=url[file:/mobile/v2/product]', 'file.jpeg');die;
        }

        return $this->render('home/home.html.twig', [
            'products' => $products
        ]);
    }
}