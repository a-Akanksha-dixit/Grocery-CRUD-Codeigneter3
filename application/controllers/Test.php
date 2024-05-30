<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index() {
        $data = $this->db->get('categories')->result_array();
        echo "<pre>";print_r($data);
    }
}