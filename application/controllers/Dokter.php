<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index($id_ = null)
    {
        $edit = $this->db->get_where('dokter', ["id_dokter" => $id_])->row_array();
        $data_query = $this->db->get_where('dokter')->result_array();
        $data = [
            "title" => "Dokter",
            "pages" => "Dokter/index",
            "script" => "Dokter/script",
            "data_sumber" => $data_query,
            "edit"      => json_encode($edit)
        ];
        $this->load->view('Router/route', $data);
    }
    public function action()
    {
        $data = $this->input->post();
        unset($data['id_dokter']);
        unset($data['fato']);
        $up = up('foto', 'assets/images/foto');
        if($up != false){
            $data += ['foto'=> $up];
        }
        if (!empty($_POST['id_dokter']) && $_POST['id_dokter'] != '') {
            $this->db->where('id_dokter', $_POST['id_dokter']);
            $ins = $this->db->update('dokter', $data);
        } else {
            $ins = $this->db->insert('dokter', $data);
        }

        if ($ins) {
            $this->session->set_flashdata('status', '1');
            redirect(base_url('Dokter/index'));
        } else {
            $this->session->set_flashdata('status', '0');
            redirect(base_url('Dokter/index'));
        }
    }
    public function hapus($id_)
    {
      $this->db->where('id_dokter',$id_);
      $delete = $this->db->delete('dokter');
      
      if($delete){
        $this->session->set_flashdata('pesan','1');
        redirect(base_url('Dokter/index'));
    }else{
        $this->session->set_flashdata('pesan','0');
        redirect(base_url('Dokter/index'));
    }
}

}
