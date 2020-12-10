<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;

class UserController extends AbstractController
{

    public function index(LoggerInterface $logger, PaginatorInterface $paginator ,Request $request): Response
    {
        $logger->info('llamando servicio de monolog');
        
        $date = date('Y-m-d H:i:s', strtotime("-30 days")); 
        $user_resp = $this->getDoctrine()->getRepository(Usuario::class);
        $query=  $user_resp->createQueryBuilder('p')
        ->where('p.dateregister > :dateregister')
        ->setParameter('dateregister', $date)
        ->getQuery();
        
        
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
           $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

     #   foreach($user_data as $user){
     #      echo "<h1> {$user->getNombre()} - {$user->getApellidos()} -{$user->getUseragent()} - {$date}</h1>";
     #  }

      return $this->render('layauot.html.twig',['pagination' => $pagination]);

   }
}
