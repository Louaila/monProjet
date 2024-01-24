<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class PersonController extends AbstractController
{
    #Route("/person/new,none ="person_new")
    public function new(Request $request): Response
    {
      $person = new Person();
      $form= $this->createForm( PersonType::class, $Person);

      if ($form->isSubmitted() && $form->isValid ()){
        //Code au cas ou le cta ( clique to action) est cliqué
    
      }

    return $this->render('person/new.html.twig', [
          'form' => $form->createView(),
      ]);

}
}