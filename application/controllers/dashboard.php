<?php class Dashboard extends CI_Controller{
	
	function __construct(){

		parent::__construct();
	}


	function index(){

		#checks session
		#displays:
			/* 
				* Store CRUD
				* Items CRUD
				* Report CRUD

			*/ 


		if($this->session->userdata('stocker_user_session')):


			

			$this->load->view('dashboard/index');

		else:

			redirect('error/type/session');

		endif;	
	
	}




}