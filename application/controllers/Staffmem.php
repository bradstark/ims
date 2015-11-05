<?php

class Staffmem extends CI_Controller {

    public function __construct() {
        parent::__construct();
              //$this->load->model('Staff_model');
//        if (!$this->is_logged_in()) {
//            redirect('login');
//        }
    }

    
    public function index() {
        
        
//        $data['error'] = false;
//        $data['active'] = 'AddStaff';
//        $data['username']='rajesh';
//        $data['id']='1234';

        $this->load->view('admin_staff_list');
           //echo "This is my index function";
//        if ($this->session->userdata('role') == 'admin') {
//            $this->load->view('admin_home');
//        }
//
//        if ($this->session->userdata('role') == 'staff') {
//            $this->load->view('staff_home');
//        }
    }
    public function delete($id)
    {
        $this->db->delete('staff', array('StaffId' => $id));
        $this->load->view('admin_staff_list');
    }
    
    public function profile($id) {
        $data['id'] = $id;
        $data['error'] = false;
        $data['active'] = 'profile';
        $this->load->view('Admin_Staff_profile1', $data);
    }

    public function add_staff() {

//        $default_exists = $this->Staff_model->username_exists('staffid');
//        if (!$default_exists)
//            $this->Staff_model->add_default();
        
        //$maxid = $this->db->select('max(staffid)')
                //->get('users')
                //->result_array();
        
//        $data['id'] = 1234;//($this->Staff_model->get_maxid())+1;
//        $data['error'] = false;
//        $data['active'] = 'profile';
        $this->load->view('Admin_Staff_profile1');
    }
    public function update_user_profile() {
        $id = $this->input->post('id');
        //$username = $this->input->post('username');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $role = $this->input->post('role');

        $data['error'] = false;
//        $username_exists = $this->Staff_model->other_username_exists($username, $id);
//        if ($username_exists) {
//            $data['error'] = true;
//            $data['error_message'] = $data['error_message'] . 'Username already exists! ';
//        } else {
            $data['message'] = 'User profile succesfuly updated.';
            //update user
            $user = array(
                'Staffid' => $id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'role' => $role
            );
            $this->db->where('Staffid', $id);
            $this->db->update('Staff', $data);
        
            //$this->Staff_model->update($id, $user);
            if ($id == $this->session->userdata('id')) {
                $dat['username'] = $username;
                $dat['role'] = $role;
                $this->session->set_userdata($dat);
            
            } 
        $data['id'] = $id;
        $data['active'] = 'profile';
        $this->load->view('admin_user_profile', $data);
    }
         public function AddStaff() {
        $id = $this->input->post('id');
        //$username = $this->input->post('username');
        $firstname = $this->input->post( 'firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $mobileno=$this->input->post('mobileno');
        $staff = array(
                'Staffid' => $id,
                'FirstName' => $firstname,
                'LastName' => $lastname,
                'Email' => $email,
                'Role' => $role,
                'MobileNo' =>$mobileno
            );
        $this->db->insert('staff', $staff);
        $this->load->view('Admin_Staff_profile1');
}
public function UpdateStaff() {
        $id = $this->input->post('id');
        //$username = $this->input->post('username');
        $firstname = $this->input->post( 'firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $mobileno=$this->input->post('mobileno');
        $staff = array(
                'Staffid' => $id,
                'FirstName' => $firstname,
                'LastName' => $lastname,
                'Email' => $email,
                'Role' => $role,
                'MobileNo' =>$mobileno
            );
        $this->db->where('StaffId', $id);
        $this->db->update('staff', $staff);
        
        $data['id']=$id;
        $data['confirm']='yes';
$this->load->view('updatestaff',$data);
}
public function StaffProfile($id){
    $data['id'] = $id;
    //$row = $this->db->get_where('staff', array('staffid' => $id))->row();
    //$this->load->view('Admin_Staff_profile1');
    $data['confirm']='yes';
    $this->load->view('updatestaff', $data);
    
}
}

