<?php
namespace AppBundle\Controller\Feed;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FeedController extends Action {

    /**
     * @Route("/feed", name="feed")
     */
    public function feedAction() {
        return $this->render('feed/feed.html.twig', []);
    }
}