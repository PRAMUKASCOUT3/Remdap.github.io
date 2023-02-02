<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller{
   public function index()
    {

        $this->load->model('m_pasien');
        $this->load->model('m_kb');
        $this->load->model('m_imunisasi');
        $this->load->model('m_lahiran');
        $this->load->model('m_pegawai');
        $this->load->model('m_pemeriksaan');
        $this->load->model('m_periksa_kehamilan');
        $this->load->model('m_rekam_medis');
        $this->load->model('m_users');
        $data['pasien'] = $this->m_pasien->count_all();
        $data['kb'] = $this->m_kb->count_all();
        $data['imunisasi'] = $this->m_imunisasi->count_all();
        $data['lahiran'] = $this->m_lahiran->count_all();
        $data['pegawai'] = $this->m_pegawai->count_all();
        $data['pemeriksaan'] = $this->m_pemeriksaan->count_all();
        $data['periksa_kehamilan'] = $this->m_periksa_kehamilan->count_all();
        $data['rekam_medis'] = $this->m_rekam_medis->count_all();
        $data['users'] = $this->m_users->count_all();
       $this->load->view('layouts/header');
       $this->load->view('v_dashboard',$data);
       $this->load->view('layouts/footer');

    }


}


