<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customers extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{	
		if ($this->session->userdata('customers', ['email'])) {
            redirect('customers');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header_cs', $data);
            $this->load->view('auth/login_cs');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
	}

	private function _login()
    {
        $email      	= $this->input->post('email');
        $password   	= $this->input->post('password');

        $customers      = $this->db->get_where('customers', ['email' => $email])->row_array();

        // jika usernya ada
        if ($customers) {
                // cek password
                if (password_verify($password, $customers['password'])) {
                    $data = [
                        'email' 	=> $customers['email'],
                        'status'    => 'login'
                    ];
                    $this->session->set_userdata($data);
                    redirect('welcome');
                } else {
                    $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Gagal', 'kata sandi salah!', 'error')
                        }
                    </script>"
                    );
                    redirect('customers');
                }
        } else {
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Gagal', 'Akun Anda tidak ada!', 'error')
                }
            </script>"
            );
            redirect('customers');
        }
    }

    public function registration()
	{	
		if ($this->session->userdata('customers', ['email'])) {
            redirect('customers');
        }

        $this->form_validation->set_rules('nama_cs', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Telpon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customers.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Page';
            $this->load->view('templates/auth_header_cs', $data);
            $this->load->view('auth/registration_cs');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);

            $data = [
                'nama_cs'    => htmlspecialchars($this->input->post('nama_cs', true)),
                'telp'       => htmlspecialchars($this->input->post('telp', true)),
                'email'      => htmlspecialchars($email),
                'alamat'     => htmlspecialchars($this->input->post('alamat', true)),
                'password'   => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            if (!empty($_FILES['ktp']['name'])) {
                $upload = $this->_do_upload();
                $data['ktp'] = $upload;
            }

            $this->db->insert('customers', $data);
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Selamat, akun kamu telah terdaftar!', 'success')
                }
            </script>"
            );
            redirect('customers');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }

    private function _do_upload()
    {
        $config['upload_path']      = 'assets/upload/customers/';
        $config['allowed_types']    = 'gif|jpg|png';
        // $config['max_size']         = 100;
        // $config['max_widht']        = 1000;
        // $config['max_height']       = 1000;
        $config['file_name']        = round(microtime(true)*1000);
 
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ktp')) {
            $this->session->set_flashdata('message', $this->upload->display_errors('',''));
            redirect('customers');
        }
        return $this->upload->data('file_name');
    }

}
