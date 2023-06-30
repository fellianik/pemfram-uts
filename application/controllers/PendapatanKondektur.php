<?php

class PendapatanKondektur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kondektur');
        $this->load->model('M_transupn');
    }

    public function index()
    {
        // $this->template->render('v_pendapatanKondektur', $result);
        echo "Tidak bisa";
        $result['title'] = 'Kondektur';
        $result['kondektur'] = $this->M_kondektur->getAllData();
        $result['transupn'] = $this->M_transupn->getAllData();
        $this->template->render('v_pendapatanKondektur', $result);
    }

    public function filter()
    {
        $result['title'] = 'Kondektur';
        $result['kondektur'] = $this->M_kondektur->getAllData();


        $id_kondektur = $this->input->post('id_kondektur');
        // $date1 = $this->input->post('date1');
        // $date2 = $this->input->post('date2');
        $result['transupn'] = $this->M_transupn->filter_data_kondektur($id_kondektur);
        $this->template->render('v_pendapatanKondektur', $result);
    }
}
