<?php

class Spp_model extends CI_Model
{
    private $_table = "spp";

    public $id_spp;
    public $tahun;
    public $nominal;

    public function rules()
    {
        return [
            [
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'required'
            ],

            [
                'field' => 'nominal',
                'label' => 'Nominal',
                'rules' => 'required'
            ]
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_spp)
    {
        return $this->db->get_where($this->_table, ["id_spp" => $id_spp])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_spp = '';
        $this->tahun = $post["tahun"];
        $this->nominal = $post["nominal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_spp = $post["id_spp"];
        $this->tahun = $post["tahun"];
        $this->nominal = $post["nominal"];
        return $this->db->update($this->_table, $this, array('id_spp' => $post['id_spp']));
    }

    public function delete($id_spp)
    {
        return $this->db->delete($this->_table, array("id_spp" => $id_spp));
    }
}
