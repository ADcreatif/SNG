<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class PageController extends AbstractController
{

    /**
     * @Route("/{_locale}/", name="home")
     */
    public function home()
    {
        return $this->render('page/home.html.twig');
    }

    /**
     * @Route("/{_locale}/test", name="test")
     */
    public function test()
    {
        return $this->render('page/test.html.twig');
    }
    /**
     * @Route("/{_locale}/translation/create", name="translation_create")
     */
    public function translation_create()
    {
        return $this->render('page/test.html.twig');
    }

    /**
     * @Route("{_locale}/logout", name="logout")
     */
    public function logout(){

    }

    /**
     * @Route("{_locale}/login", name="login")
     */
    public function login(Request $request)
    {
        // just setup a fresh $task object (remove the example data)
        $user = new User();

        $form = $this->createForm(LoginType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $user = $form->getData();

            $unauthenticatedToken = new UsernamePasswordToken(
                $user->username,
                $user->password,
                $this->providerKey
            );

            $authenticatedToken = $this
                ->authenticationManager
                ->authenticate($unauthenticatedToken);

            $this->tokenStorage->setToken($authenticatedToken);

           // dd($user);

            return $this->redirectToRoute('home', ['_locale' => 'fr']);
        }

        return $this->render('page/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
