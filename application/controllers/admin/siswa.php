<?php

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['GetSiswa'] = $this->siswa_model->getAll();
        $data['content'] = 'siswa/v_siswa';
        $this->load->view('admin/overview_view', $data);
    }

    function add()
    {
        $AddSiswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($AddSiswa->rules());

        if ($validation->run()) {
            $AddSiswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'siswa/v_add_siswa';
        $this->load->model("kelas_model");
        $data['GetKelas'] = $this->kelas_model->getAll();
        $this->load->model("spp_model");
        $data['GetSpp'] = $this->spp_model->getAll();

        $this->load->view('admin/overview_view', $data);
    }

    function edit($nisn = null)
    {
        if (!isset($nisn)) redirect('admin/siswa');

        $EditSiswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($EditSiswa->rules());

        if ($validation->run()) {
            $EditSiswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'siswa/v_edit_siswa';
        $data['GetSiswa'] = $EditSiswa->getById($nisn);
        $this->load->model("kelas_model");
        $data['GetKelas'] = $this->kelas_model->getAll();
        $this->load->model("spp_model");
        $data['GetSpp'] = $this->spp_model->getAll();

        if (!$data['GetSiswa']) show_404();

        $this->load->view('admin/overview_view', $data);
    }

    function delete($nisn = null)
    {
        if (!isset($nisn)) show_404();

        if ($this->siswa_model->delete($nisn)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('admin/siswa'));
        }
    }
}
