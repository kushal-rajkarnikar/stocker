<?php class Error extends CI_Controller{


		function __construct(){}


		function type($var = ''){


			switch($var){

				case 'authenticate':

					die('Sorry! You are not identified as a legit user by the system');

					break;

				case 'direct':
				
					die('Sorry! the action you tried to perform is not allowed by the system');
			
					break;	

				case 'db_tracker':
				
					die('Sorry! Your action could not be completed due to the problem in system database!');
			
					break;	

				case 'session':

					die('Sorry! Your session either timed out or was not found!');
					break;

				case '404':

					die('Sorry! The requested url does not exist!');
					break;

				default:
						



			}




		}



}