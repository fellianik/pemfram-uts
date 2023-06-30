<?php

class M_kondektur extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("kondektur")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('kondektur', $data);
        return $this->db->affected_rows();
    }

    public function get_data($id_kondektur)
    {
        $query = $this->db->get_where('kondektur', array('id_kondektur' => $id_kondektur));
        return $query->row();
    }

    public function update_data($id_kondektur, $data)
    {
        $this->db->where('id_kondektur', $id_kondektur);
        $this->db->update('kondektur', $data);
    }

    public function delete_data($id_kondektur)
    {
        $this->db->where('id_kondektur', $id_kondektur);
        $this->db->delete('kondektur');
    }
}
