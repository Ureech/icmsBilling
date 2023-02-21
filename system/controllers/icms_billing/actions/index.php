<?php

class actionIcms_billingIndex extends cmsAction{

    public function run(){

        $user = cmsUser::getInstance();
        $template = cmsTemplate::getInstance();

        return $template->render('index', array(
            'message' => LANG_ICMS_BILLING_CONTROLLER,
        ));

    }

}
