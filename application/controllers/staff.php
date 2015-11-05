<?php

class staff extends CI_Controller {

    public function __construct() {
        parent::__construct();
              //$this->load->model('Staff_model');
//        if (!$this->is_logged_in()) {
//            redirect('login');
//        }
    }
    public function index() {

       
    }
       public function mainadminpage() {
           $this->load->view("adminhome");
           
}
 public function profile() {
       
        $data['id']=$this->session->userdata('id');
        if ($this->session->userdata('role') == 'staff') {
 $this->load->view('staffpop', $data);}

        if ($this->session->userdata('role') == 'admin') {
          $this->load->view('staffprofilepop', $data);
        }
    }
public function addstaff() {
       // $data['id'] = $this->patient_model->add_default();
      //  $data['error'] = false;
     //  $data['active'] = 'profile';
        $this->load->view('staffprofile' );
    }

   public function addprofile() {
       $this->load->library('form_validation');
                
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('dname', 'Staff Id',  'required|min_length[5]|max_length[15]|alpha_numeric|');
                $this->form_validation->set_rules('fname', 'Firstname',  'required|min_length[2]|max_length[15]|alpha|');
                $this->form_validation->set_rules('lname', 'Lastname',  'required|min_length[2]|max_length[15]|alpha|');
                $this->form_validation->set_rules('uname', 'Username',  'required|min_length[5]|max_length[15]|alpha_numeric|');
                $this->form_validation->set_rules('idValue2', 'Role',  'required');
                $this->form_validation->set_rules('idValue1', 'Gender',  'required');
                $this->form_validation->set_rules('idValue3', 'Location',  'required');
                $this->form_validation->set_rules('', 'password', 'required|min_length[5]|max_length[25]');
		$this->form_validation->set_rules('demail', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('dmobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('staffprofile');
		}
		else
		{
		
        $id = $this->input->post('dname');
        $firstname = $this->input->post('fname');
        $lastname = $this->input->post('lname');
         $username = $this->input->post('uname');
        $password = $this->input->post('password');
        $email=$this->input->post('demail');
        $sex = $this->input->post('idValue1');
         $role = $this->input->post('idValue2');
         $location=$this->input->post('idValue3');
        $address = $this->input->post('daddress');
        $mobile = $this->input->post('dmobile');

        
       
        $staff = array(
            'id'=>$id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username'=>$username,
            'password'=>md5($password),
            'role'=>$role,
            'emailid'=>$email,
            'sex' => $sex,
            'address' => $address,
            'mobile' => $mobile,
            'location' => $location
        );
        
    


  if($this->Staff_model->id_exists($id))
        {
             $message =  " Staff Id already exists...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    $this->load->view('staffprofile');
        }
        else
            {
        $this->Staff_model->addstaff($staff);

          $message = $firstname.$lastname. " added  sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
      $this->load->view('adminhome');
        
                }
        
		}

    }
    
    public function updateprofile() {
        
          $this->load->library('form_validation');
                
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		
                $this->form_validation->set_rules('firstname', 'Firstname',  'required|min_length[2]|max_length[15]|alpha|');
         $this->form_validation->set_rules('lastname', 'Lastname',  'required|min_length[2]|max_length[15]|alpha|');
                $this->form_validation->set_rules('username', 'Username',  'required|min_length[5]|max_length[15]|alpha_numeric|');
                $this->form_validation->set_rules('role', 'Role',  'required|alpha|');
                $this->form_validation->set_rules('sex', 'Gender',  'required|alpha|');
                $this->form_validation->set_rules('location', 'Location',  'required|alpha|');
               
		$this->form_validation->set_rules('email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[50]');

                
                if ($this->form_validation->run() == FALSE)
		{
                              $data['id'] = $this->input->post('id');
		
        if ($this->session->userdata('role') == 'staff') {
 $this->load->view('staffpop', $data);}

        if ($this->session->userdata('role') == 'admin') {
          $this->load->view('staffprofilepop', $data);
        }
		}
		else
		{
        
        $id = $this->input->post('id');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
         $username = $this->input->post('username');
        $email=$this->input->post('email');
        $sex = $this->input->post('sex');
         $role = $this->input->post('role');
        $birth = $this->input->post('address');
        $mobile = $this->input->post('mobile');
        $location = $this->input->post('location');

        
       
        $staff = array(
            
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username'=>$username,
            'emailid'=>$email,
            'role'=>$role,
            'sex' => $sex,
            'address' => $birth,
            'mobile' => $mobile,
            'location' => $location,
        );
        
        $this->Staff_model->updatestaff($staff,$id);

          $message = $firstname.$lastname. " Updated sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
      $this->load->view('adminhome');
                }
    }
     public function update_password() {
          $this->load->library('form_validation');
                
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
             
                
                
             $this->form_validation->set_rules('password', 'password',  'required|min_length[4]|max_length[15]|');
       
             if ($this->form_validation->run() == FALSE)
                {
                  $data['id'] = $this->input->post('idid');
                   $message = "  Password should have length 4-15 characters...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
                   $this->load->view('staffprofilepop', $data);
                }
                else{
             
             if (empty($_POST["password"])){
             $id1 = $this->input->post('idid');
        $data['id']=$id1;
        $data['error'] = false;
        $data['message'] = 'Password succesfuly changed';
        $data['active'] = 'password';
        $message = "  Password field cannot be empty...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('staffprofilepop', $data);
    }
    
    else{
        $id1 = $this->input->post('idid');
        $data['id']=$id1;
        $password = $this->input->post('password');
        $this->Staff_model->update_password($id1, $password);
        $data['error'] = false;
        $data['message'] = 'Password succesfuly changed';
        $data['active'] = 'password1';
         $message = "  Password Updated sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view('staffprofilepop', $data);
     }}}

 public function staff_profile($id) {
        $data['id'] = $id;
       
        $this->load->view('staffprofilepop', $data);
    }
     public function delete_staff($id) {
       
         
         if($this->session->userdata('id')==$id){
          $this->Staff_model->delete($id);  
          $data['error']=false;
            $this->load->view('login',$data);    
         }
         else{
         
        $this->Staff_model->delete($id);
         $message = " Deleted sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
      $this->load->view('adminhome');
        
     }}


       }