<?php
class Databrg extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_brg->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/databrg', $data);
        $this->load->view('template_admin/footer');
    }
    public function tambahkan()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './produk';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library(('upload'), $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal di Upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg'      =>  $nama_brg,
            'keterangan'    =>  $keterangan,
            'kategori'      =>  $kategori,
            'harga'         =>  $harga,
            'stok'          =>  $stok,
            'gambar'        =>  $gambar
        );
        $this->model_brg->tambahkan($data, 'tb_barang');
        redirect('admin/databrg/index');
    }
}
