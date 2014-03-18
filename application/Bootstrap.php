<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

 protected function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array (
            'namespace' => '',
            'basePath' => dirname(__FILE__),));
        // echo '<pre>';print_r($autoloader);exit;
        return $autoloader;
    }

    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
}

