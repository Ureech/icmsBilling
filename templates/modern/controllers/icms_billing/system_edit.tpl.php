<?php
    $this->renderForm($form, $items, array(
        'action' => '',
        'cancel' => array('show' => true, 'href' => $back_url),
        'method' => 'post',
        'toolbar' => false
    ), $errors);
    ?>