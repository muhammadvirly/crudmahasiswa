<?php
defined('BASEPATH') or exit('No direct script access allowed');
class pinjaman extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Pinjaman_model');
    }
    public function index(){
        $data['judul']= "Halaman Pinjaman";
        $data['pinjaman'] = $this->Pinjaman_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function tambah(){
        $data['judul']="Halaman Tambah Pinjaman";
        $data['pinjaman'] = $this->Pinjaman_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_tambah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id){
        $this->Pinjaman_model->delete($id);
        redirect('Pinjaman');
    }
    function upload(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
            'durasi' => $this->input->post('durasi')
        ];
        $this->Pinjaman_model->insert($data);
        redirect('Pinjaman');
    }
    public function edit($id){
        $data['judul']="Halaman edit Pinjaman";
        $data['pinjaman'] = $this->Pinjaman_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("pinjaman/vw_ubah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    function update(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
            'durasi' => $this->input->post('durasi')
        ];
        $id = $this->input->post('id');
        $this->Pinjaman_model->update(['id' => $id], $data);
        redirect('Pinjaman');
    }
}