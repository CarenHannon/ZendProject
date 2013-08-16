<?php

class ShowProjsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $depts = new Application_Model_CompanyMapper();
        $this->view->entries = $depts->fetchProject();
    }


}

