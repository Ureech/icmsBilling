<?php $this->addControllerCSS('styles', 'icms_billing', false); ?>
<?php $this->addBreadcrumb(LANG_CALCULATION_BALANCE); ?>

<div class="alert col"><span class="alert-col"><?php echo LANG_CALCULATION_USER_BALANCE .':' ?></span>
<span class="alert-number"><?php echo $balance ?></span><span class="alert-carr"><?php echo $options['carrency'] ?></span>
</div>
<?php $button_text = $is_admin ? LANG_CALCULATION_CHANGE_BALANCE : LANG_CALCULATION_BACKEND_BALANCE_COMPLETION ?>
<div class="col">
    <a class="btn btn-success col-balance " href="<?php echo $button_url ?>"><i><?php echo html_svg_icon('solid','coins') ?></i><?php echo $button_text ?></a>
    <a class="btn btn-primary col-out "  href="/calculation/user_balance_out?id=<?php echo $id ?>"><i><?php echo html_svg_icon('solid','sign-out-alt') ?></i><?php echo LANG_CALCULATION_OUT_MANY ?></a>
</div>

<div class="table-responsive mt-5">
<div class="history-h4"><h4><?php echo LANG_CALCULATION_HISTORY ?></h4></div>
    <table class="table table-sm table-striped">
        <thread>
            <th width="50px">#</th>
            <th><?php echo LANG_DATE ?></th>
            <th><?php echo LANG_CALCULATION_ACTION ?></th>
            <th><?php echo LANG_CALCULATION_SUMM ?></th>
        </thread>
        <?php if($history){ ?>
            <?php foreach($history as $item){?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['date_created'] ?></td>
                    <td><?php echo $item['description'] ?></td>
                    <td><?php echo $item['amount'] ?></td>
                    
                </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr class="alert-info p-2"><td colspan="4">
                <?php echo LANG_CALCULATION_NO_HISTORY ?>
            </td></tr>
                <?php } ?>
    </table>
</div>
<?php

 ?>

<?php //print_r($options); ?>