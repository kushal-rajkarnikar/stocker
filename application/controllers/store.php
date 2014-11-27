<?php class Store extends CI_Controller{
	
	function __construct(){

		parent::__construct();

		$this->load->model('Store_model','smod');

	}


	function index(){

		#shows available store (admin / general)

		#options to CRUD store (admin)

		$data['stores'] = $this->smod->get_all_stores();

		$this->load->vars($data);

		$this->load->view('index');

	}


	function add(){}


	function edit(){}


	function update(){}


	function delete(){}



}