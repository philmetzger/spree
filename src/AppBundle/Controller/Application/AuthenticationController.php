<?php
namespace AppBundle\Controller\Application;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;

class AuthenticationController extends Action {

    /**
     * @Route("/login")
     */
    public function loginAction() {
        $account = new Account();
        $account->setUsername('Strange Quirks');

//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($account);
//        $em->flush();

        return $this->render('application/login.html.twig', []);
    }
}