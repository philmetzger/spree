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
            return $this->redirectToRoute('home');
        }

        $data = [];

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        $account = $accountService->getByUsername($username);
        if (!$account) {
            return $this->redirectToRoute('home');
        }

        $data['name'] = $account->getDisplayName();
        $data['username'] = $account->getUsername();
        $data['description'] = $account->getDescription();
        $data['firstLetter'] = mb_substr($account->getDisplayName(), 0, 1, 'utf-8');

        return $this->render('profile/profile.html.twig', $data);
    }
}