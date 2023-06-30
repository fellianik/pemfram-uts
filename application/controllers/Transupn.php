<?php

class Transupn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transupn');
        $this->load->model('M_bus');
        $this->load->model('M_driver');
        $this->load->model('M_kondektur');
    }

    public function index()
    {
        $result['title'] = 'Trans UPN';
        $result['transupn'] = $this->M_transupn->getAllData();
        $result['kondektur'] = $this->M_kondektur->getAllData();

        $this->template->render('transupn/v_transupn', $result);
    }

    public function detail($id_trans_upn = null)
    {
        $data['title'] = 'Trans UPN';
        $data['transupn'] = $this->M_transupn->get_data($id_trans_upn);
        $this->template->render('transupn/v_detail', $data);
    }

    public function tambah()
    {
        $result['title'] = 'Trans UPN';
        $result['kondektur'] = $this->M_kondektur->getAllData();
        $result['driver'] = $this->M_driver->getAllData();
        $result['bus'] = $this->M_bus->getAllData();
        $this->template->render('transupn/v_add', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_transupn->insertData($input);
            redirect(base_url() . 'index.php');
        } else {
            echo "Tidak bisa";
        }
    }

    public function edit($id_trans_upn = null)
    {
        $data['title'] = 'Trans UPN';
        $data['kondektur'] = $this->M_kondektur->getAllData();
        $data['driver'] = $this->M_driver->getAllData();
        $data['bus'] = $this->M_bus->getAllData();
        $data['result'] = $this->M_transupn->get_data($id_trans_upn); // mengambil data berdasarkan id
        $this->template->render('transupn/v_edit', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($id_trans_upn = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $id_trans_upn = $this->input->post('id_trans_upn');

            $this->M_transupn->update_data($id_trans_upn, $data); // update data ke database
            redirect('transupn'); // kembali ke halaman utama setelah update data
        } else {
            echo "tidak bisa";
        }
    }

    public function delete($id_trans_upn)
    {
        $this->M_transupn->delete_data($id_trans_upn);
        redirect('transupn');
    }
}
