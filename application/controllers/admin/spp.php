<?php

class Spp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("spp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['GetSpp'] = $this->spp_model->getAll();
        $data['content'] = 'spp/v_spp';
        $this->load->view('admin/overview_view', $data);
    }

    function add()
    {
        $AddSpp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($AddSpp->rules());

        if ($validation->run()) {
            $AddSpp->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data['content'] = 'spp/v_add_spp';

        $this->load->view('admin/overview_view', $data);
    }

    function edit($id_spp = null)
    {
        if (!isset($id_spp)) redirect('admin/spp');

        $EditSpp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($EditSpp->rules());

        if ($validation->run()) {
            $EditSpp->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data['title'] = "Edit SPP";
        $data['content'] = 'spp/v_edit_spp';
        $data['GetSpp'] = $EditSpp->getById($id_spp);

        if (!$data['GetSpp']) show_404();

        $this->load->view('admin/overview_view', $data);
    }

    function delete($id_spp = null)
    {
        if (!isset($id_spp)) show_404();

        if ($this->spp_model->delete($id_spp)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('admin/spp'));
        }
    }
}
