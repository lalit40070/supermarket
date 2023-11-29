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
        

        $form = $this->createForm(PostType::class, $post, [
            'action' => $this->generateUrl('form')
            
        ]);





        return $this->render('form/index.html.twig', [
            'post_form' => $form->createView()
        ]);
    }
}
