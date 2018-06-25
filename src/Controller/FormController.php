<?php

namespace Controller;

use Model\Form;
use Model\FormManager;


/**
 * Class FormController
 * @package Controller
 */
class FormController extends AbstractController
{

    /**
     * @return string
     */
    public function index()
    {
        $form = new FormManager();
        $data=[];
        $errors=[];
        $valid=[];
        if (isset($_POST['envoyer'])) {
            $data['Nom'] = '';
            $data['Prenom'] = '';
            $data['Adresse'] = '';
            $data['Phone'] = '';

            //verification du remplissage des champs
            if ($_POST['Nom'] != "") {
                $data['Nom'] = $_POST['Nom'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['Prenom'] != "") {
                $data['Prenom'] = $_POST['Prenom'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['Adresse'] != "") {
                $data['Adresse'] = $_POST['Adresse'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['Phone'] != "") {
                $data['Phone'] = $_POST['Phone'];

            } else {
                $errors[] = "Veuillez saisir ce champ";
            }
            $valid[]= "votre message a été envoyé ";

            $formulaire = $form->insert($data);
        }
        return $this->twig->render('Form/index.html.twig', ['data'=>$data,'errors'=>$errors, 'valid'=>$valid, 'formulaire'=>$formulaire]);
    }


    public function show()
    {

        $form= new FormManager();
        $formulaires = $form->findAll();

        return $this->twig->render('Form/show.html.twig',['formulaires'=>$formulaires]);
    }




}