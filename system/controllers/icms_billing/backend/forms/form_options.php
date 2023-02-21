<?php

class formIcmsBillingOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'childs' => array(

                    new fieldCheckbox('is_enable', array(
                        'title' => LANG_CALCULATION_BACKEND_ENABLED,
                        'default' => 1
                    )),
                    new fieldString('carrency', array(
                        'title' => LANG_CALCULATION_BACKEND_CARRENCY,
                        'default' => 'рубль'
                    )),
                )
            )

        );

    }

}
