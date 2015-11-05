<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'hai';
$this->db->delete('Staff', array('StaffId' => $id));
$this->load->view('admin_staff_list');

?>