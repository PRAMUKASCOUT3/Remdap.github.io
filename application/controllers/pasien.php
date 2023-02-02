<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien extends CI_Controller
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
        
        $data['title'] = "Manajemen Data pasien";

        $data['pasien'] = $this->m_pasien->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('pasien/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $nama = $this->input->post('nama_pasien');
        $jk = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $almt = $this->input->post('alamat');
        $nik = $this->input->post('NIK');

        // Mengonversi tanggal ke dalam bentuk timestamp
        $request_timestamp = strtotime($umur);
        $today_timestamp = strtotime(date('Y-m-d'));
        // Menghitung perbedaan tanggal dalam detik
$difference_in_seconds = abs($today_timestamp - $request_timestamp);
        $today_timestamp = strtotime(date('Y-m-d'));
        // Menghitung perbedaan tanggal dalam hari
        $difference_in_days = floor($difference_in_seconds / (60 * 60 * 24 * 365));


        $data = array(
            'nama_pasien' => $nama,
            'jenis_kelamin' => $jk,
            'umur' => $difference_in_days,
            'alamat' => $almt,
            'NIK' => $nik
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Pasien Berhasil Ditambahkan.</div>');
        $this->m_pasien->insert_data($data);

        redirect('pasien');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data pasien";

        $this->load->view('layouts/header',);
        $this->load->view('pasien/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data pasien";

        $where = array('id_pasien' => $id);
        $data['r'] = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('layouts/header');
        $this->load->view('pasien/v_data_edit', $data);
        $this->load->view('layouts/footer');

    }

    function update()
    {
        $id = $this->input->post('id_pasien');
        $nama = $this->input->post('nama_pasien');
        $jk = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $almt = $this->input->post('alamat');
        $nik = $this->input->post('NIK');
        
        

        $data = array(
            'nama_pasien' => $nama,
            'jenis_kelamin' => $jk,
            'umur' => $umur,
            'alamat' => $almt,
            'NIK' => $nik
            
        );

        $where = array('id_pasien' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Pasien Berhasil Diubah.</div>');
        $this->m_pasien->update_data($data, $where);

        redirect('pasien');
    }

    function hapus($id)
    {

        $where = array('id_pasien' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> pasien Berhasil Dihapus.</div>');
        $this->m_pasien->hapus_data($where);

        redirect('pasien');
    }

    public function cetak_laporan()
	{
		$data['title'] = 'Laporan Pasien';
		$data['pasien'] = $this->m_pasien->tampilan_data()->result_array();
		
		$this->load->view('pasien/laporan_pasien',$data);
	}

}
