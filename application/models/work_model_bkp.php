<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class work_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
public function updatebvpurgingrecord($inspecrecord1,$wkid) {
        $this->db->set($inspecrecord1);
        $this->db->where('WO_ID', $wkid);
$this->db->update('brominevesselpurgingrecord', $inspecrecord1); 
       
    }
   public function updateimage($rec,$wkid) {
        $this->db->set($rec);
         $this->db->where('workorderid', $wkid);
        $this->db->update('workflowdetails', $rec);
        
       return true;
    } 
    
      public function insertwkidbobu14t($wkid) {
        $this->db->insert('isoframeinspectionrecord',array('WO_ID'=>$wkid));
         $this->db->insert('isocontainerinspectionrecord',array('WO_ID'=>$wkid));
       $this->db->insert('equipmentreleasecertificate',array('WO_ID'=>$wkid));
        $this->db->insert('isocontainerdimensionrecord',array('WO_ID'=>$wkid));
         $this->db->insert('isoframeinspectionrecordpage2',array('WO_ID'=>$wkid));
         $this->db->insert('isocontainer',array('WO_ID'=>$wkid));
         $this->db->insert('brominevesselpurgingrecord',array('WO_ID'=>$wkid));
    }
    public function updateisocontainerdimension($frameinspec,$wkid) {
        $this->db->set($frameinspec);
          $this->db->where('WO_ID', $wkid);
$this->db->update('isocontainerdimensionrecord ', $frameinspec); 
    
    }
    
    public function updateframeinspecpage1($frameinspec,$wkid) {
        $this->db->set($frameinspec);
          $this->db->where('WO_ID', $wkid);
$this->db->update('isoframeinspectionrecord', $frameinspec); 
    
    }
    public function update_frameinspectionpage2($frameinspec,$wkid) {
        $this->db->set($frameinspec);
          $this->db->where('WO_ID', $wkid);
$this->db->update('isoframeinspectionrecordpage2', $frameinspec); 
    
    }
     public function update_section5($frameinspec,$wkid) {
        $this->db->set($frameinspec);
          $this->db->where('WO_ID', $wkid);
$this->db->update('isocontainer', $frameinspec); 
    
    }
    public function updatecontainerinspecpage1($cinspec,$wkid) {
        $this->db->set($cinspec);
          $this->db->where('WO_ID', $wkid);
$this->db->update('isocontainerinspectionrecord', $cinspec); 
    
    }
    
  //  public function updateframeinspecpage1($bvpurging) {
     //   $this->db->set($bvpurging);
       // $this->db->insert('isoframeinspectionrecord');
   // }
    
    
    
    
    
    
    
    
    
    
    public function updateerrecord($errecord1,$wkid) {
        $this->db->set($errecord1);
        $this->db->where('WO_ID', $wkid);
        $this->db->update('equipmentreleasecertificate', $errecord1);
      
    }
    
    public function maxwkid()
   {

$row = $this->db->query('SELECT MAX(workorderid) AS `maxid` FROM `workflowdetails`')->row();
if ($row) {
    $maxid = $row->maxid; 
}
   return $maxid; 
    
    
}



 public function get_by_equipmentid($key){
 
   // $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainers', array('TECHNICAL_IDENTIFICATION_NUMBER' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
    public function get_by_techid($key){
 
   // $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainers', array('TECHNICAL_IDENTIFICATION_NUMBER' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
 public function get_wkflowbytechid($key){
 
   // $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('workflowdetails', array('equipmentid' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    else{
    return false;
    }
         
    }
     public function get_by_slotnum($id) {
       $row= $this->db->get_where('slotstatus', array('slotnumber' => $id))->row();
        return $row;
    }






 public function updateslot($wk,$s) {
        $this->db->set($wk);
          $this->db->where('slotnumber', $s);
$this->db->update('slotstatus', $wk); 
    
    }













 public function geteqid($wkid)
   {

$row= $this->db->get_where('workflowdetails', array('workorderid' => $wkid))->row();
        return $row;
    
    
}
public function getfromonrepair($wkid)
   {

$row= $this->db->get_where('onrepair', array('workorderid' => $wkid))->row();
        return $row;
    
    
}

public function wkidupdate($wkflow)
  {
       
   $this->db->set($wkflow);
     
$this->db->insert('workflowdetails'); 
    }
    public function get_allwkflow() {
        $isocontainer = $this->db->order_by('workorderid')
                ->get('workflowdetails')
                ->result_array();
        return $isocontainer;
    }
     public function get_allonrepair() {
        $isocontainer = $this->db->order_by('workorderid')
                ->get('onrepair')
                ->result_array();
        return $isocontainer;


     }
      
    
    
    public function slotsavailable()
  {
      
     $key="0";
    $this->db->order_by("slotnumber");
  
    $query = $this->db->get_where('slotstatus', array('status' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return $key;
     }
      public function slotsfilled()
  {
      
     $key="1";
    $this->db->order_by("slotnumber");
  
    $query = $this->db->get_where('slotstatus', array('status' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
     }
     
     public function get_by_wkid($wid) {
        $row= $this->db->get_where('isoframeinspectionrecord', array('WO_ID' => $wid))->row();
        return $row;
    }
      public function get_by_vesselid($id) {
       $row= $this->db->get_where('isocontainerinspectionrecord', array('WO_ID' => $id))->row();
        return $row;
    }
    public function get_by_isodimen($id) {
       $row= $this->db->get_where('isocontainerdimensionrecord', array('WO_ID' => $id))->row();
        return $row;
    }
    public function get_by_sec4($id) {
       $row= $this->db->get_where('isoframeinspectionrecordpage2', array('WO_ID' => $id))->row();
        return $row;
    }
     public function get_by_sec5($id) {
       $row= $this->db->get_where('isocontainer', array('WO_ID' => $id))->row();
        return $row;
    }
    public function get_by_bvpurging($id) {
       $row= $this->db->get_where('brominevesselpurgingrecord', array('WO_ID' => $id))->row();
        return $row;
    }
    
    public function get_by_ercertificate($wkkid) {
       $row= $this->db->get_where('equipmentreleasecertificate', array('WO_ID' => $wkkid))->row();
        return $row;
    }
     public function get_by_slotnumber($sid) {
        $row= $this->db->get_where('slotstatus', array('slotnumber' => $sid))->row();
        return $row;
    }
    public function get_by_colorstatus($wid) {
        $row= $this->db->get_where('colorstatus', array('workorderid' => $wid))->row();
        return $row;
    }
     
     
    public function assignslotandwk($slot,$eqid,$wkid,$sta,$size,$ld)
  {
      
   $data = array(
        'status' => $sta,
       'equipmentid'=>$eqid,
       'workorderid'=>$wkid,
       'containersize'=>$size,
       'manufacturer'=>$ld,
    );
$this->db->where('slotnumber', $slot);
$this->db->update('slotstatus', $data);
}
public function updatestatuswkflow($wkid)
  {
      
   $data = array(
        'Status' => 'Onrepair',
       
    );
$this->db->where('workorderid', $wkid);
$this->db->update('workflowdetails', $data);
}
public function updatestatuswkflow1($wkid)
  {
      
   $data = array(
        'Status' => 'Inprogress',
       
    );
$this->db->where('workorderid', $wkid);
$this->db->update('workflowdetails', $data);
}
public function updatestatuswkflow2($wkid,$dat)
  {
      
   $data = array(
       'checkout'=>$dat,
        'Status' => 'closed',
       
    );
$this->db->where('workorderid', $wkid);
$this->db->update('workflowdetails', $data);
}


 public function assigncolorstatus($wkid)
  {
      
   $data = array(
        
       'workorderid'=>$wkid,
       'containerdimension'=>'greenyellow',
       'containerinspec1'=>'greenyellow',
       'containerinspec2'=>'greenyellow',
       'inspecframe1'=>'greenyellow',
       'inspecframe2'=>'greenyellow',
       'bupurging'=>'greenyellow',
       'ercertificate'=>'greenyellow',
       
    );
   
$this->db->set($data);
     
$this->db->insert('colorstatus'); 
}
public function assigncolorframeinspec($wkid,$color)
  {
      
   $data = array(
        
       
       
       'inspecframe1'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}

public function assigncolorcontainerinspec($wkid,$color)
  {
      
   $data = array(
        
       
       
       'containerinspec1'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}


public function assigncolorercertificate($wkid,$color)
  {
      
   $data = array(
        
       
       
       'ercertificate'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}
public function assigncolorsection1($wkid,$color)
  {
      
   $data = array(
        
       
       
       'containerdimension'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}

public function assigncolorsection4($wkid,$color)
  {
      
   $data = array(
        
       
       
       'inspecframe2'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}
public function assigncolorsection5($wkid,$color)
  {
      
   $data = array(
        
       
       
       'containerinspec2'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}
public function assigncolorsectionbvpurging($wkid,$color)
  {
      
   $data = array(
        
       
       
     'bupurging'=>$color,
       
       
    );
  
$this->db->where('workorderid', $wkid);
$this->db->update('colorstatus', $data);
}

 public function unassignonrepair($wkid)
  {
      
   $this->db->delete('onrepair', array('workorderid' => $wkid));
}

public function assignonrepair($onRepair)
{
    
       
   $this->db->set($onRepair);
     
$this->db->insert('onrepair'); 
    
}
public function wkonrepair() {
        $this->db->order_by("workorderid");
  
    $query = $this->db->get('onrepair');
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
     }
     
     


     
}