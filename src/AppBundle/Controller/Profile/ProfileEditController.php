<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProfileEditController extends Action {

    /**
     * @Route("/profile/{username}/edit", name="profileEdit")
     */
    public function profileEditAction($username = null) {
        if (is_null($username)) {
            return $this->redirectToRoute('home');
        }

        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        $account = $accountService->getByUsername($username);
        if (!$account) {
            return $this->redirectToRoute('home');
        }

        $data = [
            'displayName' => $account->getDisplayName(),
            'firstLetter'=> mb_substr($account->getDisplayName(), 0, 1, 'utf-8'),
            'username' => $account->getUsername(),
            'description' => $account->getDescription(),
            'title'=> $this->getTitle($username)
        ];

        /* @var \AppBundle\Service\SessionService $sessionService */
        $sessionService = $this->get('app.session');
        if ($account->getId() != $sessionService->getAccountId()) {
            return $this->redirectToRoute('profile', ['username' => $account->getUsername()]);
        }

        return $this->render('profile/profileEdit.html.twig', $data);
    }

    /**
     * @Route("/profile/{username}/edit/save", name="profileEditSave")
     */
    public function profileEditSaveAction(Request $request, $username) {
        /* @var \AppBundle\Service\AccountService $accountService */
        $accountService = $this->get('app.account');

        $account = $accountService->getByUsername($username);
        if (!$account) {
            return $this->redirectToRoute('home');
        }

        /* @var \AppBundle\Service\SessionService $sessionService */
        $sessionService = $this->get('app.session');
        if ($account->getId() != $sessionService->getAccountId()) {
            return $this->redirectToRoute('profile', ['username' => $account->getUsername()]);
        }

        $displayName = $request->get('displayName');
        if ($displayName && strlen($displayName) > 2) {
            $account->setDisplayName($displayName);
        }

        $account->setDescription($request->get('description'));

        $accountService->save($account);

        return $this->redirectToRoute('profileEdit', ['username' => $account->getUsername()]);
    }

    /**
     * @param string $username
     * @return string
     */
    private function getTitle($username) {
        return $username . ' | Edit';
    }
}