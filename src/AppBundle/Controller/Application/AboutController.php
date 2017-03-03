<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class AboutController
 * @package AppBundle\Controller\Application
 */
class AboutController extends Action {

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {
        return $this->render('application/contact.html.twig');
    }
}