<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Try_API extends \Restserver\Libraries\REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('M_Customerlist', 'Cust');
    }

    function index_get() {// REST API STANDARD, No Verification
        $data = $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($this->Cust->Customerlist(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        $this->response($data, \Restserver\Libraries\REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        exit();
    }

    function Withparameter_get() {
        $id = $this->get('id');
        if ($id === null) {
            $data = $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($this->Cust->Customerlist(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
        } elseif ($this->Cust->Customerlist($id)->num_rows() == 0) {
            $msg = array(
                'status' => 'error',
                'message' => 'ID NOT FOUND'
            );
            $output = $this->output
                    ->set_status_header(404)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            $this->response($output, \Restserver\Libraries\REST_Controller::HTTP_NOT_FOUND);
            exit();
        } else {
            $data = $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($this->Cust->Customerlist($id)->result(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
        }
        $this->response($data, \Restserver\Libraries\REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        exit();
    }

    function AuthAPI() {
        
    }

}
