<?php

class M_home extends CI_Model {

	function view_user() {
		return $this->db->get('user');
	}
}