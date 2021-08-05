<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klinik extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
      if (empty($this->session->userdata()['data'])) {
          redirect(base_url('Login'));
        }
    }
    public function index($id_ = null)
    {
        $edit = $this->db->get_where('klinik', ["id_klinik" => $id_])->row_array();
        $query = $this->db->get_where('klinik')->result_array();
        $data = [
            "title" => "Klinik",
            "pages" => "Klinik/index",
            "script" => "Klinik/script",
            "edit" => $edit,
            "data_sumber" => $query
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data_ = [
            "nama" => $_POST['nama'],
            "alamat" => $_POST['alamat'],
            "dr_penanggung_jawab" => $_POST['dr_penanggung_jawab'],
            "izin_operasional" => $_POST['izin_operasional'],
            "kp_rj" => empty($_POST['kp_rj'])?'TIDAK':'YA',
            "kp_ri" => empty($_POST['kp_ri'])?'TIDAK':'YA',
            "ku_rj" => empty($_POST['ku_rj'])?'TIDAK':'YA',
            "ku_ri" => empty($_POST['ku_ri'])?'TIDAK':'YA',
            "spesialis" => empty($_POST['spesialis'])?'TIDAK':'YA',
            "bersalin" => $_POST['bersalin'],
            "jp" => $_POST['jp'],
            "wp" => $_POST['wp'],
            "kepemilikan" => $_POST['kepemilikan'],
            "dikeluarkan" => $_POST['dikeluarkan'],
            "koordinat" => $_POST['koordinat'],
            "status" => "AKTIF"
        ];
        $this->db->insert('klinik', $data_);
        redirect(base_url('Klinik'));
    }
    public function hapus($id_)
    {
      $this->db->where('id_klinik',$id_);
      $delete = $this->db->delete('klinik');
      
      if($delete){
        $this->session->set_flashdata('pesan','1');
        redirect(base_url('Klinik/index'));
    }else{
        $this->session->set_flashdata('pesan','0');
        redirect(base_url('Klinik/index'));
    }
}

}
