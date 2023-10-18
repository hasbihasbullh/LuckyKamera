<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['contactus'] = $this->db->get('contactus')->result();

        $data['title'] = 'Hubungi Kami';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/contact-us', $data);
        $this->load->view('templates/admin_footer');
    }

    public function active($id)
    {
        
    }

}
