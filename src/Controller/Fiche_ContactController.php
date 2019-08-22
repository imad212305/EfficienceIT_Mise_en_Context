<?php

namespace App\Controller;

use App\Entity\Fiche;
use App\Entity\Fixture;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Twig\Environment ;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Entity ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class Fiche_ContactController extends AbstractController
{
    public function index(Environment $twig , Request $request)
    {

        $Fiche = new Fiche();
        $form = $this->createFormBuilder($Fiche)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mail', TextType::class)
            ->add('msg', TextType::class)
            ->add('dept',EntityType::class,
                array(
                        'class' => 'App\Entity\Fixture',
                        'choice_label' =>'nom',
                        'expanded' => false,
                        'multiple' => false))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() ) {

            $entityManager = $this->getDoctrine()->getManager();
            $fixture = $this->getDoctrine()
                ->getRepository('App\Entity\Fixture')
                ->find($Fiche->getDept());
            $Fiche->setChef($fixture->getChef());
            $entityManager->persist($Fiche);
            $entityManager->flush();

            return new Response('save');
        }

        return $this->render('Fiche_Contact/Fiche.html.twig', [
            'form' => $form->createView(),
        ]);

    }

}