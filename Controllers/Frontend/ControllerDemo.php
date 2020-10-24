<?php

class Shopware_Controllers_Frontend_ControllerDemo extends Enlight_Controller_Action
{
    public function preDispatch() 
    {
        $this->view->addTemplateDir(__DIR__ . '/../../Resources/views');
    }
    public function indexAction()
    {
       $this->view->assign('nextAction', 'adult');
    }

    public function adultAction() {
        $this->view->assign('nextAction', 'index');
    }

    public function postDispatch() {
        $currentAction = $this->Request()->getActionName();
        $this->view->assign('currentAction', $currentAction);
    }
}