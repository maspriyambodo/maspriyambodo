<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Report extends CI_Model {

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

    function Daily() {
        $exec = $this->db->select('DAYNAME(tgl) AS HARI,COUNT(tgl) AS TOTAL')
                ->from('user_visitor')
                ->where('YEAR ( tgl ) = YEAR ( CURDATE( ) ) ')
                ->where('MONTH ( tgl ) = MONTH ( CURDATE( ) )')
                ->where('YEARWEEK( tgl ) = YEARWEEK( CURDATE( ) )')
                ->group_by('DAY ( tgl )')
                ->order_by('DAYOFWEEK( tgl )')
                ->get()->result();
        return $exec;
    }

    function Monthly() {
        
    }

}
