<?php class Home extends CI_Controller{
	
	function __construct(){

		parent::__construct();

		$this->load->model('authenticate_model','amod');

	}

	function index(){

		#shows the login page

		$this->load->view('home/index');



	}

	function authenticate(){

		#checks if the user is legitimate

		if(isset($_POST['authenticate'])){

			$parameter = array('user_name'	=>	$this->input->post('stocker_user_name'),
							   'user_pass_word'	=>	md5(sha1($this->input->post('stocker_pass_word')))


						);

			/*echo "<pre>";print_r($parameter);exit;*/

			if($info = $this->amod->check_user($parameter)){ echo "<pre>";print_r($info);

				if($this->db->insert('stocker_user_session_tracker',array('stocker_user_id'	=>	$info['user_id']))){

					$this->session->set_userdata('stocker_user_session',$info);

					redirect('dashboard');

				}else{

					redirect('error/type/db_tracker');

				}



			}else{

				redirect('error/type/authenticate');

			}


		}else{

			redirect('error/type/direct');

		}

	}



	function logout(){

		if($this->session->userdata('stocker_user_session')){


			$this->session->unset_session('stocker_user_session');

			redirect('home');

		}



	}



	
}//class ends here