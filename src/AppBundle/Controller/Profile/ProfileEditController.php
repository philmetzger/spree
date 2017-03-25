<?php
namespace AppBundle\Controller\Profile;

use AppBundle\Application\Action;
use AppBundle\Entity\Account;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\ConstraintViolationList;

class ProfileEditController extends Action {

    /**
     * @Route("/profile/{username}/edit", name="profileEdit")
     */
    public function profileEditAction(Request $request, $username = null) {
        if (is_null($username)) {
            return $this->redirectToRoute('home');
        }

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

        $errors = null;
        if ($request->isMethod('post')) {
            $displayName = $request->get('displayName');
            if ($displayName && strlen($displayName) > 2) {
                $account->setDisplayName($displayName);
            }

            $account->setDescription($request->get('description'));

            $errors = $this->validateAccount($account);
            if (count($errors) < 0) {
                $accountService->save($account);
            }
            $errors = null;
        }

        $data = [
            'displayName' => $account->getDisplayName(),
            'firstLetter'=> mb_substr($account->getDisplayName(), 0, 1, 'utf-8'),
            'username' => $account->getUsername(),
            'description' => $account->getDescription(),
            'title'=> $this->getTitle($username),
            'errors' => $errors
        ];

        return $this->render('profile/profileEdit.html.twig', $data);
    }

    /**
     * @param string $username
     * @return string
     */
    private function getTitle($username) {
        return $username . ' | Edit';
    }

    /**
     * @param Account $account
     * @return mixed
     */
    private function validateAccount($account) {
        $validator = $this->get('validator');
        $errors = $validator->validate($account);

        return $errors;
    }
}