<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;

/**
 * Class FooterController
 * @package AppBundle\Controller\Application
 */
class FooterController extends Action {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function footerAction() {
        $data = [
            'year' => date("Y")
        ];

        return $this->render('application/footer.html.twig', $data);
    }
}