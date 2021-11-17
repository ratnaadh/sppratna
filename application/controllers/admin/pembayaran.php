<?php

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("pembayaran_model");
        $this->load->model("petugas_model");
        $this->load->model("siswa_model");
        $this->load->model("spp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Pembayaran";
        $data['GetPembayaran'] = $this->pembayaran_model->getAll();
        $data['content'] = 'pembayaran/v_pembayaran';
        $this->load->view('admin/overview_view', $data);
        $this->load->view('v_beranda', $data);
    }

    function add()
    {
        $AddPembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($AddPembayaran->rules());

        if ($validation->run()) {
            $AddPembayaran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'pembayaran/v_add_pembayaran';
        $data['GetSiswa'] = $this->siswa_model->getAll();
        $data['GetPetugas'] = $this->petugas_model->getAll();
        $data['GetSpp'] = $this->spp_model->getAll();

        $this->load->view('admin/overview_view', $data);
    }

    function edit($id_pembayaran = null)
    {
        if (!isset($id_pembayaran)) redirect('admin/pembayaran');

        $EditPembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($EditPembayaran->rules());

        if ($validation->run()) {
            $EditPembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'pembayaran/v_edit_pembayaran';
        $data['GetPembayaran'] = $EditPembayaran->getById($id_pembayaran);
        $data['GetSiswa'] = $this->siswa_model->getAll();
        $data['GetPetugas'] = $this->petugas_model->getAll();
        $data['GetSpp'] = $this->spp_model->getAll();
        if (!$data['GetPembayaran']) show_404();

        $this->load->view('admin/overview_view', $data);
    }

    function delete($id_pembayaran = null)
    {
        if (!isset($id_pembayaran)) show_404();

        if ($this->pembayaran_model->delete($id_pembayaran)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('admin/pembayaran'));
        }
    }
}
