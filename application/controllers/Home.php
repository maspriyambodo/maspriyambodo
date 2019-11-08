<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('captcha');
        $this->load->library('user_agent');
        $this->load->model('M_Home');
    }

    function index() {
        $captcha = create_captcha($this->ConfigCaptcha());
        $_SESSION['captchaword'] = $captcha['word'];
        $newdata = [
            'title' => ' Priyambodo - Freelance Web Design and Developer ',
            'metadesc' => 'maspriyambodo,jasa pembuatan website, jasa website, web design, jakarta, Indonesia, web development, web design jakarta, pembuatan website, web company profile, seo, jasa seo, digital agency, social media, branding',
            'Content' => 'Home',
            'images' => $captcha['image'],
            'word' => $captcha['word'],
            'nametxt' => $this->input->post('nametxt', true),
            'emailtxt' => $this->input->post('emailtxt', true),
            'phtxt' => $this->input->post('phtxt', true),
            'sbjtxt' => $this->input->post('sbjtxt', true),
            'webtxt' => $this->input->post('webtxt', true),
            'msgtxt' => $this->input->post('msgtxt', true),
            '' => ''
        ];
        //$this->TrackVisitor();
        $newdata['content'] = $this->load->view('V_Home', $newdata, true);
        $this->load->view('Template_Home', $newdata);
    }

    private function ConfigCaptcha() {
        $vals = ['img_path' => './captcha/', 'img_url' => base_url('captcha/'), 'img_width' => '200', 'img_height' => '50', 'expiration' => 7200, 'colors' => ['background' => [255, 131, 0], 'border' => [255, 255, 255], 'text' => [255, 255, 255], 'grid' => [255, 0, 0]]];
        return $vals;
    }

    function RefreshCaptcha() {
        $captcha = create_captcha($this->ConfigCaptcha());
        $this->session->unset_userdata('captchaword');
        $_SESSION['captchaword'] = $captcha['word'];
        $data = [
            'status' => 'OK',
            'image' => $captcha['image'],
            'loader' => '<a style="margin:0 10px" title="Refresh Code" class="refreshCaptcha"><img src="https://cdn.maspriyambodo.com/images/preloader-dark.gif"/></a>'
        ];
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function SendMessage() {
        $data = ['name_user' => $this->input->post('nametxt'), 'mail_user' => $this->input->post('emailtxt'), 'tlp_user' => $this->input->post('ph'), 'subject_mail' => 'Offering Project', 'url_user' => $this->input->post('website'), 'pesan_user' => $this->input->post('messagetxt'), 'tgl' => date("Y-m-d"), 'ip_address' => $this->input->ip_address(), 'read_status' => 1];
        $exec = $this->M_Home->UserProject($this->security->xss_clean($data));
        if ($exec == true) {
            echo '<script>alert("After you introduce yourself and your project, I`ll get in touch with you to schedule a time to chat. You should expect to hear from me in a day or so.");window.location.href="' . base_url('Home/index/') . '";</script>';
        } else {
            echo '<script>alert("Error, please try again !");window.location.href="' . base_url('Home/index/') . '";</script>';
        }
    }

    function SubmitMessage() {
        if ($this->input->post('captchatxt') == $this->session->userdata('captchaword')) {
            if ($this->input->post('nametxt') == "" || $this->input->post('mailtxt') == "" || $this->input->post('teltxt') == "" || $this->input->post('subtxt') == "" || $this->input->post('msgtxt') == "") {
                echo '<script>alert("Please complete all fields");</script>';
                redirect(base_url('Contact'), 'refresh');
            } else {
                $insert = ['id' => '', 'name_user' => $this->input->post('nametxt'), 'mail_user' => $this->input->post('mailtxt'), 'tlp_user' => $this->input->post('teltxt'), 'subject_mail' => $this->input->post('subtxt'), 'url_user' => $this->input->post('urltxt'), 'pesan_user' => $this->input->post('msgtxt'), 'tgl' => date("Y-m-d"), 'ip_address' => $this->input->ip_address(),];
                $this->M_Home->Insert($insert);
            }
        } else {
            echo '<script>alert("Please enter valid code, make sure use case sensitive");window.location.replace("' . base_url('Home/index') . '");</script>';
        }
    }

}
