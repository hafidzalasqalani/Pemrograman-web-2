<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh1 extends CI_Controller
{

    public function index()
    {
        echo "<h1> test </h1>";
        $this->load->helper('html');
        $this->load->view('latihan/contoh_helper');
    }

    public function test()
    {
        echo "<h1> test </h1>";
        $this->load->view('test');
    }
}
