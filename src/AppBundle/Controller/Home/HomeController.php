<?php
namespace AppBundle\Controller\Home;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Action {

    /**
     * @Route("/home", name="home")
     */
    public function feedAction() {
        return $this->render('home/home.html.twig', []);
    }
}