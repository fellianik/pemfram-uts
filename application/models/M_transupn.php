<?php

class M_transupn extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("trans_upn")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('trans_upn', $data);
        return $this->db->affected_rows();
    }

    public function get_data($id_trans_upn)
    {
        $query = $this->db->get_where('trans_upn', array('id_trans_upn' => $id_trans_upn));
        return $query->row();
    }

    public function update_data($id_trans_upn, $data)
    {
        $this->db->where('id_trans_upn', $id_trans_upn);
        $this->db->update('trans_upn', $data);
    }

    public function delete_data($id_trans_upn)
    {
        $this->db->where('id_trans_upn', $id_trans_upn);
        $this->db->delete('trans_upn');
    }

    public function filter_data_kondektur($id_kondektur)
    {
        $this->db->select('*');
        $this->db->from('trans_upn');
        $this->db->where('id_kondektur', $id_kondektur);
        return $this->db->get()->result();
    }
    public function filter_data_driver($id_driver)
    {
        $this->db->select('*');
        $this->db->from('trans_upn');
        $this->db->where('id_driver', $id_driver);
        return $this->db->get()->result();
    }
}
