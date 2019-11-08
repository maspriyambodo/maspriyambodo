<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Customer
 *
 * @author priyambodo
 */
class M_Customer extends CI_Model {

    function index() {
        $exec = $this->db->select('customers.id_customer,customers.nama,customers.perusahaan,customers.telepon,customers.mail')
                ->from('`maspriya_dbpri`.`customers`')
                ->get()
                ->result();
        return $exec;
    }

    function Detail($id) {
        $exec = $this->db->select('transact.id_customer,transact.id_hosting,transact.url_domain,transact.ip_address,transact.server_name,transact.reg_date,transact.due_date,transact.pay_date,customers.nama,customers.perusahaan,customers.alamat_perusahaan,customers.telepon,customers.mail,tb_hosting.packet_name,tb_hosting.storage_space,tb_hosting.unit,tb_hosting.bandwidth,tb_hosting.panel,tb_hosting.price,tb_kodepos.kelurahan,tb_kodepos.kecamatan,tb_kodepos.kabupaten,tb_kodepos.provinsi,tb_kodepos.kodepos,')
                ->from('`maspriya_dbpri`.`transact`')
                ->join('maspriya_dbpri.customers', 'transact.id_customer = customers.id_customer', 'LEFT')
                ->join('maspriya_dbpri.tb_hosting', 'transact.id_hosting = tb_hosting.id', 'LEFT')
                ->join('maspriya_dbpri.tb_kodepos', 'customers.kodepos = tb_kodepos.kodepos', 'LEFT')
                ->where('`transact`.`id_customer`', $id, false)
                ->get()
                ->result();
        return $exec;
    }

}
