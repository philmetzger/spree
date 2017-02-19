<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LegalController extends Action {

    /**
     * @Route("/legal/termsAndConditions", name="terms")
     */
    public function termsAction() {
        return $this->render('application/termsAndConditions.html.twig');
    }

    /**
     * @Route("/legal/privacy", name="privacy")
     */
    public function privacyAction() {
        return $this->render('application/privacy.html.twig');
    }
}