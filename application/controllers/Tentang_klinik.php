<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_klinik extends CI_Controller
{
 public function __construct()
 {
    parent::__construct();
    if (empty($this->session->userdata()['data'])) {
        redirect(base_url('Login'));
    }
}
public function index()
{
    $this->db->where('id_user',$this->session->userdata()['data']['id_user']);
    $q = $this->db->get('tentang')->row_array();
    $data = [
        "title" => "Dashboard",
        "pages" => "Tentang_klinik/index",
        "script" => "Tentang_klinik/script",
        "query" => $q
    ];
    $this->load->view('Router/route',$data);
}
public function action(){
    $data = $_POST;
    unset($data['files']);
    unset($data['id']);
    $tt = $this->db->get_where('tentang',['id_user'=>$this->session->userdata()['data']['id_user']])->num_rows();
    if($tt > 0){
        $this->db->where('id_user',$this->session->userdata()['data']['id_user']);
        $this->db->update('tentang',$data);
    }else{
        $data += ["id_user"=> $this->session->userdata()['data']['id_user']];
        $this->db->insert('tentang',$data);
    }
    redirect('Tentang_klinik');
}
}
