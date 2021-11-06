<?php

class Kompetensi_keahlian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("keahlian_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['GetKK'] = $this->keahlian_model->getAll();
        $data['content'] = 'kk/v_kk';
        $this->load->view('admin/overview_view', $data);
    }

    function add()
    {
        $AddKK = $this->keahlian_model;
        $validation = $this->form_validation;
        $validation->set_rules($AddKK->rules());

        if ($validation->run()) {
            $AddKK->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'kk/v_add_kk';

        $this->load->view('admin/overview_view', $data);
    }

    function edit($id_kk = null)
    {
        if (!isset($id_kk)) redirect('admin/kompetensi_keahlian');

        $EditKK = $this->keahlian_model;
        $validation = $this->form_validation;
        $validation->set_rules($EditKK->rules());

        if ($validation->run()) {
            $EditKK->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data['content'] = 'kk/v_edit_kk';
        $data['GetKK'] = $EditKK->getById($id_kk);

        if (!$data['GetKK']) show_404();

        $this->load->view('admin/overview_view', $data);
    }

    function delete($id_kk = null)
    {
        if (!isset($id_kk)) show_404();

        if ($this->keahlian_model->delete($id_kk)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('admin/kompetensi_keahlian'));
        }
    }
}
