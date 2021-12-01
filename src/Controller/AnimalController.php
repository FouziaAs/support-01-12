<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animals", name="animals")
     */
    public function list(): Response
    {
        $animals[] = new Animal('Medor', 'dog', 3);
        $animals[] = new Animal('Rox', 'DOG', 12);
        $animals[] = new Animal('Rookie', 'fox', 4);
        $animals[] = new Animal('Bubulle', 'fish', 1);
        $animals[] = new Animal('Trafalgar', 'cat', 10);
        $animals[] = new Animal('Jean-Baptiste', 'frog', 2);
        $animals[] = new Animal('Quipue', 'ferret', 5);
        $animals[1]->addBuddy($animals[2])->addBuddy($animals[4]);

        return $this->render('animal/list.html.twig', [
            'animals' => $animals,
        ]);
    }
}
