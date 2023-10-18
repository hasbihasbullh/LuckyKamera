<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('includes/profile', $data);
        $this->load->view('templates/admin_footer');
    }

    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('includes/editprofile', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $name  = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/upload/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['admin']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/upload/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('id', $id);
            $this->db->update('admin');

            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Profile Berhasil Di Rubah!', 'success')
                }
            </script>"
            );
            redirect('admin/profile');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('includes/changepassword', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['admin']['password'])) {
                $this->session->set_flashdata('message',
                "<script>
                    window.onload=function(){
                    swal('Gagal', 'Kata sandi salah saat ini!', 'error')
                    }
                </script>"
                );
                redirect('admin/profile/changepassword');
            } else {
                if ($current_password == $new_password) {
                   $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Gagal', 'Kata sandi baru tidak boleh sama dengan kata sandi saat ini!', 'error')
                        }
                    </script>"
                    );
                    redirect('admin/profile/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('admin');

                    $this->session->set_flashdata('message',
                    "<script>
                        window.onload=function(){
                        swal('Berhasil', 'Kata sandi berubah!', 'success')
                        }
                    </script>"
                    );
                    redirect('admin/profile');
                }
            }
        }
    }
}
