<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

    function CheckUser($data) {
        $this->db->select('*')
                ->from('usr_adm')
                ->where('uname', $data['uname'])
                ->where('pwd', $data['pwd'])
                ->limit(1);
        $exec = $this->db->get();
        if ($exec->num_rows() == 1) {
            return $exec->result();
        } else {
            
        }
    }

}
