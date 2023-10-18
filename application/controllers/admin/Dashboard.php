<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['customers'] = $this->db->get('customers')->num_rows();
        $data['barang'] = $this->db->get('barang')->num_rows();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }
}
