<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/firstcontroller')]
    public function controller(): Response {

        $number = random_int(0, 100);

        return $this->render('first/first.html.twig', [
            'rand_number' => $number,
        ]);

    }
}