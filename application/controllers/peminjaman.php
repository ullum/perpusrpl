<?php

class Peminjaman extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peminjaman');
    }
    public function index(){
        $isi['content'] = 'peminjaman/peminjaman_view';
        $isi['judul'] = 'Data Peminjaman';
        $isi['data'] = $this->m_peminjaman->getDataPeminjaman();
        $this->load->view('dashboard_view', $isi);
    }
    public function tambah_peminjaman()
    {
        $isi['content'] = 'peminjaman/t_peminjaman';
        $isi['judul'] = 'Form Tambah Peminjaman';
        $isi['id_peminjaman'] = $this->m_peminjaman->id_peminjaman();
        $isi['peminjam'] = $this->db->get('anggota')->result();
        $isi['buku'] = $this->db->get('buku')->result();
        $this->load->view('dashboard_view', $isi);
    }
    public function simpan()
    {
       $data = array(
            'id_pm' => $this->input->post('id_pm'),
            'id_anggota' => $this->input->post('id_anggota'),
            'id_buku' => $this->input->post('id_buku'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
       );
       $query = $this->db->insert('peminjaman', $data);
       if($query = true){
            $this->session->set_flashdata('info', 'Data Transaksi Berhasil di Simpan');
            redirect('peminjaman');
       }
    }
    public function jumlah_buku(){

        $id = $this->input->post('id');
        $data = $this->m_peminjaman->jumlah_buku($id);
        echo json_encode($data);
    }
}