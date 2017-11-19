<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->config('grocery_crud');
		$this->load->model('M_home');
		if ($this->session->userdata('noA')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}

	function index() {
		$output['nama'] = $this->session->userdata('nama'); 
		$this->anggota($output);
	}

	function lihat_data(){
		$data = array(
        	'user' => $this->M_home->view_user()->result(),
      	);

		$this->load->view('v_header');
		$this->load->view('v_home',$data);
		$this->load->view('v_footer');
	}

	function anggota() {
		$c = new grocery_CRUD();
		$c->set_table('user');
		
		// config display as
		$c->display_as('noA','No. Anggota');
		$c->display_as('pass','Password');
		$c->display_as('tmpLahir','Tempat Lahir');
		$c->display_as('tglLahir','Tanggal Lahir');
		$c->display_as('jk','Jenis Kelamin');
		$c->display_as('masaBerlaku','Masa Berlaku');


		// config 
		$c->required_fields('noA','nama','pass','tmpLahir','tglLahir','agama','jk','pekerjaan','jabatan','alamat','masaBerlaku','foto','status');
		$c->field_type('pass','password');
		$c->field_type('noA','integer');
		$c->field_type('tglLahir','date');
		$c->field_type('masaBerlaku','date');
		$c->unset_texteditor('alamat');
		$c->set_field_upload('foto','upload/img','jpg|png|jpeg');
		$c->set_theme('datatables');
		$c->columns('foto','noA','nama','pass','jk','jabatan','status');



		//set callback
		$c->callback_column('foto',array($this,'rounded_image'));
		$c->callback_before_insert(array($this,'encrypt_password'));
		$c->callback_before_update(array($this,'encrypt_password'));
		$c->callback_field('pass',array($this,'callback_password_field'));
		$c->callback_edit_field('pass',array($this,'callback_password_field'));


		$output = $c->render();
		
		$this->load->view('v_header_admin.php', (array)$output);
		$this->load->view('v_anggota.php', (array)$output);
		$this->load->view('v_footer.php');
	}

	function encrypt_password($post_array,$primary_key = null){
		$post_array['pass'] = password_hash($post_array['pass'], PASSWORD_DEFAULT);
		return $post_array;
	}

	function rounded_image($value){
		return "<img src='".base_url()."upload/img/".$value."' class='img-thumbnail img-fluid' height='70px' width='70px' />";
	}

	function callback_password_field($value){
		return "<input type='text' name='pass' />";
	}

	public function logout() {
		$this->session->unset_userdata('noA');
		$this->session->unset_userdata('status');
		session_destroy();
		redirect('auth');
	}
}