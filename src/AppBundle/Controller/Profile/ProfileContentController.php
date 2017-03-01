<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileContentController extends Action {

    /**
     * @param string $username
     * @param null|string $submenu
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contentAction($username, $submenu = null) {
        return $this->render('profile/profileContentProducts.html.twig');
    }
}