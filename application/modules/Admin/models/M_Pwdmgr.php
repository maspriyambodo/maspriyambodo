<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Pwdmgr extends CI_Model {

    function Pwdmgr() {
        $exec = $this->db->select('*')
                ->from('uname_pwd')
                ->where('status', 1)
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

    function Savepwd($data) {
        $this->db->trans_start();
        $this->db->insert('uname_pwd', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function Updatepwd($data) {
        $this->db->trans_start();
        $this->db->set('link', $data['link']);
        $this->db->set('uname', $data['uname']);
        $this->db->set('pwd', $data['pwd']);
        $this->db->set('lastcheck', $data['lastcheck']);
        $this->db->set('note', $data['note']);
        $this->db->set('status', $data['status']);
        $this->db->set('sysupdatedate', $data['sysupdatedate']);
        $this->db->set('sysupdateuser', $data['sysupdatedate']);
        $this->db->where('id', $data['id']);
        $this->db->update('uname_pwd');
        $this->db->trans_complete();
        if ($this->db->trans_status() == FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function EditPwd($data) {
        $exec = $this->db->select('*')
                ->from('uname_pwd')
                ->where('id', $data)
                ->get();
        return $exec->result();
    }

    function Delete($id) {
        $this->db->trans_begin();
        $this->db->set('status', 2)
                ->set('sysdeletedate', date("Y-m-d"))
                ->set('sysdeleteuser', $this->session->userdata('id'))
                ->where('id', $id)
                ->update('uname_pwd');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'error', 'msg' => 'data gagal dihapus !');
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'success', 'msg' => 'data berhasil dihapus !');
        }
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
