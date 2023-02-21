<?php $this->addControllerCSS('styles', 'icms_billing', false); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<?php
    $this->addToolButton(array(
        'class' => 'add',
        'title' => LANG_ADD,
        'href'  => $this->href_to('system_add')
    ));
  

 $this->addBreadcrumb(LANG_CALCULATION_BACKEND_TAB_SYSTEMS);

$this->renderGrid($this->href_to('systems'), $grid);

 ob_start();?>

 <script>
    <?php echo $this->getLangJS('LANG_CALC_SYSTEM_INST_PAY_TEXT') ?>
    var str = LANG_CALC_SYSTEM_INST_PAY_TEXT;
    new DOMParser()
    var el = new DOMParser().parseFromString(str, "text/html")
    var table = document.querySelector('#datagrid');
    var cells = table.children[0].children[0].cells;
    for(item in cells){
        if(cells[item].classList && cells[item].classList.contains('inst-pay')){
            cells[item].innerHTML+=el.all[0].textContent        
        }      
    }
$('.help').tooltip({'trigger':'click'}) 
 
</script>

 <?php $this->addBottom(ob_get_clean()); ?>