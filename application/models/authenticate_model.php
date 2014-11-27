<?php class Authenticate_model extends CI_Model{

	private $authentication_table;

	function __construct(){


		$this->authentication_table = 'stocker_users';

	}


	function check_user($parameter){

		$query = $this->db->get_where($this->authentication_table,$parameter);

		if($query->num_rows())

			return $query->row_array();

		return;

	}


}