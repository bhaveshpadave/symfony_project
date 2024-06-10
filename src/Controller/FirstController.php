<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController
{
    #[Route('/firstcontroller')]
    public function number(): Response {
        $number = random_int(0, 100);

        return new Response(
            '<html>
                <body>
                    <h1>First Controller</h1>
                    First number: '.$number.'
                </body>
            </html>'
        );
    }
}