<?php

class M_Backupdb extends CI_Model {

    function index() {
        $exec = $this->db->list_tables();
        $tot = count($exec);
        $i = 0;
        while ($i < $tot) {
            $query = [
                'tbname' => $exec[$i++]
            ];
            $data[] = array_merge($query);
            $i++;
        }
        return $data;
    }

}
