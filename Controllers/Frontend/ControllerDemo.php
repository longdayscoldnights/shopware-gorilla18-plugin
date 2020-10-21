<?php

class Shopware_Controllers_Frontend_ControllerDemo extends Enlight_Controller_Action
{
    public function preDispatch() 
    {
        $this->view->addTemplateDir(__DIR__ . '/../../Resources/views');
    }
    public function indexAction()
    {
       
    }
}