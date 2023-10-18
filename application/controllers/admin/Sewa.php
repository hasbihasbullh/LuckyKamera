<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sewa extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Penyewa';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/sewa', $data);
        $this->load->view('templates/admin_footer');
	}
}
