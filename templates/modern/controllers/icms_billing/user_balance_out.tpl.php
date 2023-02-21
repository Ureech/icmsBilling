<?php $this->addControllerCSS('styles', 'icms_billing', false); ?>
<?php $this->addBreadcrumb(LANG_CALC_BALANCE_OUT); ?>
<div class="row">

<?php
$this->renderForm($form, [], array(
        'action' => '',
        'submit'       => ['title' => LANG_CONTINUE, 'show' => true],
        'cancel' => array('show' => true, 'href' => $back_url),
        'method' => 'post',
        'toolbar' => false
    ), $errors);
    ?>
    </div>
   