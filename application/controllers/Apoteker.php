<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoteker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $role_id = $this->session->userdata('role_id');
        $menu = $this->uri->segment(1);

        if (!$this->session->userdata('username')){
            redirect('auth');
        } else{
            if (($this->session->userdata('role_id') == 1) || ($this->session->userdata('role_id') == 3) ){
                redirect('auth/blocked');
            }
        }
    }

    public function index()
    {
        $data['appname'] = 'Obat Online App';
        $data['title'] = 'Dashboard';

        $data['jml_obat'] = $this->m_auth->getObatCount();
        $data['jml_pemesanan'] = $this->m_auth->getObatCount();
        
        $sess_username = $this->session->userdata('username');
        $data['user'] = $this->m_auth->getUser($sess_username);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_apoteker', $data);
        $this->load->view('apoteker/index', $data);
        $this->load->view('templates/footer', $data);
    }
}