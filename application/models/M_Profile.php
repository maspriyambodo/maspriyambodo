<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Profile extends CI_Model {

    function Users() {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('id', $this->session->userdata('id'))
                ->get()
                ->result();
        return $exec;
    }

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

    function Portfolio() {
        $exec = $this->db->select('*')->from('portfolio')->get()->result();
        return $exec;
    }

    function Simpan($data) {
        $this->db->trans_start();
        $this->db->set('uname', $data['uname']);
        $this->db->set('pwd', $data['pwd']);
        $this->db->set('usr_mail', $data['usr_mail']);
        $this->db->where('id', $data['id']);
        $this->db->update('usr_adm');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'ERROR','msg'=>'data gagal disimpan !');

            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'OK','msg'=>'data berhasil disimpan !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

}
