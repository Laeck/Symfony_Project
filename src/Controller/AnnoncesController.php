<?php

namespace App\Controller;

// HTTPFoundation nous permet de recup response
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;

    /**
    *@Route("/annonces")
    */

class AnnoncesController
{
    // Manière alternatif d'utilisation des routes, direct dans le controller 
    /**
    *@Route("/", name="annonces_listall")
    */
    public function listall(Environment $twig)
    {
        
        $content = $twig->render('Annonce/listall.html.twig');
        return new Response($content);
    }

    /**
    *@Route("/{id}", name="annonces_detail", requirements={"id" = "\d+"})
    */
    public function detail($id, Environment $twig)
    {
        $params = [
            'monid' => $id
        ];
        $content = $twig->render('Annonce/detail.html.twig', $params);
        return new Response($content);
    }

    /**
    *@Route("/add", name="annonces_add")
    */
    public function add(Environment $twig)
    {
        $content = $twig->render('Annonce/add.html.twig');
        return new Response($content);
    }
}
