<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Barang_model', 'kategori');
    }

	public function index()
	{
		$data['title'] = 'Data Barang';
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->kategori->get_Barang();
        $data['kategori'] = $this->db->get('kategori')->result();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('templates/admin_footer');
	}

    public function tambah()
    {   
        $nama_brg   = $this->input->post('nama_brg');
        $id_ktg     = $this->input->post('id_ktg');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar='') {
        } else {
            $config['upload_path']          = './assets/upload/product/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                return "default.jpg";
            } else {
                $gbr=$this->upload->data('file_name');
                $this->db->set('gambar', $gbr);
            }
        }

        $data = array (
            'nama_brg'    => $nama_brg,
            'id_ktg'      => $id_ktg,
            'deskripsi'   => $deskripsi,
            'harga'       => $harga, 
        );
        $this->db->insert('barang', $data);
        $this->session->set_flashdata('message',
        "<script>
            window.onload=function(){
            swal('Berhasil', 'Data Berhasil di Simpan!', 'success')
            }
        </script>"
        );
        redirect('admin/barang');
    }

    public function edit()
    {
        $id_brg     = $this->input->post('id_brg');
        $nama_brg   = $this->input->post('nama_brg');
        $id_ktg     = $this->input->post('id_ktg');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/upload/product/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['barang']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/upload/product/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

         $data = array (
            'nama_brg'    => $nama_brg,
            'id_ktg'      => $id_ktg,
            'deskripsi'   => $deskripsi,
            'harga'       => $harga, 
        );

        $this->db->where('id_brg', $id_brg);
        $this->db->update('barang', $data);

        $this->session->set_flashdata('message',
        "<script>
            window.onload=function(){
            swal('Berhasil', 'Data Berhasil di Rubah!', 'success')
            }
        </script>"
        );
        redirect('admin/barang');
    }

    public function hapus($id)
    {
        $_id = $this->db->get_where('barang',['id_brg' => $id])->row();
        $query = $this->db->delete('barang',['id_brg'=>$id]);
        if($query){
            unlink("assets/upload/product/".$_id->gambar);
        }
        $this->session->set_flashdata('message',
        "<script>
            window.onload=function(){
            swal('Berhasil', 'Data Berhasil di Hapus!', 'success')
            }
        </script>"
        );
        redirect('admin/barang');
    }
}
