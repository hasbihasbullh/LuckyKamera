<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('admin', ['email'])) {
            redirect('auth');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }
    
    private function _login()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $admin      = $this->db->get_where('admin', ['email' => $email])->row_array();

        // jika usernya ada
        if ($admin) {
                // cek password
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'email'     => $admin['email'],
                        'status'    => $admin['login']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Gagal', 'kata sandi salah!', 'error')
                        }
                    </script>"
                    );
                    redirect('auth');
                }
        } else {
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Gagal', 'Akun Anda tidak ada!', 'error')
                }
            </script>"
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
    
}
