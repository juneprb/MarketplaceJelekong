<?php

class Model_brg extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }
    public function tambahkan($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
