<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Dashboard
 *
 * @author priyambodo
 */
class M_Dashboard extends CI_Model {

    function index() {
        $exec = $this->db->select('COUNT(customers.id_customer) AS totcust')
                ->from('customers')
                ->get()
                ->result();
        return $exec;
    }

}
