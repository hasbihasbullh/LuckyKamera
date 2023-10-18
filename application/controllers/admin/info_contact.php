<?php
defined('BASEPATH') or exit('No direct script access allowed');

class info_contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function index()
    {
        $data['title'] = 'Info Kontak';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['info'] = $this->db->get('info_contact')->result();

        $this->form_validation->set_rules('email_info', 'Email Info', 'trim|required|valid_email');
        $this->form_validation->set_rules('telp_info', 'No Telp', 'trim|required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/info-contact', $data);
            $this->load->view('templates/admin_footer');
        }else{
            $data=array(
                "email_info"=> $_POST['email_info'],
                "telp_info"=> $_POST['telp_info']
            );
            $this->db->where('id_info', $_POST['id_info']);
            $this->db->update('info_contact', $data);

            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Data Berhasil Di Edit!', 'success')
                }
            </script>"
            );
            redirect('admin/info_contact');
        }
    }
}