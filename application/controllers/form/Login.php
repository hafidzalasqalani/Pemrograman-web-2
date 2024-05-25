<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load base_url
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        // $this->load->view('form/login'); // old
        $this->load->view('form/v_login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $usr = $this->input->post('email');
        $pwd = $this->input->post('password');

        if ($this->form_validation->run() == TRUE) {
            if ($usr == 'admin' && $pwd == 'admin123') {
                $this->load->view('form/v_signup');
            } else {
                $message['message'] = "Username atau password salah.";
                $this->load->view('form/v_login', $message);
            }
        } else {
            $this->load->view('form/v_login');
        }
    }


    public function signup()
    {

        $rules = [
            [
                'field' => 'name', //<- ini mengikuti nama input di form
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email', //<- ini mengikuti nama input di form
                'label' => 'Email',
                'rules' => 'required'
            ],
        ];
        $this->form_validation->set_rules($rules);
        // $this->form_validation->set_rules('name', 'Name', 'required'); // versi satu satu
        // $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->load->view('test');
        } else {
            $this->load->view('form/v_signup');
        }
    }
}
