<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Test extends CI_Model {

    function CheckUser($data) {
        $this->db->select('*')
                ->from('usr_adm')
                ->where('uname', $data['uname'])
                ->where('pwd', $data['pwd']);
        $exec = $this->db->get();
        if ($exec->num_rows() != 0) {
            $data = array(
                'stat' => 'ok'
            );
            json_encode($data);
        }
    }

}
