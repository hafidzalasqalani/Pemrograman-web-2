<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_mhs', 'mhs');
        $this->table = 'mahasiswa';
    }

    public function index()
    {
        $this->load->view('form/v_mhs');
    }

    public function display()
    {
        $data['mhs'] = $this->mhs->getAll($this->table)->result();
        $this->load->view('form/v_displaymhs', $data);
    }

    public function savemhs()
    {
        if ($this->input->method() == 'post') {
            $datamhs = [
                'npm' => $this->input->post('npm'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'telp' => $this->input->post('telp'),
                'alamat' => $this->input->post('alamat')
            ];

            $msh_saved = $this->mhs->insert($datamhs);

            if ($msh_saved) {
                echo "sukses";
            }
        }
    }
}
