<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends Action {

    /**
     * @Route("/profile/{username}", name="profile")
     */
    public function profileAction($username = null) {
        if (is_null($username)) {
            return $this->redirectToRoute('feed');
        }

        $data = [];

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        $account = $accountService->getByUsername($username);
        if ($account) {
            $data['name'] = $account->getDisplayName();
        }

        return $this->render('profile/profile.html.twig', $data);
    }
}