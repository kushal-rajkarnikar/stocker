<?php class User extends CI_Controller{
	


	function __construct(){

		parent::__construct();

		//$session = $this->session->userdata('stocker_user_session');	

		$this->load->model('User_model','umod');

		//if(!$this->session->userdata('stocker_user_session')){

		//	redirect('error/type/authentication');

		//}
			
		

	}


	function index(){

		# shows all the users
		# allows edit and delete rights only to the admin
		/*$a =  $this->session->userdata('stocker_user_session');

			echo "<pre>";print_r($a);exit;*/

		$data['users'] = $this->umod->get_all_users();

		$this->load->vars($data);

		$this->load->view('users/index');


	}

	function create(){


		$this->load->view('users/create');


	}


	function create_db(){

		if(isset($_POST['create_user'])){

			$parameter = array(

							'user_name'	=>	$this->input->post('user_name'),
							'user_pass_word'	=>	md5(sha1($this->input->post('user_pass_word'))),
							'user_email'=>	$this->input->post('user_email'),
							'user_level'=>	$this->input->post('user_level'),

				);

			
			if($this->umod->create_new_user($parameter)){

				$this->session->set_flashdata('user_message','User created successfully');

				redirect('user');

			}


		}else{

			redirect('error/type/direct');
		}

	}

	function edit(){}

	function delete(){}

	function show_activity(){}


}