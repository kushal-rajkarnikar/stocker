<?php class User_model extends CI_Model{

	private $user_table;

	function __construct(){

		$this->user_table = "stocker_users";

	}


	function get_all_users(){

		$query = $this->db->get($this->user_table);

		if($query->num_rows())

			return $query->result_array();

		return;


	}

	function create_new_user($parameters){

		if($this->db->insert($this->user_table,$parameters))

			return true;
		return;


	}



}