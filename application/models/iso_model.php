<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class iso_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $isocontainer = $this->db->order_by('TECHNICAL_IDENTIFICATION_NUMBER')
                ->get('isocontainers')
                ->result_array();
        return $isocontainer;
    }
    public function myget_all(){
        
        
    }
    public function get_by_capacity($key){
 
    $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainer', array('Capacity' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
     public function get_by_loadstatus($key){
 
    $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainer', array('LoadStatus' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
    

    public function get_by_id($id) {
        $row = $this->db->get_where('isocontainers', array('TECHNICAL_IDENTIFICATION_NUMBER' => $id))->row();
        return $row;
    }
    
  
    

    public function get_firstname($id) {
        $row = $this->db->get_where('patients', array('id' => $id))->row();
        return $row->firstname;
    }

    public function get_lastname($id) {
        $row = $this->db->get_where('patients', array('id' => $id))->row();
        return $row->lastname;
    }

    public function add_default() {
        $this->db->insert('isocontainer', array('ContainerId' => '', 'Capacity' => '', 'DriverId' => '', 'LoadStatus' => '01-01-2013'));
        return $this->db->insert_id();
        
    }
     public function add_sample($bobu1) {
      //  $this->db->insert('bobu14t', array('vesselid' => $btn_val, 'manway' => $btn_val, 'man' => $btn_val));
        //return $this->db->insert_id();
        $this->db->set($bobu1);
        $this->db->insert('isocontainerinspectionrecord');
    }

    public function delete($del_id) {
        $this->db->delete('isocontainers', array('TECHNICAL_IDENTIFICATION_NUMBER' => $del_id));
        return true;
        
    }

    public function update($isocontainer1) {
        $this->db->set($isocontainer1);
        $this->db->insert('isocontainers');
        return true;
    }
    
    public function realupdate($isocontainer1,$id2)
               
                    
{
        
        /* @var $id2 type */
         $this->db->set($isocontainer1);
        $this->db->where('TECHNICAL_IDENTIFICATION_NUMBER', $id2);
$this->db->update('isocontainers', $isocontainer1); 
return true;
    }
   

}
