<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

	public function index()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

		$data['barang'] = $this->db->get('barang')->result();
		$this->load->view('templates/web_header', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/web_footer');
	}

    public function detail_product()
    {   
        $data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
        
        $product_id = $this->uri->segment(3);
        $data['barang'] = $this->Barang_model->getBarang($product_id);
        $data['kategori'] = $this->db->get('kategori')->result();
        
        $this->load->view('templates/web_header', $data);
        $this->load->view('detail-product', $data);
        $this->load->view('templates/web_footer');
    }

    public function about_us()
    {   
        $data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/web_header',$data);
        $this->load->view('about-us', $data);
        $this->load->view('templates/web_footer');
    }

    public function contact_us()
    {   
        $data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

        $data['info'] = $this->db->get('info_contact')->result();

        $this->form_validation->set_rules('nama_visit', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email_visit', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('telp_visit', 'No Telp', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/web_header',$data);
            $this->load->view('contact-us', $data);
            $this->load->view('templates/web_footer');
        } else {
            $data = [
                'nama_visit'        => htmlspecialchars($this->input->post('nama_visit', true)),
                'email_visit'       => htmlspecialchars($this->input->post('email_visit', true)),
                'telp_visit'        => htmlspecialchars($this->input->post('telp_visit', true)),
                'pesan'             => htmlspecialchars($this->input->post('pesan', true)),
                'status'            => 0
            ];

            $this->db->insert('contactus', $data);
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Data Berhasil di Kirim!', 'success')
                }
            </script>"
            );
            redirect('welcome/contact_us');
        }
    }

	public function editprofile()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_cs', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('telp', 'No Telp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/web_header',$data);
			$this->load->view('edit-profile', $data);
			$this->load->view('templates/web_footer');
		} else {
			$nama_cs  	= $this->input->post('nama_cs');
            $email 		= $this->input->post('email');
            $telp 	 	= $this->input->post('telp');
            $alamat  	= $this->input->post('alamat');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['ktp']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/upload/customers/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('ktp')) {
                    $old_image = $data['customers']['ktp'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/upload/customers/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('ktp', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $data = array (
            	'nama_cs'    	=> $nama_cs,
            	'telp'      	=> $telp,
            	'alamat'	   	=> $alamat,
	       	);
            $this->db->where('email', $email);
            $this->db->update('customers', $data);

            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Profile Berhasil di Rubah!', 'success')
                }
            </script>"
            );
            redirect('welcome/editprofile');
		} 
	}

	public function changepassword()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/web_header',$data);
			$this->load->view('change-password', $data);
			$this->load->view('templates/web_footer');
		} else {
			$current_password 	= $this->input->post('current_password');
            $new_password 		= $this->input->post('new_password1');
            if (!password_verify($current_password, $data['customers']['password'])) {
                $this->session->set_flashdata('message',
                "<script>
                    window.onload=function(){
                    swal('Gagal', 'Kata sandi salah saat ini!', 'error')
                    }
                </script>"
                );
                redirect('welcome/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Gagal', 'Kata sandi baru tidak boleh sama dengan kata sandi saat ini!', 'error')
                        }
                    </script>"
                    );
                    redirect('welcome/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('customers');

                    $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Berhasil', 'Kata sandi berubah!', 'success')
                        }
                    </script>"
                    );
                    redirect('welcome/changepassword');
                }
            }
		}
	}

	public function riwayatsewa()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/web_header',$data);
		$this->load->view('riwayat-sewa', $data);
		$this->load->view('templates/web_footer');
	}
}
