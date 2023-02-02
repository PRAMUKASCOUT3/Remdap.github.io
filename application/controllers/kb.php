<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_kb');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data kb";

        $data['kb'] = $this->m_kb->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('kb/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $tgl = $this->input->post('tanggal');
        $reg = $this->input->post('no_regis');
        $nis = $this->input->post('nama_istri');
        $ns = $this->input->post('nama_suami');
        $umr = $this->input->post('umur_istri');
        $almt = $this->input->post('alamat');
        $tb = $this->input->post('TD');
        $bb = $this->input->post('BB');
        $mtd = $this->input->post('metode');
        $ku = $this->input->post('kunjungan_ulang');
        $nn = $this->input->post('NIK_NO_HP');
        $ket = $this->input->post('keterangan');
         // Mengonversi tanggal ke dalam bentuk timestamp
         $request_timestamp = strtotime($umr);
         $today_timestamp = strtotime(date('Y-m-d'));
         // Menghitung perbedaan tanggal dalam detik
 $difference_in_seconds = abs($today_timestamp - $request_timestamp);
         $today_timestamp = strtotime(date('Y-m-d'));
         // Menghitung perbedaan tanggal dalam hari
         $difference_in_days = floor($difference_in_seconds / (60 * 60 * 24 * 365));
         $three_months_later = date('Y-m-d', strtotime("+3 months"));
         $one_months_later = date('Y-m-d', strtotime("+1 months"));

        

        $data = array(
            'tanggal' => $tgl,
            'no_regis' => $reg,
            'nama_istri' => $nis,
            'nama_suami'=> $ns,
            'umur_istri' => $difference_in_days,
            'alamat' => $almt,
            'TD' => $tb,
            'BB' => $bb,
            'metode' => $mtd,
            'kunjungan_ulang' => $three_months_later,
            'NIK_NO_HP' => $nn,
            'keterangan' => $ket
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data KB Berhasil Ditambahkan.</div>');
        $this->m_kb->insert_data($data);

        redirect('kb');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data User";

        $this->load->view('layouts/header', $data);
        $this->load->view('kb/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data kb";

        $where = array('id_kb' => $id);
        $data['r'] = $this->m_kb->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
        $this->load->view('kb/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_kb');
        $tgl = $this->input->post('tanggal');
        $reg = $this->input->post('no_regis');
        $nis = $this->input->post('nama_istri');
        $ns = $this->input->post('nama_suami');
        $umr = $this->input->post('umur_istri');
        $almt = $this->input->post('alamat');
        $tb = $this->input->post('TD');
        $bb = $this->input->post('BB');
        $mtd = $this->input->post('metode');
        $ku = $this->input->post('kunjungan_ulang');
        $nn = $this->input->post('NIK_NO_HP');
        $ket = $this->input->post('keterangan');
        

        $data = array(
            'tanggal' => $tgl,
            'no_regis' => $reg,
            'nama_istri' => $nis,
            'nama_suami'=> $ns,
            'umur_istri' => $umr,
            'alamat' => $almt,
            'TD' => $tb,
            'BB' => $bb,
            'metode' => $mtd,
            'kunjungan_ulang' => $ku,
            'NIK_NO_HP' => $nn,
            'keterangan' => $ket
        );

        $where = array('id_kb' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data KB Berhasil Diubah.</div>');
        $this->m_kb->update_data($data, $where);

        redirect('kb');
    }

    function hapus($id)
    {

        $where = array('id_kb' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data KB Berhasil Dihapus.</div>');
        $this->m_kb->hapus_data($where);

        redirect('kb');
    }

    public function cetak_laporan()
	{
		$data['title'] = 'LAPORAN KELUARGA BERENCANA';
		$data['kb'] = $this->m_kb->tampilan_data()->result_array();
		
		$this->load->view('kb/laporan_kb',$data);
	}
}
