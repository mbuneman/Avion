<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
 /**
*
*@Route("/", name="home")
*/
public function home()
{
    $title='Les Voyages Aériens Long Courrier pour l\'Avenir';

 return $this->render('home/index.html.twig', [
     'titre'=>$title

]);
}
}
