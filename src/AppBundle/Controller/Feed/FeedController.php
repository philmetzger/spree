<?php
namespace AppBundle\Controller\Feed;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;

class FeedController extends Action {
    /**
     * @Route("/feed")
     */
    public function testAction() {
//        $account = new Account();
//        $account->setUsername('Strange Quirks');

//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($account);
//        $em->flush();

        return $this->render('feed/feed.html.twig', []);
    }
}