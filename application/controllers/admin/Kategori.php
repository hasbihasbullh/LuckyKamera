<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = 'Kategori Barang';
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['kategori'] = $this->db->get('kategori')->result(); 
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/kategori', $data);
        $this->load->view('templates/admin_footer');
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nama_ktg', 'Nama Kategori', 'required');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Gagal', 'Data Gagal Di Tambah!', 'error')
                }
            </script>"
            );
            redirect('admin/kategori');
        }else{
            $data=array(
                "nama_ktg"=>$_POST['nama_ktg'],
            );
            $this->db->insert('kategori', $data);

            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Data Berhasil di Simpan!', 'success')
                }
            </script>"
            );
            redirect('admin/kategori');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_ktg', 'Id Kategori', 'required');
        $this->form_validation->set_rules('nama_ktg', 'Nama Kategori', 'required');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Gagal', 'Data Gagal Di Rubah!', 'error')
                }
            </script>"
            );
            redirect('admin/kategori');
        }else{
            $data=array(
                "nama_ktg"=> $_POST['nama_ktg'],
            );
            $this->db->where('id_ktg', $_POST['id_ktg']);
            $this->db->update('kategori', $data);

            $this->session->set_flashdata('message',
            "<script>
                window.onload=function(){
                swal('Berhasil', 'Data Berhasil di Rubah!', 'success')
                }
            </script>"
            );
            redirect('admin/kategori');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id_ktg', $id);
        $this->db->delete('kategori');

        $this->session->set_flashdata('message',
        "<script>
            window.onload=function(){
            swal('Berhasil', 'Data Berhasil di Hapus!', 'success')
            }
        </script>"
        );
        redirect('admin/kategori');

    }
 
}
