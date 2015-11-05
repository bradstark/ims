<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class isocontainer extends CI_Controller {
public $id2;
    

    public function __construct() {
        parent::__construct();

        
    }
     public function sampleformdesign() {
      $this->load->view('sampledesign');

        
    }
    
    public function isoinspectionrecord()
    {
        if(isset($_POST['finish'])){
          $color='red';  
        }
        else
        {
            $color='yellow';
        }
        
        $wkid=$this->input->post('wid3');       
        $slid=$this->input->post('sl1id3'); 
         $coid=$this->input->post('co1id3'); 
         $eid=$this->input->post('eq1id3'); 
         $mid=$this->input->post('man3'); 
      $hcells1=$this->input->post('hcells');
      $vesselid1=$this->input->post('vesselid');
      $fill1=$this->input->post('fill');
      $vent1=$this->input->post('vent');
      $air1=$this->input->post('air/n2');
      $fusible1=$this->input->post('fusible');
      $batchno1=$this->input->post('batchno');
      $repairs1=  $_POST['repairs'];
    // $repairs1= $this->input->post('repairs');
      $clean1=$this->input->post('clean');
      $date1=$this->input->post('datepicker');
      
      $coninspec = array(
            'Technical_identification_number' => $vesselid1,
           // 'WO_ID' => $$wkid,
            'fill' => $fill1,
            'vent' => $vent1,
            'air' => $air1,
            'fusible' => $fusible1,
            'batchno' => $batchno1,
            'repairs' => $repairs1,
            'clean' => $clean1,
            'date' => $date1,
           'hcells'=>$hcells1
            
        );
      
      
       $this->work_model->updatecontainerinspecpage1($coninspec,$wkid);
        $this->work_model->assigncolorcontainerinspec($wkid,$color);
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid
         );
        if($coid=='18.5 MT'){
     

 $this->load->view('aocu',$data);
 }
 else if($coid=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($coid=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($coid=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
 else if($coid=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }
   else if($coid=='23 MT'){

 $this->load->view('bobu23t',$data);
 }   
 else if($coid=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($coid=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
      
        
        
       //  $this->iso_model->add_sample($bobu);
            //  $this->load->view('Section3');     
                 
                 
             
    }
    
    
   public function viewsection3()
{
    
    $this->load->view('view_section3');
    
} 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
public function AddContainer()
{
    $isocontainer2 = array(
            'ContainerId' =>"",
            'Capacity' => "",
            'DriverId' => "",
            'LoadStatus' => "",
            'profile'=> "",
            
        );
    $this->load->view('add_iso',$isocontainer2);
} 
public function SearchContainer(){
    
    
    $this->load->view('Search_iso'); 
    
}
public function searchbycid(){
    
    
    $this->load->view('searchbyid'); 
    
}
public function searchbycapacity(){
    
    
    $this->load->view('searchby cap'); 
    
}
public function searchbyloadstatus(){
    
    
    $this->load->view('searchbyloadstatus'); 
    
}

public function FindContainer(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('find',$data);
    
}
public function Findsec3(){
    
    $data['key'] = $this->input->post('Sec3');
    $data1['key1']=$this->input->post('hcells');
  
    $this->load->view('sec3',$data,$data1);
    
}
public function findload(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('findload',$data);
}
public function Findcapacity(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('findcap',$data);
}
public function DeleteContainer()
{
    

 $this->load->view('delete_iso');

   
}   
public function EditContainer()
{
    

 $this->load->view('edit_iso');

   
}  
public function ChangeContainer() {
     if (empty($_POST["checkbox"]) ){
        $message = "Please check one box";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('edit_iso');
    }
    else{
         if(isset($_POST['edit'])){
        
  
for($i=0;$i<count($_POST['checkbox']);$i++){
$data['id']=$_POST['checkbox'][$i];
 $id2=$data['id'];




}
$this->load->view('edit1',$data);
}
// if successful redirect to delete_multiple.php

    
}}




public function RemoveContainer()
        {
     if (empty($_POST["checkbox"]) ){
        $message = "Please check one box";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('delete_iso');
    }
    else{
if(isset($_POST['delete'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id=$_POST['checkbox'][$i];


  if( $this->iso_model->delete($del_id)){
           
             $message = " Iso Container ".$del_id." deleted sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
       }


}}
// if successful redirect to delete_multiple.php

 $this->load->view('delete_iso');

}
    
        }
 public function update_iso_addition() {
     
     $this->load->library('form_validation');
                
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('eqid', 'Equipment Id',  'required|min_length[3]|alpha_dash|');
                $this->form_validation->set_rules('size', 'Size or Dimension',  'required|min_length[2]|');
                $this->form_validation->set_rules('man', 'Manufacturer',  'required|min_length[3]|alpha|');
                $this->form_validation->set_rules('techid', 'Technical Identification Number',  'required|min_length[5]|alpha_dash|');
                $this->form_validation->set_rules('mannum', 'manufacturer',  'required|min_length[3]|alpha_dash|');
       

		$this->form_validation->set_rules('date', 'Date', 'required|min_length[4]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add_iso');
		}
		else
		{
     
     
     
        if (empty($_POST["eqid"]) || empty($_POST["size"]) ){
        $message = "Technical identification number and size required...Please enter";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('add_iso');
    }
    else{
        $eqid = $this->input->post('eqid');
        $capacity = $this->input->post('size');
        $manu = $this->input->post('man');
        $manser = $this->input->post('mannum');
        $techid = $this->input->post('techid');
        $date = $this->input->post('date');
        

    
        //update patient
        $isocontainer1 = array(
            'EQUIPMENT_NUMBER' => $eqid,
            'SIZEORDIMENSION' => $capacity,
            'MANUFACTURER_OF_ASSET' => $manu,
            'MANUFACTURER_SERIAL_NUMBER' => $manser,
            'DATE_VALID_FROM'=>$date,
            'TECHNICAL_IDENTIFICATION_NUMBER'=>$techid
            
        );
       if( $this->iso_model->update($isocontainer1)){
           
             $message = " Iso Container ".$techid." added sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
       }
     $this->load->view('add_iso'); 
 }}}
 public function real_update_iso_addition() {
     
     
     
     
     
     
     
     
     
     
     
     
          $this->load->library('form_validation');
                
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		
                $this->form_validation->set_rules('eqid', 'Equipment Id',  'required|min_length[10]|max_length[10]|alpha_numeric|');
         $this->form_validation->set_rules('size', 'size',  'required|min_length[4]|max_length[15]|');
                $this->form_validation->set_rules('man', 'manufacturer',  'required|min_length[2]|max_length[30]');
                $this->form_validation->set_rules('techid', 'technical identification number',  'required|min_length[12]|max_length[12]|alpha_dash|');
                $this->form_validation->set_rules('mannum', 'manufacturer serial number', 'required|min_length[2]|max_length[30]|');
               
	
		$this->form_validation->set_rules('date', 'date', 'required|min_length[4]|max_length[19]');
		

                
                if ($this->form_validation->run() == FALSE)
		{
                              $data['id'] = $this->input->post('techid');
		
       
 $this->load->view('edit1', $data);}

       
		
    else{
        $eqid = $this->input->post('eqid');
        $capacity = $this->input->post('size');
        $manu = $this->input->post('man');
        $manser = $this->input->post('mannum');
        $techid = $this->input->post('techid');
        $date = $this->input->post('date');
        $data['id']=$eqid;

    
        //update patient
        $isocontainer1 = array(
            'EQUIPMENT_NUMBER' => $eqid,
            'SIZEORDIMENSION' => $capacity,
            'MANUFACTURER_OF_ASSET' => $manu,
            'MANUFACTURER_SERIAL_NUMBER' => $manser,
            'DATE_VALID_FROM'=>$date,
            'TECHNICAL_IDENTIFICATION_NUMBER'=>$techid
            
        );
         if(  $this->iso_model->realupdate($isocontainer1,$techid)){
           
             $message = " Iso Container ".$eqid." updated sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
       }
       
        $this->load->view('edit_iso');

    }
}
public function ViewContainer(){
    $this->load->view('view_iso');
    
}
public function profile($id) {
        $data['id'] = $id;
        
        $this->load->view('iso_profile', $data);
    }
 
 
 public function isoinspectionform1(){
$wkid = $this->input->post('wkoid');
    
    $data =array(
        'wid'=>$wkid,
    );
    $this->load->view('Section1',$data); 
    
}
 public function isoinspectionform2(){
    
    
    $this->load->view('Section2'); 
    
}
public function whole(){
    
    
    $this->load->view('bobu'); 
    
}
 public function isoinspectionform3(){
    
    
    $this->load->view('Section3'); 
    
}
public function isoinspectionform4(){
    
    
    $this->load->view('Section4'); 
    
}
public function isoinspectionform5(){
    
    
    $this->load->view('Section5'); 
    
}
public function isoinspectionform6(){
    
    
    $this->load->view('Section6'); 
    
}
public function isoinspectionform7(){
    
    
    $this->load->view('Section7'); 
    
}
 }