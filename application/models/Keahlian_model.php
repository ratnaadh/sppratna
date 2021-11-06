<?php

class Keahlian_model extends CI_Model
{
    private $_table = "kompetensi_keahlian";

    public $id_kk;
    public $nama_kk;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kk',
                'label' => 'nama_kk',
                'rules' => 'required'
            ],

            [
                'field' => 'id_kk',
                'label' => 'id_kk',
                'rules' => 'numeric'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_kk)
    {
        return $this->db->get_where($this->_table, ["id_kk" => $id_kk])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kk = '';
        $this->nama_kk = $post["nama_kk"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kk = $post["id_kk"];
        $this->nama_kk = $post["nama_kk"];
        return $this->db->update($this->_table, $this, array('id_kk' => $post['id_kk']));
    }

    public function delete($id_kk)
    {
        return $this->db->delete($this->_table, array("id_kk" => $id_kk));
    }
}
