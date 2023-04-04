<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function index()
    {
        $user = new User();
        $form = $this->createForm( type: RegisterType::class);

        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
