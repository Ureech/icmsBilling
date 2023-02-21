<?php

class icms_billing extends cmsFrontend {
   
    public function allMany($row,$table){
        return $this->model->getSum($row,$table);
    }
    
}
