<?php

class modelIcmsBilling extends cmsModel {
    
    public function getSum($row,$table){
        $sel = $this->db->query("SELECT SUM($row) as summ FROM `{#}$table`");
        $result = $this->db->fetchAssoc($sel);
        return $result['summ'];
    }
    
}
