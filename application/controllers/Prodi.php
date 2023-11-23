<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
    }
    public function index(){
        $data['judul']= "Halaman Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function tambah(){
        $data['judul']="Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
        'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
        'required' => 'Ruangan Wajib di isi'
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
        'required' => 'Jurusan Wajib di isi'
        ]);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
        'required' => 'Akreditasi Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama kaprodi', 'required', [
        'required' => 'Nama kaprodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun berdiri', 'required', [
        'required' => 'Tahun berdiri Wajib di isi'
        ]);
        $this->form_validation->set_rules('output_lulusan', 'Output lulusan', 'required', [
        'required' => 'Output lulusan Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_tambah_prodi", $data);
        $this->load->view("layout/footer");
        } else {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruangan' => $this->input->post('ruangan'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $this->Prodi_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
        redirect('Prodi');
        }
    }
    public function hapus($id){
        $this->Prodi_model->delete($id);
        redirect('Prodi');
    }
    public function edit($id){
        $data['judul']="Halaman edit Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_ubah_prodi", $data);
        $this->load->view("layout/footer");
    }
    function update(){
        $data = [
            'nama' => $this->input->post('nama'),
            'ruangan' => $this->input->post('ruangan'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $id = $this->input->post('id');
        $this->Prodi_model->update(['id' => $id], $data);
        redirect('Prodi');
    }
}