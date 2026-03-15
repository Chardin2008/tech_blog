<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PostRepository;
final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(postrepository $postRepository): Response
    { $posts = $postRepository->findAll();
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
            'posts' => $posts,
        ]);
    }
     #[Route('/about', name:'app_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }
}
