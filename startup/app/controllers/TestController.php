<?php

class TestController extends \Phalcon\Mvc\Controller
{
    protected $semantic;
    public function initialize(){
        $this->semantic=$this->jquery->semantic();
    }
    public function indexAction()
    {

    }

    public function hideShowAction()
    {
        $ck=$this->semantic->htmlCheckbox("buttoncheck","Masquer/afficher");
        $message = $this->semantic->htmlMessage("zone","Erwan est pas très bo");
        $ck->on("change",$message->jsToggle("$(this).prop('checked')"));
        $this->jquery->compile($this->view);
    }
    public function changeCssAction () {
        $bt1=$this->semantic->htmlButton("btPage1","Page 1");
        $bt2=$this->semantic->htmlButton("btPage2","Page 2");
        $mesage=$this->semantic->htmlMessage("pageContent");
        $mesage=$this->semantic->htmlMessage("pageDesc");
        $bt1->getOnClick("test/page1","#pageContent");
        $bt2->getOnClick("test/page2","#pageContent");

        $bt1->setProperty("data-description","description du btn 1");
        $bt2->setProperty("data-description","description du btn 2");

        $bt1->on("mouseover",$this->jquery->html(
            "#pageDesc",$bt1->getProperty("data-description")
        ));
        $bt2->on("mouseover",$this->jquery->html(
            "#pageDesc",$bt2->getProperty("data-description")
        ));

        $this->jquery->compile($this->view);
    }
    public function getCascadeAction () {
        $mesage=$this->semantic->htmlMessage("page1");
        $btLoad=$this->semantic->htmlButton("btLoad","Chargement");
        $btLoad->getOnClick("test/page1","#page1");
        $this->jquery->compile($this->view);
    }
    public function page1Action () {
        $this->view->disable();
        echo "Page 1";
        echo "<div id='page2'></div>";
        $this->jquery->get("test/page2","#page2");
        echo $this->jquery->compile($this->view);
    }
    public function page2Action () {
        echo "Page 2" ;
    }
    public function postFormAction () {
        $form=$this->semantic->htmlForm("form1");
        $form->addInput("nom","Nom : ");
        $form->addInput("mail","Email : ");
        $form->addButton("btValider","Valider")->asSubmit();
        $mesage=$this->semantic->htmlMessage("postReponse");
        $form->submitOn("click","btValider","test/postReponse","#postReponse");

        $this->jquery->compile($this->view);
    }
    public function postReponseAction () {
        echo 'Nom : '.$_POST['nom']."<br> Adresse : ".$_POST['mail'];
    }
}

