<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function getBarang($product_id)
    {
        $query = "SELECT `barang`.*, `kategori`.`nama_ktg`
                  FROM `barang` JOIN `kategori`
                  ON `barang`.`id_ktg` = `kategori`.`id_ktg`
                  WHERE barang.id_brg = '$product_id'
                ";
        return $this->db->query($query)->result();
    }

    public function get_Barang()
    {
    	$query = "SELECT `barang`.*, `kategori`.`nama_ktg`
                  FROM `barang` JOIN `kategori`
                  ON `barang`.`id_ktg` = `kategori`.`id_ktg`
                ";
        return $this->db->query($query)->result();
    }
}
