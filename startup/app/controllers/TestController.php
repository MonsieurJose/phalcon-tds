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
        $bt1->getOnClick("test/page1","#pageContent");
        $bt2->getOnClick("test/page2","#pageContent");

        $this->jquery->compile($this->view);
    }
    public function page1Action () {

    }
    public function page2Action () {

    }
}

