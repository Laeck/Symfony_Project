<?php

namespace App\Controller;

// HTTPFoundation nous permet de recup response
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController
{
    // Manière alternatif d'utilisation des routes, direct dans le controller    
    /**
    *@Route("/", name="default_index")
    */

    // Index : est une action du controller
    public function index(Environment $twig)
    {
        $tab = array('val1', 'val2', 'val3');
        // Le fait de mettre un tableau en paramètre, la vue va pouvoir récupérer les paramètres
        $content = $twig->render('Default/index.html.twig', ['name' => 'Mika', 'age' => 29, 'mytab' => $tab]);

        return new Response($content);
    }

    /**
    *@Route("/plateform", name="getplateform")
    */
    // getplaform est une action
    public function getplateform(Environment $twig)
    {
        // Affichage alternatif;
        return new Response($twig->render('Default/getplateform.html.twig'));
    }
}
