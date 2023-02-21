<?php $this->addControllerCSS('styles', 'icms_billing', false); ?>
<?php $this->addBreadcrumb(LANG_CALCULATION_BACKEND_TAB_REPORT); ?>
<div class="row report">
<div class="col-sm-12 col-md-5">  
<div class="row">
    <div class="col-auto">
        <h5><?php echo LANG_CALCULATION_BACKEND_BALANCE_ALL ?> </h5>
        <span class="all-many"><?php echo $all_many ?></span>
        </div>
        <div class="col-auto">
        <h5><?php echo LANG_CALCULATION_BACKEND_DEBT ?> </h5>
        <span class="debt">22222</span>
    </div>
    <table class="table mt-3 table-sm">
        <thead>
    <tr><th colspan="2" class="text-center"><h5><?php echo LANG_CALCULATION_BACKEND_PAYMENTS_ADD ?></h5></th></tr>
    <thead>
        <tr><td><?php echo LANG_TODAY ?></td><td><?php echo 0 ?></td></tr>
        <tr><td><?php echo LANG_YESTERDAY ?></td><td><?php echo 0 ?></td></tr>
        <tr><td><?php echo LANG_WEEK ?></td><td><?php echo 0 ?></td></tr>
        <tr><td><?php echo LANG_MONTH ?></td><td><?php echo 0 ?></td></tr>
        </table>   
    </div>
    </div>

    <div class="col-sm-12 col-md-5 ">  
<div class="row p-3">
<div class="col-auto">
    <table class="table table-sm">
    <thead>
    <tr><th colspan="2" class="text-center"><h5><?php echo LANG_CALCULATION_BACKEND_TOP ?></h5></th></tr>
    <thead>
    <tr><td>123</td><td>123</td></tr>
    </table>
    </div>
    <div class="col-auto">
    <table class="table table-sm">
    <thead>
    <tr><th colspan="2" class="text-center"><h5><?php echo LANG_CALCULATION_BACKEND_LOW ?></h5></th></tr>
    <thead>
    <tr><td>123</td><td>123</td></tr>
    </table>
    </div>
</div>
    </div>

    <div class=""></div>
    <div class=""></div>
    <div class=""></div>
</div>