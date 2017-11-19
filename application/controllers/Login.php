<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('v_login');
	}

	function cek_login(){

		$no 	= $this->input->post('noA');
		$pass 	= $this->input->post('pass');
		$query 	= $this->db->select("*")->from("user")->where("noA",$no)->get();
		$row 	= $query->row();
		$cek 	= $this->M_Login->cek_login("user",$no);
		
		print_r($cek);

		// if (password_verify($pass,$row->pass)) {
		// 	if ($cek > 0) {
		// 		$data_session = array(
		// 			'nama' => $row->nama,
		// 			'status' => $row->status,
		// 			'sess' => "login"
		// 		);
		// 		$this->session->set_userdata($data_session);
		// 		if ($row->status == "admin") {
		// 			redirect(base_url("home/anggota"));
		// 		}else{
		// 			redirect(base_url("home/lihat_data"));
		// 		}
		// 	}else{
		// 		echo "<script type='text/javascript'>
  //              alert ('Maaf Username Dan Password Anda Salah !');
  //              document.write ('<center><h1> Harap Masukan Username Dan Password Dengan Benar !</h1></center><center><h1> www.kioscoding.com</h1></center>');
		//     	</script>";
		// 	}
		// }
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}