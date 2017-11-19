<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function cek_login() {
		$no     = $this->input->post('noA');
		$pass   = $this->input->post('pass');
		$data   = array('noA' => $no);
		$hasil  = $this->M_Login->cek_login($data);
		$query 	= $this->db->select("*")->from("user")->where("noA",$no)->get();
		$row 	= $query->row();
		if ($hasil->num_rows() == 1) {
			if (password_verify($pass,$row->pass)) {
				foreach ($hasil->result() as $sess) {
					$cook['logged_in'] = "Sudah Login";
					$cook['noA']       = $sess->noA;
					$cook['nama']      = $sess->nama;
					$cook['status']    = $sess->status;
					$cook['foto']      = $sess->foto;
					$this->session->set_userdata($cook);

				}
			}else{
				echo "password salah";
			}
			if ($this->session->userdata('status') == 'admin') {
				redirect('home/anggota');echo "benar";
			}elseif($this->session->userdata('status') == 'user'){
				redirect('home/lihat_data');
			}
		}else{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}