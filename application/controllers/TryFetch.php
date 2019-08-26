<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TryFetch extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $html = new simple_html_dom();
        $html->load('<html><body>Hello!</body></html>');
        var_dump($html);
    }

}
