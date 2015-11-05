<?php

//if (!defined('BASEPATH'))
//    exit('No direct script access allowed');

class Staff_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $users = $this->db->order_by('id')
                ->get('users')
                ->result_array();

        return $users;
    }

    public function get_id($username) {
        //$row = $this->db->get_where('users', array('username' => $username))->row();
        $highestd = $this->db->select('max(id)')
                ->get('users')
                ->result_array();
        
        
        return $highestid->id;
    }
    public function get_maxid()
    {
        $maxid = $this->db->select('max(id)')
                ->get('users')
                ->result_array();
        
        
        return $maxid->id;
    }
    
    public function get_username($id) {
        $row = $this->db->get_where('users', array('id' => $id))->row();
        return $row->username;
    }

    public function get_by_username($username) {
        $row = $this->db->get_where('users', array('username' => $username))->row();
        return $row;
    }

    public function get_by_id($id) {
        $row = $this->db->get_where('users', array('id' => $id))->row();
        return $row;
    }

    public function get_role($username) {
        $row = $this->db->get_where('users', array('username' => $username))->row();
        return $row->role;
    }

    public function get_usernames() {
        $users = $this->db->select('username')
                ->order_by('username')
                ->get('users')
                ->result_array();
        return $users;
    }

    public function get_all_users() {
        $users = $this->db->select('username, role')
                ->order_by('role')
                ->get('users')
                ->result_array();
        return $users;
    }
  public function id_exists($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return ($query->num_rows >= 1) ? TRUE : FALSE;
    }
    public function add($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username));

        if ($query->num_rows == 1) {
            return FALSE;
        }

        $this->db->insert('users', array('username' => $username, 'password' => md5($password)));

        return TRUE;
    }

    public function add_default() {
        $query = $this->db->get_where('users', array('username' => 'username'));

        if ($query->num_rows == 1) {
            return FALSE;
        }

        $this->db->insert('users', array('username' => 'username', 'password' => md5('password'), 'firstname' => 'firstname', 'lastname' => 'lastname', 'email' => 'email', 'role' => 'role'));

        return TRUE;
    }

    public function delete($id) {
        
        $this->db->delete('users', array('id' => $id));
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
    public function updatestaff( $data,$id) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
    public function addstaff($arr) {
        $this->db->set($arr);
        $this->db->insert('users', $arr);
    }

    public function check_password($id, $password) {
        $check = $this->db->get_where('users', array('id' => $id, 'password' => md5($password)));
        return ($check->num_rows == 1) ? TRUE : FALSE;
    }

    public function update_password($id, $password) {
        return $this->db->update('users', array('password' => md5($password)), array('id' => $id));
    }

    public function exists($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => md5($password)));
        echo 'md5' . md5($password);
        return ($query->num_rows == 1) ? TRUE : FALSE;
    }

    public function username_exists($username) {
        $query = $this->db->get_where('users', array('username' => $username));
        return ($query->num_rows >= 1) ? TRUE : FALSE;
    }

    public function other_username_exists($username, $id) {
        $query = $this->db->get_where('users', array('username' => $username));
        if ($query->num_rows > 0)
            $other_id = $query->row()->id;
        else $other_id = 0;
        return ($query->num_rows >= 1 && $id != $other_id) ? TRUE : FALSE;
    }

}
