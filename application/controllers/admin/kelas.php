<?php

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("kelas_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['GetKelas'] = $this->kelas_model->getAll();
        $data['content'] = 'kelas/v_kelas';
        $this->load->view('admin/overview_view', $data);
    }

    function add()
    {
        $AddKelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($AddKelas->rules());

        if ($validation->run()) {
            $AddKelas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'kelas/v_add_kelas';
        $this->load->model("keahlian_model");
        $data['GetKK'] = $this->keahlian_model->getAll();

        $this->load->view('admin/overview_view', $data);
    }

    function edit($id_kelas = null)
    {
        if (!isset($id_kelas)) redirect('admin/kelas');

        $EditKelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($EditKelas->rules());

        if ($validation->run()) {
            $EditKelas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'kelas/v_edit_kelas';
        $data['GetKelas'] = $EditKelas->getById($id_kelas);
        $this->load->model("keahlian_model");
        $data['GetKK'] = $this->keahlian_model->getAll();

        if (!$data['GetKelas']) show_404();

        $this->load->view('admin/overview_view', $data);
    }

    function delete($id_kelas = null)
    {
        if (!isset($id_kelas)) show_404();

        if ($this->kelas_model->delete($id_kelas)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('admin/kelas'));
        }
    }
}
