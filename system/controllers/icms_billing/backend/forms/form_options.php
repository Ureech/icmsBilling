<?php

class formIcms_billingOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'childs' => array(

                    new fieldCheckbox('test', array(
                        'title' => 'Тестовая опция',
                    )),

                )
            )

        );

    }

}
