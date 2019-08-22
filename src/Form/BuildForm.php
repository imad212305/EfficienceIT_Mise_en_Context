<?php


namespace App\Form;


use App\Entity\Fiche;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Twig\Environment ;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Entity ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class BuildForm
{
    public function BuildForm(FormBuilderInterface $builder , array $option)
    {
            $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mail', TextType::class)
            ->add('msg', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'envoyer'])
            ;
    }
}