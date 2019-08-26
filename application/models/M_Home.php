<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    function UserProject($newdata) {
        $this->db->cache_on();
        $this->db->trans_start();
        $sql = $this->db->insert('project_offering', $newdata);
        $this->db->trans_complete();
        $this->db->cache_off();
        if ($this->db->trans_status() === FALSE) {
            return $sql;
        } else {
            echo '<!DOCTYPE html> <html dir=ltr lang=en-US> <head> <meta charset=UTF-8> <title>Success</title> <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no"> <meta name=author content=maspriyambodo> <link href="' . base_url('assets/css/style.css') . '" type=text/css rel=stylesheet> <link href="' . base_url('assets/css/magnific-popup.css') . '" type=text/css rel=stylesheet> </head> <body class=stretched> <div class=modal-on-load data-target=#myModal1></div> <div class="modal1 mfp-hide" id=myModal1> <div class="block divcenter" style=background-color:#FFF;max-width:500px> <div class=center style=padding:50px> <h3> Thank You ' . $newdata['name_user'] . ' ! </h3> <p class="text-justify nobottommargin"> After you introduce yourself and your project, I`ll get in touch with you to schedule a time to chat. You should expect to hear from me in a day or so. </p> </div> <div class="section center nomargin" style=padding:30px> <a href="' . base_url() . '" class=button onClick=$(location).attr( href ",' . base_url() . ');return false;">OK</a> </div> </div> </div> <script src="' . base_url('assets/js/jquery.js') . '"></script> <script src="' . base_url('assets/js/plugins.js') . '"></script> <script src="' . base_url('assets/js/functions.js') . '"></script> </body> </html>';
        }
    }

    function Insert($insert) {
        $this->db->trans_start();
        $sql = $this->db->insert('project_offering', $insert);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return $sql;
        } else {
            echo '<!DOCTYPE html> <html dir=ltr lang=en-US> <head> <meta charset=UTF-8> <title>Success</title> <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no"> <meta name=author content=maspriyambodo> <link href="' . base_url('assets/css/style.css') . '" type=text/css rel=stylesheet> <link href="' . base_url('assets/css/magnific-popup.css') . '" type=text/css rel=stylesheet></head><body class=stretched> <div class=modal-on-load data-target=#myModal1></div> <div class="modal1 mfp-hide" id=myModal1> <div class="block divcenter" style=background-color:#FFF;max-width:500px> <div class=center style=padding:50px> <h3> Thank You ' . $insert['name_user'] . ' ! </h3> <p class="text-justify nobottommargin"> Thank you for contacting me, Im make sure to respond you immediately </p> </div> <div class="section center nomargin" style=padding:30px> <a href="' . base_url() . '" class=button onClick="$(location).attr("href",' . base_url() . ');return false;">OK</a> </div> </div> </div><script src="' . base_url('assets/js/jquery.js') . '"></script> <script src="' . base_url('assets/js/plugins.js') . '"></script> <script src="' . base_url('assets/js/functions.js') . '"></script> </body> </html>';
        }
    }

    function Save_Visitor($save) {
        $this->db->trans_start();
        $sql = $this->db->insert('user_visitor', $save);
        $this->db->trans_complete();
        return $sql;
    }

    function Portfolio() {
        $data = array(
            
        );
    }

}
