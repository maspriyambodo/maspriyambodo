<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('captcha'));
        $this->load->library('user_agent');
        $this->load->model('M_Home');
    }

    function index() {
        $captcha = create_captcha($this->ConfigCaptcha());
        $_SESSION['captchaword'] = $captcha['word'];
        $newdata = array(
            'title' => ' Priyambodo - Freelance Web Design and Developer ',
            'metadesc' => 'maspriyambodo,jasa pembuatan website, jasa website, web design, jakarta, Indonesia, web development, web design jakarta, pembuatan website, web company profile, seo, jasa seo, digital agency, social media, branding',
            'Content' => 'Home',
            'images' => $captcha['image'],
            'word' => $captcha['word'],
            'nametxt' => $this->input->post('nametxt'),
            'emailtxt' => $this->input->post('emailtxt'),
            'phtxt' => $this->input->post('phtxt'),
            'sbjtxt' => $this->input->post('sbjtxt'),
            'webtxt' => $this->input->post('webtxt'),
            'msgtxt' => $this->input->post('msgtxt'),
            '' => ''
        );
        //$this->TrackVisitor();
        $this->load->view('Head', $this->security->xss_clean($newdata));
        $this->load->view('V_Home', $this->security->xss_clean($newdata));
        $this->load->view('Footer', $this->security->xss_clean($newdata));
    }

    private function ConfigCaptcha() {
        $vals = array('img_path' => './assets/captcha/', 'img_url' => base_url('assets/captcha/'), 'img_width' => '200', 'img_height' => '50', 'expiration' => 7200, 'font_path' => FCPATH . './assets/fonts/Ubuntu-C.ttf', 'colors' => array('background' => array(255, 131, 0), 'border' => array(255, 255, 255), 'text' => array(255, 255, 255), 'grid' => array(255, 0, 0)));
        return $vals;
    }

    function RefreshCaptcha() {
        $captcha = create_captcha($this->ConfigCaptcha());
        $this->session->unset_userdata('captchaword');
        $_SESSION['captchaword'] = $captcha['word'];
        $data = array(
            'status' => 'OK',
            'image' => $captcha['image'],
            'loader' => '<a style="margin:0 10px" title="Refresh Code" class="refreshCaptcha"><img src="' . base_url('assets/images/preloader-dark.gif') . '"/></a>'
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function SendMessage() {
        $data = array('id' => '', 'name_user' => $this->input->post('nametxt'), 'mail_user' => $this->input->post('emailtxt'), 'tlp_user' => $this->input->post('ph'), 'subject_mail' => 'Offering Project', 'url_user' => $this->input->post('website'), 'pesan_user' => $this->input->post('messagetxt'), 'tgl' => date("Y-m-d"), 'ip_address' => $this->input->ip_address());
        if ($data['name_user'] == "" || $data['mail_user'] == "" || $data['mail_user'] == "" || $data['mail_user'] == "" || $data['mail_user'] == "") {
            echo '<script>alert("please complete all fields !");</script>';
            redirect(base_url(), 'refresh');
        } else {
            $this->M_Home->UserProject($this->security->xss_clean($data));
        }
    }

    private function TrackVisitor() {
        $loc = file_get_contents('https://ipapi.co/' . $this->input->ip_address() . '/json/');
        $data = json_decode($loc);
        $save = array('id' => '', 'page' => 1, 'user_ip_address' => $this->input->ip_address(), 'user_isp' => $data->org, 'long_lat' => $data->latitude . ', ' . $data->longitude, 'user_city' => $data->city, 'user_region' => $data->region, 'user_country' => $data->country, 'user_country_name' => $data->country_name, 'country_calling_code' => $data->country_calling_code, 'user_currency' => $data->currency, 'device_system' => $this->agent->agent_string(), 'tgl' => date('Y-m-d H:i:s', time()));
        $this->M_Home->Save_Visitor($save);
    }

    function SubmitMessage() {
        if ($this->input->post('captchatxt') == $this->session->userdata('captchaword')) {
            if ($this->input->post('nametxt') == "" || $this->input->post('mailtxt') == "" || $this->input->post('teltxt') == "" || $this->input->post('subtxt') == "" || $this->input->post('msgtxt') == "") {
                echo '<script>alert("Please complete all fields");</script>';
                redirect(base_url('Contact'), 'refresh');
            } else {
                $insert = array('id' => '', 'name_user' => $this->input->post('nametxt'), 'mail_user' => $this->input->post('mailtxt'), 'tlp_user' => $this->input->post('teltxt'), 'subject_mail' => $this->input->post('subtxt'), 'url_user' => $this->input->post('urltxt'), 'pesan_user' => $this->input->post('msgtxt'), 'tgl' => date("Y-m-d"), 'ip_address' => $this->input->ip_address(),);
                $this->M_Home->Insert($insert);
            }
        } else {
            echo '<script>alert("Please enter valid code, make sure use case sensitive");window.location.replace("' . base_url('Home/index') . '");</script>';
        }
    }

}
