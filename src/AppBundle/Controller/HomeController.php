<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {
    /**
     * @Route("/home")
     */
    public function testAction() {
        $account = new Account();
        $account->setUsername('Strange Quirks');

//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($account);
//        $em->flush();

        return $this->render('feed/feed.html.twig', []);
    }
}