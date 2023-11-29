<?php

namespace App\Controller;

use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(): Response
    {
        
        $post =new Post();
        // $post->setFirstName('enter first name');
        // $post->setLastName('enter last name');
        // $post->setEmail('enter Email id');
        // $post->setPassword('enter password');

        $form = $this->createForm(PostType::class, $post);
        return $this->render('form/index.html.twig', [
            'post_form' => $form->createView()
        ]);
    }
}
