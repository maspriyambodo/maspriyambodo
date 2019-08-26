<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

    function Save_Visitor($save) {
        $this->db->trans_start();
        $sql = $this->db->insert('user_visitor', $save);
        $this->db->trans_complete();
        return $sql;
    }

    function Visitors($Visitors) {
        switch ($Visitors) {
            case "AverageVisitor":
                $exec = $this->db->select('*')
                        ->select('COUNT( * ) TOTAL')
                        ->from('user_visitor')
                        ->get();
                return $exec->result();
            case "ProjectOffer":
                $exec = $this->db->select('*')
                        ->from('project_offering')
                        ->where('read_status', 1)
                        ->get();
                return $exec;
            case "CountCountry":
                $sql = $this->db->select('*')
                        ->from('user_visitor')
                        ->group_by('user_visitor.user_country_name')
                        ->order_by('user_visitor.user_country_name ASC')
                        ->get();
                return $sql;
            case "TotalVisitior":
                $this->db->select('*')->from('user_visitor');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "MonthVisitior":
                $this->db->select('*')->from('user_visitor')->where('YEAR ( tgl ) = YEAR ( CURDATE( ) )')->where('MONTH ( tgl ) = MONTH ( CURDATE( ) )');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "LastmonthVisitior":
                $this->db->select('*')->from('user_visitor')->where('YEAR ( tgl ) = YEAR ( CURDATE( ) )')->where('MONTH ( tgl ) = MONTH ( CURDATE( )-1 )');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "TodayVisitors":
                $this->db->select('*')->from('user_visitor')->where('YEAR ( tgl ) = YEAR ( CURDATE( ) )')->where('DAY ( tgl ) = DAY ( CURDATE( ) )')->where('YEARWEEK( tgl ) = YEARWEEK( CURDATE( ) )');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "YesterdayVisitors":
                $this->db->select('*')->from('user_visitor')->where('YEAR ( tgl ) = YEAR ( CURDATE( ) )')->where('DAY ( tgl ) = DAY ( CURDATE( ) -1 )');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "DeviceApple":
                $this->db->select('*')->from('user_visitor')->group_by('user_visitor.device_system')->order_by('user_visitor.device_system ASC')->like('device_system', 'Apple');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "DeviceAndroid":
                $this->db->select('*')->from('user_visitor')->group_by('user_visitor.device_system')->order_by('user_visitor.device_system ASC')->like('device_system', 'Android');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "DeviceWindows":
                $this->db->select('*')->from('user_visitor')->group_by('user_visitor.device_system')->order_by('user_visitor.device_system ASC')->like('device_system', 'Windows');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "DeviceOther":
                $this->db->select('*')->from('user_visitor')->group_by('user_visitor.device_system')->order_by('user_visitor.device_system ASC')->not_like('device_system', 'Apple')
                        ->not_like('device_system', 'Android')
                        ->not_like('device_system', 'Windows');
                $sql = $this->db->get();
                return $sql->num_rows();
            case "ProjectCount":
                $this->db->select('*')->from('project_offering');
                $sql = $this->db->get();
                return $sql->num_rows();
        }
    }

    function CheckUser($data) {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('uname', $data['uname'])
                ->where('pwd', sha1($data['pwd']))
                ->limit(1)
                ->get();
        if ($exec->num_rows() > 0) {
            $session = $exec->result();
            $ses = array(
                'id' => $session[0]->id,
                'nama' => $session[0]->uname,
                'pwd' => $session[0]->pwd,
                'usr_mail' => $session[0]->usr_mail,
                'gambar' => $session[0]->pict,
                'status' => 'success'
            );
            $this->session->set_userdata($ses);
        } else {
            $ses = array('status' => 'error');
        }
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($ses, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
