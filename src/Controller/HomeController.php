<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        if(isset($_POST['go_script'])){
            sleep(30);
            $this->addFlash(
                'success',
                'Le script est fini'
            );
        }
        return $this->render('index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
