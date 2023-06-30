<?php

class M_driver extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("driver")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('driver', $data);
        return $this->db->affected_rows();
    }

    public function get_data($id_driver)
    {
        $query = $this->db->get_where('driver', array('id_driver' => $id_driver));
        return $query->row();
    }

    public function update_data($id_driver, $data)
    {
        $this->db->where('id_driver', $id_driver);
        $this->db->update('driver', $data);
    }

    public function delete_data($id_driver)
    {
        $this->db->where('id_driver', $id_driver);
        $this->db->delete('driver');
    }
}
