<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Dashboard', 'M_Default'));
        $this->M_Default->Users(); //this is for verification user
        $this->load->library('user_agent');
    }

    function index() {
        $data = array('title' => 'Maspriyambodo | Dashboard', 'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design', 'Content' => 'Home', 'ProjectOffer' => $this->M_Dashboard->Visitors('ProjectOffer'), 'TotalVisitior' => $this->M_Dashboard->Visitors('TotalVisitior'), 'MonthVisitior' => $this->M_Dashboard->Visitors('MonthVisitior'), 'LastmonthVisitior' => $this->M_Dashboard->Visitors('LastmonthVisitior'), 'TodayVisitors' => $this->M_Dashboard->Visitors('TodayVisitors'), 'YesterdayVisitors' => $this->M_Dashboard->Visitors('YesterdayVisitors'), 'CountCountry' => $this->M_Dashboard->Visitors("CountCountry")->num_rows(), 'NameCountry' => $this->M_Dashboard->Visitors("CountCountry")->result(), 'ProjectCount' => $this->M_Dashboard->Visitors('ProjectCount'), 'DeviceApple' => $this->M_Dashboard->Visitors('DeviceApple'), 'DeviceAndroid' => $this->M_Dashboard->Visitors('DeviceAndroid'), 'DeviceWindows' => $this->M_Dashboard->Visitors('DeviceWindows'), 'DeviceOther' => $this->M_Dashboard->Visitors('DeviceOther'), 'AverageVisitor' => $this->M_Dashboard->Visitors('AverageVisitor'));
        $this->load->view('DashboardHead', $data);
        $this->load->view('HomeContent', $data);
        $this->load->view('DashboardFooter', $data);
    }

    private function TrackVisitor() {
        $loc = file_get_contents('https://ipapi.co/' . $this->input->ip_address() . '/json/');
        $data = json_decode($loc);
        $save = array('id' => '', 'page' => 1, 'user_ip_address' => $this->input->ip_address(), 'user_isp' => $data->org, 'long_lat' => $data->latitude . ', ' . $data->longitude, 'user_city' => $data->city, 'user_region' => $data->region, 'user_country' => $data->country, 'user_country_name' => $data->country_name, 'country_calling_code' => $data->country_calling_code, 'user_currency' => $data->currency, 'device_system' => $this->agent->agent_string(), 'tgl' => date('Y-m-d H:i:s', time()));
        $this->M_Dashboard->Save_Visitor($save);
    }

    function Pwdmgr() {
        $data = array(
            'title' => 'Password Manager',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Pwdmgr',
            'Pwdmgr' => $this->M_Dashboard->Pwdmgr(),
            'ProjectOffer' => $this->M_Dashboard->ProjectOffer()
        );
        $this->load->view(array('DashboardHead', 'V_Pwdmgr', 'DashboardFooter'), $data);
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }

}
