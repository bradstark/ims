<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        if (!$this->is_logged_in()) {
            $data['error'] = false;
            $this->load->view('login', $data);
        } else {
            redirect('site');
        }
    }

    public function check() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[20]|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            redirect('login/error');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $is_user = $this->user_model->exists($username, $password);
            $is_username = $this->user_model->username_exists($username);
            $is_password = $this->user_model->passwd_exists($password);
            if ($is_user) {
                $username = $this->input->post('username');
                $id = $this->user_model->get_id($username);
                $role = $this->user_model->get_role($username);
                $location=$this->user_model->get_location($username);
                $data = array(
                    'username' => $username,
                    'id' => $id,
                    'is_logged_in' => TRUE,
                    'role' => $role,
                    'location' => $location,
                        
                );
                $this->session->set_userdata($data);

                redirect('site');
            } else if($is_username==false && $is_password==true){
                    $data['error'] = true;
                 $data['error_message'] = 'Wrong Username...Please reenter !';
        $this->load->view('login', $data);}
                else if($is_password==false && $is_username==true){
                    $data['error'] = true;
                  $data['error_message'] = 'Wrong password.....Please reenter !';
        $this->load->view('login', $data); 
                }
                else{
                    $data['error'] = true;
                     $data['error_message'] = 'Please reenter your username and password!';
        $this->load->view('login', $data); 
                }
            
        }
    }

    public function forgot() {
        $data['error'] = false;
        $this->load->view('forgot', $data);
    }

    public function forgot_submit() {
        $username = $this->input->post('username');
        $exists = $this->user_model->username_exists($username);
        if ($exists) {
            $user = $this->user_model->get_by_username($username);
            $id = $user->id;
            
            $password = random_string('alnum', 16);
            $email = $user->email;
            $subject = 'ISO Management System password';
            $message = 'Your password is: ' . $password;
            //$from = "someonelse@example.com";
            //$headers = "From:" . $from;

            $this->user_model->update_password($id, $password);
            mail($email, $subject, $message);
            $data['error']= false;
            $data['message'] = 'Your new password was sent to the following email address: ' . $email;
        } else {
            $data['error'] = true;
            $data['error_message'] = 'The username does not exist';
        }


        $this->load->view('forgot', $data);
    }
    
    
    
    
    
    
    public function forgot_submit1() {
        
        
        	$username = $this->input->post('username');
                $exists = $this->user_model->username_exists($username);
        if ($exists) {
            $user = $this->user_model->get_by_username($username);
            $id = $user->id;
            
            $password = random_string('alnum', 16);
            $this->user_model->update_password($id, $password);
            $emailide = $user->emailid;
            $subject = 'ISO Management System password';
            $message = 'Your password is: ' . $password;
           $this->load->library('email');// first we load library
$this->email->set_newline("\r\n");//set the new line rule
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';
$config['mailtype'] = 'text'; // instead of html this is optional i just wanted to show other the default value in emal lib
$config['protocol']='smtp';
$config['smtp_port']='465';
$config['smtp_host']='ssl://smtp.googlemail.com';
$config['smtp_user']='ajaypasagada@gmail.com';
$config['smtp_pass']='bhavana1234';// your pass

$this->email->initialize($config);// crucial 
            $this->load->library('email', $config);
          $this->email->initialize($config);
		$this->email->from('ajaypasagada@gmail.com', "Admin Team");
		$this->email->to($emailide);
		$this->email->cc($emailide);
		$this->email->subject($subject);
		$this->email->message($message);
		 $data['error'] = true;	
                 $data['em']=$emailide;
		$data['error_message'] = "Sorry Unable to send email...";	
		if($this->email->send()){					
			$data['message'] = "Mail sent...";	
                         $data['error'] = false;
		}	
                
        $this->load->view('forgot', $data);
    }
    
else{
     $data['error'] = true;
            $data['error_message'] = 'The username does not exist';
    $this->load->view('forgot',$data);
}
    
    
    
    
    
    
    
    
    
    
    }
    
    public function error() {
        $data['error'] = true;
        $data['error_message'] = 'Please reenter your username and password!';
        $this->load->view('login', $data);
    }

    public function logout() {
        if (!$this->is_logged_in()) {
            redirect('login');
        } else {
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            $this->session->sess_destroy();
            $data['error'] = false;
            $this->load->view('login',$data);
        }
    }

    private function is_logged_in() {
        return $this->session->userdata('is_logged_in');
    }

}

/*End of file login.php*/