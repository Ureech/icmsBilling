<?php $this->addControllerCSS('styles', 'icms_billing', false); ?>
<?php $this->addBreadcrumb(LANG_CALC_BALANCE_COMPLETION); ?>

<?php
if(!$sys){
    $this->renderForm($form, [], array(
        'action' => '',
        'submit'       => ['title' => LANG_CONTINUE, 'show' => true],
        'cancel' => array('show' => true, 'href' => $back_url),
        'method' => 'post',
        'toolbar' => false
    ), $errors);
} else { ?>

<div class="row">
<div class="col-md-5">
    <div class="sys">
    <h4><?php echo LANG_CALC_SYSTEM_VALIDATE ?></h4>
    <form action="<?php echo $sys['payment_url'] ?>" method="POST">

    <input type="hidden" name="receiver" value="<?php echo $sys['walet'] ?>" />
    <input type="hidden" name="quickpay-form" value="button" />
    <input type="hidden" name="sum" value="<?php echo $fields['sum'] ?>" />
    <input type="hidden" name="paymentType" value="<?php echo $fields['payment_type'] ?>" />

    <table class="table table-striped">
        <tr>
            <td><?php echo LANG_CALCULATION_SUMM ?></td><td><?php echo $fields['sum'] ?></td>
        </tr>
        <tr>
            <td><?php echo LANG_CALC_SYSTEM_PAY ?></td><td><?php echo $sys['title'] ?></td>
        </tr> 
        <tr>
            <td colspan="2"><a href="/calculation/user_balance_add?id=<?php echo $id ?>"><?php echo LANG_CALC_SYSTEM_CHANGE_DATA ?></a></td>
        </tr> 
        <tr>
            <td ><?php echo LANG_CALC_SYSTEM_PAY_TYPE ?></td><td ><?php echo $arr[$fields['payment_type']] ?></td>
        </tr>        
        <tr>
            <td colspan="2"><button class="btn btn-secondary" type="submit"><?php echo LANG_CALC_SYSTEM_REQUEST ?></button></td>
        </tr>                      
    </table>
  </form>
</div>
</div>
</div>

<?php } ?>