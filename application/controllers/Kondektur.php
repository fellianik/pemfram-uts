<?php

class Kondektur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kondektur');
    }

    public function index()
    {
        $result['title'] = 'Kondektur';
        $result['kondektur'] = $this->M_kondektur->getAllData();
        $this->template->render('kondektur/v_kondektur', $result);
    }

    public function tambah()
    {
        $result['title'] = 'Kondektur';
        // $result['kondektur'] = $this->M_kondektur->getAllData();
        $this->template->render('kondektur/v_add', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_kondektur->insertData($input);
            redirect(base_url() . 'index.php/kondektur');
        } else {
            echo "Tidak bisa";
        }
    }

    public function edit($id_kondektur = null)
    {
        $data['title'] = 'Kondektur';
        // $data['kondektur'] = $this->M_kondektur->getAllData();
        $data['result'] = $this->M_kondektur->get_data($id_kondektur); // mengambil data berdasarkan id
        $this->template->render('kondektur/v_edit', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($id_kondektur = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $id_kondektur = $this->input->post('id_kondektur');

            $this->M_kondektur->update_data($id_kondektur, $data); // update data ke database
            redirect('kondektur'); // kembali ke halaman utama setelah update data
        } else {
            echo "tidak bisa";
        }
    }

    public function delete($id_kondektur)
    {
        $this->M_kondektur->delete_data($id_kondektur);
        redirect('kondektur');
    }
}
