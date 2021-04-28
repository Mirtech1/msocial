<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {


    function __construct(){
        parent::__construct();
         $this->load->model('User_model');
         $this->load->helper('form', 'url');
         $this->load->library('session');
         $this->load->helper('download');
         $this->load->library('form_validation');
    }

    /**public function index(){
        $this->load->view('template/header');
        $this->load->view('users/index');
        $this->load->view('template/footer');
    }*/

    // This handles the pages
  public function view ($page = 'index')
  {
    if(!file_exists('application/views/'.$page.'.php'))
    {
      show_404();
    }
        $this->load->view($page);   
  }
  public function register(){
    $data['fname'] = $this->input->post('fName');
    $data['lname'] = $this->input->post('lName');
    $data['uname'] = $this->input->post('uName');
    $data['day'] = $this->input->post('day');
    $data['month'] = $this->input->post('month');
    $data['year'] = $this->input->post('year');
    $data['gender'] = $this->input->post('gender');
    $data['email'] = $this->input->post('email');
    $data['pass'] = $this->input->post('pass');


    $query = $this->User_model->Verify($data);
    if($query == true)
    {
        $response['error'] = true;
        $response['message'] = 'Email Already Exists';
    }
    else{
      $insert = $this->User_model->insert($data);
        $response['error'] = false;
        $response['message'] = 'User successfully Registered';
    }

    echo json_encode($response);

  
}
public function login(){
  $data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
    $query = $this->User_model->ValidateEntry($data);

    if ($query = true) {
      $fetchdata = $this->User_model->fetchUserData($data);

      $session_data = array(
				'email' => $fetchdata[0]->email, 
				'fname' => $fetchdata[0]->fname, 
				'lname' => $fetchdata[0]->lname, 
				'uname' => $fetchdata[0]->uname, 
				'day' => $fetchdata[0]->day,
				'month' => $fetchdata[0]->month, 
				'year' => $fetchdata[0]->year, 
				'gender' => $fetchdata[0]->gender

				);
        $this->session->set_userdata('logged_in', $session_data);
			$response['error'] = false;
			$response['message'] = 'user logged in';
    }
		else{
			$response['error']= true;
			$response['message'] = 'No User found in the database';
		}

		echo json_encode($response);
	}
  public function LogOut(){
		$sess_array = array(
			'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			header('location:'.base_url('login'));
	}


} 

  
 