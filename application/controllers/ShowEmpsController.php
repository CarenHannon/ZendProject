<?php

class ShowEmpsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $emps = new Application_Model_CompanyMapper();
        $this->view->entries = $emps->fetchEmployee();
    }


}

