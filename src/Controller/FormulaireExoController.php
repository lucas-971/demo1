<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use App\src\Client;


class FormulaireExoController extends AbstractController
{
    public function formToConnect(Request $request)
    {
        $client = new Client();
        $form = $this->createFormBuilder($client)
        ->add('nom', TextType::class)
        ->add('mail', TextType::class)
        ->add('age', IntegerType::class)
        ->add('solde', IntegerType::class)
        ->add('anniv', BirthdayType::class)
        ->add('pourcentage', IntegerType::class)
        ->add('Valider',SubmitType::class)
        ->add('annuler',ResetType::class)
        ->getForm();


    $form->handleRequest($request) ;
    if ($form->isSubmitted()) {
    return $this->render('formulaire_exo/creer_index.html.twig',
    array('client'=>$client));
    }
    return $this->render('formulaire_exo/index.html.twig',
    array('form'=>$form->createView()));
    }
}