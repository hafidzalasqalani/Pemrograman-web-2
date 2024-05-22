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
        $this->load->view('form/v_login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('pwd', 'Password Pengguna', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // <- untuk edit notif
        $usr = $this->input->post('username');
        $pwd = $this->input->post('pwd');

        if ($this->form_validation->run() == TRUE) {
            if ($usr == 'admin' && $pwd == 'adm1n321') {
                $this->load->view('form/v_inputdata');
            } else {
                $message['message'] = "Nama Pengguna atau Password Pengguna salah";
                $this->load->view('form/v_login', $message);
            }
        } else {
            $this->load->view('form/v_login');
        }
    }


    public function submit()
    {

        $rules = [
            [
                'field' => 'npm',
                'label' => 'NPM',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jurusan',
                'label' => 'Jurusan',
                'rules' => 'required'
            ],
            [
                'field' => 'jenkel',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'uts',
                'label' => 'Nilai UTS',
                'rules' => 'required'
            ],
            [
                'field' => 'uas',
                'label' => 'Nilai UAS',
                'rules' => 'required'
            ],
            [
                'field' => 'tugas',
                'label' => 'Nilai Tugas',
                'rules' => 'required'
            ],
            [
                'field' => 'kehadiran',
                'label' => 'Nilai Kehadiran',
                'rules' => 'required'
            ],
        ];
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $data['npm'] = $this->input->post('npm');
            $data['nama'] = $this->input->post('nama');
            $data['jurusan'] = $this->input->post('jurusan');
            $data['jenkel'] = $this->input->post('jenkel');
            $data['uts'] = $this->input->post('uts');
            $data['uas'] = $this->input->post('uas');
            $data['tugas'] = $this->input->post('tugas');
            $data['kehadiran'] = $this->input->post('kehadiran');

            $total =  ($data['uas'] * 0.4) + ($data['uts'] * 0.3) + ($data['tugas'] * 0.2) + (($data['kehadiran'] / 0.14) * 0.1);

            $data['total'] = $total;

            switch (true) {
                case ($total >= 86 && $total <= 100):
                    $grade = 'A';
                    break;
                case ($total >= 81 && $total <= 85):
                    $grade = 'A-';
                    break;
                case ($total >= 76 && $total <= 80):
                    $grade = 'B+';
                    break;
                case ($total >= 71 && $total <= 75):
                    $grade = 'B';
                    break;
                case ($total >= 66 && $total <= 70):
                    $grade = 'B-';
                    break;
                case ($total >= 61 && $total <= 65):
                    $grade = 'C+';
                    break;
                case ($total >= 56 && $total <= 60):
                    $grade = 'C';
                    break;
                case ($total >= 41 && $total <= 55):
                    $grade = 'D';
                    break;
                default:
                    $grade = 'E';
                    break;
            }

            $data['grade'] = $grade;

            $this->load->view('form/result_data', $data);
        } else {
            $this->load->view('form/v_inputdata');
        }
    }

    public function reset()
    {
        $this->load->view('form/v_inputdata');
    }

    public function back()
    {
        $this->load->view('form/v_inputdata');
    }
}
