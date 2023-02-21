<?php

class backendIcms_billing extends cmsBackend {
   
    public $useDefaultOptionsAction = true;

    public function actionIndex(){
        $this->redirectToAction('options');
    }

    public function getBackendMenu(){
        return array(
            array(
                'title' => LANG_CALCULATION_BACKEND_TAB_REPORT,
                'url'   => href_to($this->root_url, 'report'),
                'options' => [
                    'icon' => 'layer-group'
                ]
                ),            
            array(
                'title' => LANG_CALCULATION_BACKEND_TAB_OPTIONS,
                'url' => href_to($this->root_url, 'options')
            ),
            array(
                'title' => LANG_CALCULATION_BACKEND_TAB_COMPLETION,
                'url' => href_to($this->root_url, 'addition')
            ),
            array(
                'title' => LANG_CALCULATION_BACKEND_TAB_SYSTEMS,
                'url' => href_to($this->root_url, 'systems')
            ),            
        );
    }

}
