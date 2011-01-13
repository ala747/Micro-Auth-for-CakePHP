<?php
class AuthAppController extends AppController {

    /**
     * Before Filter
     */
    function beforeFilter(){
        $this->Auth->loginAction = array('admin' => false, 'plugin' => 'auth', 'controller' => 'users', 'action' => 'login');
        $this->Auth->autoRedirect = false;
    }


    /**
     * Before Render
     */
    function beforeRender(){
        unset($this->data['User']['password']);
        unset($this->data['User']['password_confirm']);
    }

}
