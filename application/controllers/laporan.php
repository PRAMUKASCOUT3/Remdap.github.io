<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
    }


    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('laporan/v_cetak_laporan');
        $this->load->view('layouts/header');
        
        
    }

    public function lapo()
    {
        $this->load->view('layouts/header');
        $this->load->view('laporan/v_cetak_laporan_lahiran');
        $this->load->view('layouts/header');

        $data ['title'] = "Laporan Data Pasien";
        $data ['lahiran'] = $this->m_pasien->tampilan_data()->result_array();
        $this->load->view('laporan/v_laporan_pasien',$data);
    }
   

}
