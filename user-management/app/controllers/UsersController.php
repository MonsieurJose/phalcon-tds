<?php

/**
 * Created by PhpStorm.
 * User: clement
 * Date: 01/02/2017
 * Time: 14:36
 */
class UsersController
{
    public function indexAction($sField="firstname",$sens="asc",$filter=NULL) {
        $users = User::find(); //::find()
        $this -> view->setVar("users",$users);

    }
    public function formAction($id=NULL) {

    }

    public function updateAction($id=NULL) {
            $Utilisateur = new User();
            $Utilisateur->setLastname($_POST["nom"]);
            $Utilisateur->setFirstname($_POST["prenom"]);
            $Utilisateur->setLogin($_POST["login"]);
            $Utilisateur->setPassword($_POST["mdp"]);
            $Utilisateur->setEmail($_POST["email"]);
            $Utilisateur->getRole()->setName($_POST["role"]);
            $Utilisateur->save();

    }

    public function deleteAction($id) {

    }

    public function messageAction() {

    }
}