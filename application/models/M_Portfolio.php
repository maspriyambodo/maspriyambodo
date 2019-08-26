<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Portfolio extends CI_Model {

    function Loadportfolio() {
        $exec = $this->db->select('*')
                ->from('portfolio')
                ->get();
        return $exec->result();
    }

}
