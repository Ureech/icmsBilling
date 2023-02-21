<?php

class backendIcms_billing extends cmsBackend {
   
    public $useDefaultOptionsAction = true;

    public function actionIndex(){
        $this->redirectToAction('options');
    }

    public function getBackendMenu(){
        return array(
            array(
                'title' => LANG_ICMS_BILLING_BACKEND_TAB_OPTIONS,
                'url' => href_to($this->root_url, 'options')
            ),
            /*{comgen-backend-menu}*/
        );
    }

}
