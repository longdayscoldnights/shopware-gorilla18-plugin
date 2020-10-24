<?php

class Shopware_Controllers_Frontend_ControllerDemo extends Enlight_Controller_Action
{
    public function preDispatch() 
    {
        // This is for user authentification, will use this code later for adults non adults to redirect to different pages
        if($this->Request()->getActionName() === 'index' && !$this->get('session')->get('sUserId')) {
            $this->redirect([
                'controller' => 'account',
                'action' => 'login',
                'sTarget' => 'ControllerDemo',
                'sTargetAction' => $this->Request()->getActionName()
            ]);
        }
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