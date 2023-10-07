<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[route('/show', name:'show')]
public function show(): response
{
return new response('<h1>bonjour 3a61</h1>');
}
#[Route('/msg/{name}', name: 'msg')]
public function msg($name): Response
{
    $authors = array(
        array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
        array('id' => 2, 'picture' => '/images/william-shakespeare.jpg', 'username' => 'William Shakespeare', 'email' =>  'william.shakespeare@gmail.com', 'nb_books' => 200),
        array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
    );
    if (empty($authors)) {
        
        return new Response('Aucun auteur n\'est disponible.');
    }
    return $this->render('home/msg.html.twig', [
        'auth' => $authors,
    ]);
}
#[Route('/author/{id}', name: 'author_details')]
public function authorDetails($id): Response
{
    
    $authorDetails = [
        'id' => $id,
        'name' => 'Victor Hugo',
        'picture' => '/images/Victor-Hugo.jpg',
        'email' =>'victor.hugo@gmail.com ',
        'nb_books'=>100,
        'id' => $id,
        'name' => 'William Shakespeare',
        'picture' => '/images/william-shakespeare.jpg',
        'email' =>'william.shakespeare@gmail.com ',
        'nb_books'=>200,
        'id' => $id,
        'name' => 'Taha Hussein',
        'picture' => '/images/Taha_Hussein.jpg',
        'email' =>'Taha.Hussein.@gmail.com ',
        'nb_books'=>300,
         
    ];
    return $this->render('home/showAuthor.html.twig', [
        'authorDetails' => $authorDetails,
    ]);
}
}




