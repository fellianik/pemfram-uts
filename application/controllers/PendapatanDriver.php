<?php

class PendapatanDriver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_driver');
        $this->load->model('M_transupn');
    }

    public function index()
    {
        echo "Tidak bisa";
        $result['title'] = 'Driver';
        $result['driver'] = $this->M_driver->getAllData();
        $result['transupn'] = $this->M_transupn->getAllData();
        $this->template->render('v_pendapatanDriver', $result);
    }

    public function filter()
    {
        $result['title'] = 'Driver';
        $result['driver'] = $this->M_driver->getAllData();


        $id_driver = $this->input->post('id_driver');
        // $date1 = $this->input->post('date1');
        // $date2 = $this->input->post('date2');
        $result['transupn'] = $this->M_transupn->filter_data_driver($id_driver);
        $this->template->render('v_pendapatanDriver', $result);
    }
}
