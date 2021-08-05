<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function index($id_ = null)
  {
    $data_query = $this->db->get_where('user')->result_array();
    $data = [
      "title" => "Login",
      "data_sumber" => $data_query,
    ];
    $this->load->view('Pages/Login/index', $data);
  }
  public function proses()
  {
    $data = $_POST;
    $_login= $this->db->get_where('user',[
      "email" => $data['email'],
      "password" => md5($data['password']),
    ]);
    if ($_login->num_rows()>0) {
      $data_login= $_login->row_array();
      $this->session->set_userdata(['role'=>$data_login['role'],"data"=>$data_login]);
      redirect(base_url('Home'));
    }
    else{
      $this->session->set_flashdata('status','gagal');
      redirect(base_url('Login'));
    }
  }
  public function logout()
  {
   $this->session->sess_destroy();
   redirect(base_url('Login'));   
 }
}
