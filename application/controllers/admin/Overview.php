<?php

class Overview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('petugas_model');
        $this->load->model('kelas_model');
        $this->load->model('pembayaran_model');
    }

    public function index()
    {
        $data['content'] = 'v_beranda';
        $data['jumlahSiswa'] = $this->siswa_model->jumlahAll();
        $data['jumlahPetugas'] = $this->petugas_model->jumlahAll();
        $data['jumlahKelas'] = $this->kelas_model->jumlahAll();
        $data['jumlahPembayaran'] = $this->pembayaran_model->jumlahAll();
        $data['jumlahBayar'] = $this->pembayaran_model->totalBayar();
        // var_dump($data);
        // die;
        $this->load->view('admin/overview_view', $data);
    }
}
