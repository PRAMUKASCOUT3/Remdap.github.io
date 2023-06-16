<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pemeriksaan');
        $this->load->model('m_pasien');
        $this->load->model('m_obat');
        
    }


    public function index()
    {
        $this->load->model('m_pemeriksaan');
        $data['title'] = "Manajemen Data pemeriksaan";
        $data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan();
        $data['pasien'] = $this->m_pasien->get_pasien_all();
        $data['obat'] = $this->m_obat->get_obat_all();

        $this->load->view('layouts/header');
        $this->load->view('pemeriksaan/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $tl = $this->input->post('tanggal_lahir');
        $ip = $this->input->post('id_pasien');
        $kl = $this->input->post('keluhan');
        $dg = $this->input->post('diagnosa');
        $ib = $this->input->post('id_obat');


        

        $data = array(
            'tanggal_lahir' => $tl,
            'id_pasien' => $ip,
            'keluhan' => $kl,
            'diagnosa' => $dg,
            'id_obat' => $ib
        );

        $this->m_pemeriksaan->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil Ditambahkan.</div>');

        redirect('pemeriksaan');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data Pemeriksaan Pasien";
        $data['pasien'] = $this->m_pasien->get_pasien_all();
        $data['obat'] = $this->m_obat->get_obat_all();

        $this->load->view('layouts/header',);
        $this->load->view('pemeriksaan/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
{

    $data['title'] = "Edit Data pemeriksaan";
    $data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan();
    $data['pasien'] = $this->m_pasien->get_pasien_all();
    $data['obat'] = $this->m_obat->get_obat_all();
    $where = array('id_pemeriksaan' => strval($id));    
    $data['r'] = $this->m_pemeriksaan->edit_data($where)->row_array();
    

    $this->load->view('layouts/header',);
    $this->load->view('pemeriksaan/v_data_edit', $data);
    $this->load->view('layouts/footer');
}


    function update()
    {
        $id = $this->input->post('id_pemeriksaan');
        $tl = $this->input->post('tanggal_lahir');
        $ip = $this->input->post('id_pasien');
        $kl = $this->input->post('keluhan');
        $dg = $this->input->post('diagnosa');
        $ib = $this->input->post('id_obat');

    
        $data = array(
            'tanggal_lahir' => $tl,
            'id_pasien' => $ip,
            'keluhan' => $kl,
            'diagnosa' => $dg,
            'id_obat'=> $ib
        );
    
        $where = array('id_pemeriksaan' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil Diubah.</div>');
        $this->m_pemeriksaan->update_data($data, $where);
        redirect('pemeriksaan');
    }

    function hapus($id)
    {

        $where = array('id_pemeriksaan' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil diHapus.</div>');
        $this->m_pemeriksaan->delete_data($where);

        redirect('pemeriksaan');
    }
    public function cetak_laporan()
	{
		$data['title'] = 'LAPORAN PASIEN UMUM';
		$data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan();
		
		$this->load->view('pemeriksaan/laporan_pemeriksaan',$data);
	}

    public function print_laporan()
	{
		$data['title'] = 'LAPORAN PASIEN UMUM';
		$data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan();
		
		$this->load->view('pemeriksaan/laporan_pemeriksaan1',$data);
	}
    public function view() {
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');
        
        $data['title'] = 'Laporan Berdasarkan Tanggal';
        $data['pemeriksaan'] = $this->m_pemeriksaan->get_laporan_by_tanggal($tanggal_awal, $tanggal_akhir);
        $this->load->view('laporan/view5', $data);
    }

}