<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    #[Route('/hayao-miyazaki', name: 'page1')]
    public function page1(): Response
    {
        return $this->render('blog/page1.html.twig');
    }

    #[Route('/isao-takahata', name: 'page2')]
    public function page2(): Response
    {
        return $this->render('blog/page2.html.twig');
    }

    #[Route('/contact', name: 'page3')]
    public function page3(): Response
    {
        return $this->render('blog/page3.html.twig');
    }
}
