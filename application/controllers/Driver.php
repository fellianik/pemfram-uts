<?php

class Driver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_driver');
    }

    public function index()
    {
        $result['title'] = 'Driver';
        $result['driver'] = $this->M_driver->getAllData();
        $this->template->render('driver/v_driver', $result);
    }

    public function tambah()
    {
        $result['title'] = 'Driver';
        // $result['kondektur'] = $this->M_kondektur->getAllData();
        $this->template->render('driver/v_add', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_driver->insertData($input);
            redirect(base_url() . 'index.php/driver');
        } else {
            echo "Tidak bisa";
        }
    }

    public function edit($id_driver = null)
    {
        $data['title'] = 'Driver';
        // $data['kondektur'] = $this->M_driver->getAllData();
        $data['result'] = $this->M_driver->get_data($id_driver); // mengambil data berdasarkan id
        $this->template->render('driver/v_edit', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($id_driver = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $id_driver = $this->input->post('id_driver');

            $this->M_driver->update_data($id_driver, $data); // update data ke database
            redirect('driver'); // kembali ke halaman utama setelah update data
        } else {
            echo "tidak bisa";
        }
    }

    public function delete($id_driver)
    {
        $this->M_driver->delete_data($id_driver);
        redirect('driver');
    }
}
