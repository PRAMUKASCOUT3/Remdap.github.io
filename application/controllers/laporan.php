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
        // $this->load->view('laporan/v_cetak_laporan');
        $this->load->view('laporan/v_cetak_laporan_pemeriksaan');
        $this->load->view('laporan/v_cetak_laporan_lahiran');
        $this->load->view('laporan/v_cetak_laporan_imunisasi');
        $this->load->view('laporan/v_cetak_laporan_periksa_kehamilan');
        $this->load->view('laporan/v_cetak_laporan_kb');
        // $this->load->view('laporan/v_cetak_laporan_rekam_medis');
        $this->load->view('layouts/header');
        
          
    }

}
