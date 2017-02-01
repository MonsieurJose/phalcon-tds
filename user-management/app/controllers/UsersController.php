<?php

/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 01/02/2017
 * Time: 14:36
 */
class UsersController
{

    public function indexAction($sField="firstname",$sens="asc",$filter=NULL) {
        $users = User::find(); //::find()
        $this -> view->setCar("users",$users);

    }
    public function formAction($id=NULL) {

    }

    public function updateAction($id=NULL) {

    }

    public function deleteAction($id) {

    }

    public function messageAction() {

    }
}