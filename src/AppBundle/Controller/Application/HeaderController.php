<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;

class HeaderController extends Action {

    public function headerAction() {
        return $this->render('application/header.html.twig', []);
    }
}