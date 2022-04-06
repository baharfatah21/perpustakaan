<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index()
    {
        $data['list'] = $this->usermodel->get_user2();
        $this->load->view('user', $data);
    }
}
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('usermodel');
    }

    public function index()
    {

        $this->load->view('User');
    }
}