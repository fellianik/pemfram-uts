<?php

class M_bus extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("bus")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('bus', $data);
        return $this->db->affected_rows();
    }

    public function get_data($id_bus)
    {
        $query = $this->db->get_where('bus', array('id_bus' => $id_bus));
        return $query->row();
    }

    public function update_data($id_bus, $data)
    {
        $this->db->where('id_bus', $id_bus);
        $this->db->update('bus', $data);
    }

    public function delete_data($id_bus)
    {
        $this->db->where('id_bus', $id_bus);
        $this->db->delete('bus');
    }

    public function filter_data($status)
    {
        $this->db->select('*');
        $this->db->from('bus');
        $this->db->where('status', $status);
        return $this->db->get()->result();
    }
}
