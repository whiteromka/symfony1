<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    // #[Route('/default/{id}', name: 'app_default', requirements: ['id' => '\d+'], defaults: ['id' => 1], methods: ['GET'])]
    // $r->query->get('name');

    #[Route('/default', name: 'app_default')]
    public function index()
    {
        //phpinfo();

        $b = new Blog();
       // dd([1,2,3]);
//        return $this->render('default/index.html.twig', [
//            'controller_name' => 'DefaultController',
//        ]);

        return $this->redirectToRoute('app_blog_index');
    }

    #[Route('/create-blog', name: 'create-blog')]
    public function createBlog(EntityManagerInterface $entityManager): Response
    {
        $blog = new Blog();
        $blog->setTitle('My first title')->setDescr('My description!');

        $entityManager->persist($blog);
        $entityManager->flush();


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


    #[Route('/find-blog', name: 'find-blog')]
    public function findBlog(EntityManagerInterface $entityManager, BlogRepository $blogRepository): Response
    {
       // $blog = $blogRepository->findBy(['id' => 1]);
        $blogs = $blogRepository->findAll();
        dd($blogs);
    }
}
