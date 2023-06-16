<?php
defined('BASEPATH') or exit('No direct script access allowed');

class obat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_obat');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data obat";

        $data['obat'] = $this->m_obat->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('obat/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $u = $this->input->post('nama_obat');
        $n = $this->input->post('jenis_obat');
        

        $data = array(
            'nama_obat' => $u,
            'jenis_obat' => $n,
        );

        $this->m_obat->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> obat Berhasil Ditambahkan.</div>');

        redirect('obat');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data obat";

        $this->load->view('layouts/header', $data);
        $this->load->view('obat/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data obat";

        $where = array('id_obat' => $id);
        $data['r'] = $this->m_obat->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
         $this->load->view('obat/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_obat');
        $u = $this->input->post('nama_obat');
        $n = $this->input->post('jenis_obat');
        

        $data = array(
            'nama_obat' => $u,
            'jenis_obat' => $n,
        );

        $where = array ('id_obat' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> obat Berhasil Diubah.</div>');
        $this->m_obat->update_data($data, $where);

        redirect('obat');
    }

    function hapus($id){

        $where = array ('id_obat'=>$id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> obat Berhasil Dihapus.</div>');
        $this->m_obat->hapus_data($where);

        redirect('obat');
    }

    public function cetak ()
    {
        $berdasarkan = $this->request->GetPostGet("berdasarkan");
        $isi = $this->request->GetPostGet("isi");
        $tanggal11 = $this->request->GetPostGet("tanggal11");
        $tanggal12 = $this->request->GetPostGet("tanggal12");
        if ($berdasarkan) {
            if ($tanggal11){
                $this->data['datas'] = DataAdminRepo :: cetak_berdasarkan_tanggal ($berdasarkan,$tanggal11,$tanggal12);
            }else {
                $this->data['datas'] = DataAdminRepo :: cetak_berdasarkan ($berdasarkan,$isi);
            }
        }else {
            $this->data['datas'] = DataAdminRepo :: cetak_semua();
        }
        return view ("obat/cetak", $this->data);
    }
}
