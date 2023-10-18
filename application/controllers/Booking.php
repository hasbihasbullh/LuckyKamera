<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

	public function index()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		
		$product_id = $this->uri->segment(3);
		$data['barang'] = $this->Barang_model->getBarang($product_id);
        $data['kategori'] = $this->db->get('kategori')->result();

		$this->load->view('templates/web_header', $data);
		$this->load->view('booking', $data);
		$this->load->view('templates/web_footer');
	}

	public function cek()
	{
		$id_brg				= $_POST['id_brg'];
		$tgl_mulai 			= $_POST['tgl_mulai'];
		$tgl_selesai		= $_POST['tgl_selesai'];
		$pickup				= $_POST['pickup'];

		$data = array (
            'id_brg'   		=> $id_brg,
            'tgl_mulai'   	=> $tgl_mulai,
            'tgl_selesai'  	=> $tgl_selesai,
            'pickup'       	=> $pickup, 
        );

		$this->db->insert('add_booking', $data);
		// $this->db->query("SELECT kode_booking FROM cek_booking WHERE tgl_booking BETWEEN '$tgl_mulai' AND '$tgl_selesai' AND id_brg='$id_brg' AND status!='Cancel' ");
		redirect('booking/ready/'.$id_brg);
	}

	public function ready()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		
		$product_id = $this->uri->segment(3);
		$data['barang'] = $this->Barang_model->getBarang($product_id);
        $data['kategori'] = $this->db->get('kategori')->result();

        $data['add_booking'] = $this->db->get('add_booking')->result();
        
		$this->load->view('templates/web_header', $data);
		$this->load->view('booking-ready', $data);
		$this->load->view('templates/web_footer');
	}

	public function detail()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		
		$product_id = $this->uri->segment(3);
		$data['barang'] = $this->Barang_model->getBarang($product_id);
        $data['kategori'] = $this->db->get('kategori')->result();
        
		$this->load->view('templates/web_header', $data);
		$this->load->view('booking-detail', $data);
		$this->load->view('templates/web_footer');
	}
}