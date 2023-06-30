<?php

class Bus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bus');
    }

    public function index()
    {
        $result['title'] = 'Bus';
        $result['bus'] = $this->M_bus->getAllData();
        $this->template->render('bus/v_bus', $result);
    }

    public function tambah()
    {
        $result['title'] = 'Bus';
        // $result['kondektur'] = $this->M_kondektur->getAllData();
        $this->template->render('bus/v_add', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_bus->insertData($input);
            redirect(base_url() . 'index.php/bus');
        } else {
            echo "Tidak bisa";
        }
    }

    public function edit($id_bus = null)
    {
        $data['title'] = 'Bus';
        // $data['kondektur'] = $this->M_bus->getAllData();
        $data['result'] = $this->M_bus->get_data($id_bus); // mengambil data berdasarkan id
        $this->template->render('bus/v_edit', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($id_bus = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $id_bus = $this->input->post('id_bus');

            $this->M_bus->update_data($id_bus, $data); // update data ke database
            redirect('bus'); // kembali ke halaman utama setelah update data
        } else {
            echo "tidak bisa";
        }
    }

    public function delete($id_bus)
    {
        $this->M_bus->delete_data($id_bus);
        redirect('bus');
    }

    public function filter($status = null)
    {
        $result['title'] = 'Bus';
        $status = $this->input->post('status');
        $result['bus'] = $this->M_bus->filter_data($status);
        $this->template->render('bus/v_bus', $result);
    }
}
