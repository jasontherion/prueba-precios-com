<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Usuario;

class UserController extends AbstractController
{

    public function index(): Response
    {
        $date = date('Y-m-d H:i:s', strtotime("-30 days")); 
        $response = new JsonResponse();
        $user_resp = $this->getDoctrine()->getRepository(Usuario::class);
        $query=  $user_resp->createQueryBuilder('p')
        ->where('p.dateRegister > :dateRegister')
        ->setParameter('dateRegister', $date)
        ->getQuery();
        $user_data= $query->getResult();

        foreach($user_data as $user){
            echo "<h1> {$user->getNombre()} - {$user->getApellidos()} -{$user->getUseragent()} - {$date}</h1>";
        }

        die();


   }
}
