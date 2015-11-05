<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class workflow extends CI_Controller {

    

    public function __construct() {
        parent::__construct();
        
        
    }
    public function bar() {
       $this->load->view('includes/staff_navbar2');
        
        
    }
     public function viewcertificate($workorderid) {
       
     $data['id']=$workorderid;
     $data['path']='http://192.168.2.4/ims/image/matter.jpg';
     
        $this->load->view('certificate',$data);
         //$this->load->view('Section3');
    }
    public function printform($workorderid) {
       
     //$data['id']=$workorderid;
   //  $data['path']='http://192.168.2.4/ims/image/matter.jpg';
     $row9= $this->work_model->geteqid($workorderid);
     $equid=$row9->equipmentid;
     $size=$row9->containersize;
     $wkid=$workorderid;
     $slid=$row9->slotnumber;
     $manu=$row9->manufacturer;
     $data=array(
             'workorderid'=>$wkid,
         
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
            'containersize'=>$size,
             'manufacturer'=>$manu,
         );
        if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('printaocu18.5t',$data);}
else{
$this->load->view('printglbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('printbobu14t',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('printbobu18t',$data);
 } 
 else if($size=='17.4 MT'){

 $this->load->view('printbobu17.4t',$data);
 }
 else if($size=='15 MT'){

 $this->load->view('printcgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('printbobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('printglbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('printglbu17.5t',$data);
 }
             
        }
         //$this->load->view('Section3');
    
    public function filesample($workorderid) {
    // echo  $data['eq'] = $this->input->post('wid');
       // echo $_POST['workorderid'];
   // echo $workorderid;
    $data['id']=$workorderid;
         $equid1 = $this->input->post('wiid');
        
      //  echo'hi';
        $this->load->view('file',$data);
        
        
    }
    public function upload() {
       
 if(isset($_POST['Upload'])){

 $wkid = $this->input->post('id');
 $image_name= $_FILES['image']['name'];  
  $image_size= $_FILES['image']['size'];  
   $image_type=$_FILES['image']['type'];  
 $tmp_name=$_FILES['image']['tmp_name'];  
	    function GetImageExtension($imagetype)
	     {
	       if(empty($imagetype)) return false;
	       switch($imagetype)
	       {
	           
                   case 'application/pdf': return '.pdf';
                                                                
	           default: return false;
	       }
	     }
             $ext= GetImageExtension($image_type);
             //echo $ext;
             if($ext ==false ){
                    $message = "Certificate is not in PDF format....Please upload again..!";
    echo "<script type='text/javascript'>alert('$message.$ext');</script>";
    echo "<script type='text/javascript'>window.close();</script>";
  
             }
             else{
	    $imagename=date("d-m-Y")."-".time().$ext;
$target_path = "pic/".$image_name;
$finalpath= "/ims/$target_path";

if(move_uploaded_file($tmp_name, $target_path )) {
	 	
                   $imageinfo = array(
           // 'imaged' => $Containerid,
                     //  'workorderid'=>$wkid,
            'path' => $finalpath,
            'imagename'=>$image_name,
           
            
        );
                  // echo $finalpath;
                   $row=$this->work_model->geteqid($wkid);
                 //  $temp=$row->path;
                   $tempimgname=$row->imagename;
                 //  echo $tempimgname;
                   if($tempimgname=='no'){
                   unlink("pic/".$tempimgname);}
                   
                   
                 if( $this->work_model->updateimage($imageinfo,$wkid)){
                  $message = " certificate uploaded sucessfully...!";
    echo "<script type='text/javascript'>alert('$message');</script>";
                 }
                else{echo'gone';}
                 // unlink("image/".$image_name);
	}else{
	 $message = " Error $ext While uploading..Please choose file to upload!";
    echo "<script type='text/javascript'>alert('$message');</script>";
	   exit("Please close this window and click on upload certificate to upload...! ");
	} 
     echo "<script type='text/javascript'> window.close();</script>";
 }}
    }
   public function update_section1(){
       
           $color=$this->input->post('redcolor');  
       $wkid=$this->input->post('wid1');       
        $slid=$this->input->post('sl1id1'); 
         $coid=$this->input->post('co1id1'); 
         $eid=$this->input->post('eq1id1'); 
         $mid=$this->input->post('man11'); 
            $Dimrec_Technical_id_number=$this->input->post('eqid');
            //$Dimrec_WO_ID=$this->input->post('');
            $Dimrec_Actual_Initial_L=$this->input->post('ac1');
            $Dimrec_Actual_Initial_S=$this->input->post('ac2');
            $Dimrec_Actual_Initial_W=$this->input->post('ac3');
            $Dimrec_Actual_Initial_P=$this->input->post('ac4');
            $Dimrec_Actual_Initial_H=$this->input->post('ac5');
            $Dimrec_Actual_Initial_D1=$this->input->post('ac6');
            $Dimrec_Actual_Initial_D2=$this->input->post('ac7');
            $Dimrec_Actual_Initial_K1=$this->input->post('ac8');
            $Dimrec_Actual_Initial_D3=$this->input->post('ac9');
            $Dimrec_Actual_Initial_D4=$this->input->post('ac10');
            $Dimrec_Actual_Initial_K2=$this->input->post('ac11');
            $Dimrec_Actual_Initial_D5=$this->input->post('ac12');
            $Dimrec_Actual_Initial_D6=$this->input->post('ac13');
            $Dimrec_Actual_Initial_K3=$this->input->post('ac14');
                    $Dimrec_Actual_Final_L=$this->input->post('af1');
                    $Dimrec_Actual_Final_S=$this->input->post('af2');
                    $Dimrec_Actual_Final_W=$this->input->post('af3');
                    $Dimrec_Actual_Final_P=$this->input->post('af4');
                    $Dimrec_Actual_Final_H=$this->input->post('af5');
                    $Dimrec_Actual_Final_D1=$this->input->post('af6');
                    $Dimrec_Actual_Final_D2=$this->input->post('af7');
                    $Dimrec_Actual_Final_K1=$this->input->post('af8');
                    $Dimrec_Actual_Final_D3=$this->input->post('af9');
                    $Dimrec_Actual_Final_D4=$this->input->post('af10');
                    $Dimrec_Actual_Final_K2=$this->input->post('af11');
                    $Dimrec_Actual_Final_D5=$this->input->post('af12');
                    $Dimrec_Actual_Final_D6=$this->input->post('af13');
                    $Dimrec_Actual_Final_K3=$this->input->post('af14');
           $Dimrec_Tecnician=$this->input->post('tech');
           $Dimrec_Date=$this->input->post('date2');
                    
                    $DimensionRec = array ('Technicalidentificationnumber'=>$Dimrec_Technical_id_number,
           
            'Actual_Initial_L'=>$Dimrec_Actual_Initial_L,
            'Actual_Initial_S'=>$Dimrec_Actual_Initial_S,
            'Actual_Initial_W'=>$Dimrec_Actual_Initial_W,
            'Actual_Initial_P'=>$Dimrec_Actual_Initial_P,
            'Actual_Initial_H'=>$Dimrec_Actual_Initial_H,
            'Actual_Initial_D1'=>$Dimrec_Actual_Initial_D1,
            'Actual_Initial_D2'=>$Dimrec_Actual_Initial_D2,
            'Actual_Initial_K1'=>$Dimrec_Actual_Initial_K1,
            'Actual_Initial_D3'=>$Dimrec_Actual_Initial_D3,
            'Actual_Initial_D4'=>$Dimrec_Actual_Initial_D4,
            'Actual_Initial_K2'=>$Dimrec_Actual_Initial_K2,
            'Actual_Initial_D5'=>$Dimrec_Actual_Initial_D5,
            'Actual_Initial_D6'=>$Dimrec_Actual_Initial_D6,
            'Actual_Initial_K3'=>$Dimrec_Actual_Initial_K3,
                    'Actual_Final_L'=>$Dimrec_Actual_Final_L,
                    'Actual_Final_S'=>$Dimrec_Actual_Final_S,
                    'Actual_Final_W'=>$Dimrec_Actual_Final_W,
                    'Actual_Final_P'=>$Dimrec_Actual_Final_P,
                    'Actual_Final_H'=>$Dimrec_Actual_Final_H,
                    'Actual_Final_D1'=>$Dimrec_Actual_Final_D1,
                    'Actual_Final_D2'=>$Dimrec_Actual_Final_D2,
                    'Actual_Final_K1'=>$Dimrec_Actual_Final_K1,
                    'Actual_Final_D3'=>$Dimrec_Actual_Final_D3,
                    'Actual_Final_D4'=>$Dimrec_Actual_Final_D4,
                    'Actual_Final_K2'=>$Dimrec_Actual_Final_K2,
                    'Actual_Final_D5'=>$Dimrec_Actual_Final_D5,
                    'Actual_Final_D6'=>$Dimrec_Actual_Final_D6,
                    'Actual_Final_K3'=>$Dimrec_Actual_Final_K3,
           'Technician'=>$Dimrec_Tecnician,
           'Date'=>$Dimrec_Date);
         $this->work_model->updateisocontainerdimension($DimensionRec,$wkid) ;
         
          $this->work_model->assigncolorsection1($wkid,$color);
          $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
              'color'=>$color,
       );
           if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
       
}
        
        
        
         public function isoinspecframerecord1()
        {
             
              $color=$this->input->post('readcolor');
        $wkid=$this->input->post('wid');       
        $slid=$this->input->post('sl1id'); 
         $coid=$this->input->post('co1id'); 
         $eid=$this->input->post('eq1id'); 
         $mid=$this->input->post('man1'); 
     $techid1=$this->input->post('techid');
      $ds1=$this->input->post('datestarted11');
        $RearLongDiagonal1 =$this->input->post('rear1');
  $RearShortDiagonal1 =$this->input->post('rear2'); 
 $RearBottomRail1 =$this->input->post('rear3'); 
  $RearCornerCasting1 =$this->input->post('rear4');
  $RearCornerPost1 =$this->input->post('rear5');
$RearCentreGusset1 =$this->input->post('rear6');
  $RearCornerGusset1=$this->input->post('rear7');
 $Reardiagnol=$this->input->post('rear1_bobu18t');
 $Rearnumberplate=$this->input->post('rearnumberplate');
 $Rearhazchemplate=$this->input->post('rearhazchemplate');
$reartoprail=$this->input->post('RearTopRail');
  $RHSFrontDiagonal1=$this->input->post('rear8'); 
  $RHSFrontSidePost1=$this->input->post('rear9');
  $RHSFrontSaddle1=$this->input->post('rear10');
  $RHSBottomRail1=$this->input->post('rear11');
  $RHSSaddleGusset1=$this->input->post('rear12');
  $RHSRearSaddle1=$this->input->post('rear13');
  $RHSRearSidePost1=$this->input->post('rear14');
  $RHSRearDiagonal1=$this->input->post('rear15');
  $RHSDiagonalGusset1=$this->input->post('rear16');
  $RHSCornerGusset1=$this->input->post('rear17');
  $RHShandrailop=$this->input->post('RHShandrailoperating');

$RHSLADDER=$this->input->post('RHSLadder');
$rhsfdt=$this->input->post('rhsfrontdiagonaltop');
$rhsfdb=$this->input->post('rhsfrontdiagonalbottom');
$rhsfdi=$this->input->post('rhsfrontdiagonalinner');
$rhsrdi=$this->input->post('rhsreardiagonalinner');
$rhsrdb=$this->input->post('rhsreardiagonalbottom');
$rhsrdt=$this->input->post('rhsreardiagonaltop');
$rhsmsr=$this->input->post('rhsmiddlesiderail');
$rhssr=$this->input->post('rhssteprail');
$RHSplatformvsup=$this->input->post('RHSplatformverticalsup');
$RHSPlatformSupport=$this->input->post('RHSPlatformSupport');
$RHSFrontBrace=$this->input->post('RHSFrontBrace');
$RHSRearBrace=$this->input->post('RHSRearBrace');


  $FrontLongDiagonal1=$this->input->post('rear18');
  $FrontShortDiagonal1=$this->input->post('rear19');
$FrontBottomRail1=$this->input->post('rear20');
  $FrontCornerCasting1=$this->input->post('rear21');
  $FrontCornerPost1=$this->input->post('rear22');
  $FrontCentreGusset1=$this->input->post('rear23');
  $FrontCornerGusset1=$this->input->post('rear24');
$frontdiagnol=$this->input->post('Front18_bobu18t');
$fnumplate=$this->input->post('frontnumberplate');
$fhazplate=$this->input->post('fronthazchemplate');
 $Fronttoprail=$this->input->post('FrontTopRail');

$LHSFrontDiagonaltop=$this->input->post('LHSFrontDiagonalTop');
$LHSFrontDiagonalbottom=$this->input->post('LHSFrontDiagonalBottom');
$LHSFrontDiagonalinner=$this->input->post('LHSFrontDiagonalInner');
$LHSrearDiagonalinner=$this->input->post('LHSRearDiagonalInner');
$LHSrearDiagonalbottom=$this->input->post('LHSRearDiagonalBottom');
$LHSmiddlesiderail=$this->input->post('LHSMiddleSideRail');
$LHSrearDiagonaltop=$this->input->post('LHSRearDiagonalTop');
$LHSladder=$this->input->post('LHSLadder');
$LHSsteprail=$this->input->post('LHSStepRail');
$lhsplatformvsup=$this->input->post('LHSplatformverticalsup');
$LHSFrontBrace=$this->input->post('LHSFrontbrace');
$LHSRearBrace=$this->input->post('LHSRearbrace');



$LHSFrontDiagonal1=$this->input->post('rear25');
$LHSFrontSidepost1=$this->input->post('rear26');
$LHSFrontSaddle1=$this->input->post('rear27');
$LHSBottomRail1=$this->input->post('rear28');
$LHSSaddleGuesset1=$this->input->post('rear29');
$LHSLadderHandrail1=$this->input->post('rear30');
$LHSRearSaddle1=$this->input->post('rear31');
$LHSRearSidepost1=$this->input->post('rear32');
$LHSRearDiagnol1=$this->input->post('rear33');
$LHSDiagnolGuesset1=$this->input->post('rear34');
$LHSCornerGuesset1=$this->input->post('rear35');
$lhsplatformsupport=$this->input->post('LHS24_bobu18t');
$lhsladder=$this->input->post('LHS30_bobu18t');
$Topplatform1=$this->input->post('rear36');
  $TopRearTopRail1=$this->input->post('rear37');
  $TopLHTopRail1=$this->input->post('rear38');
  $TopRHTopRail1=$this->input->post('rear39');
  $TopFrontTopRail1=$this->input->post('rear40');  
  $TopRemovableRail1=$this->input->post('rear41');
  $TopRemovableRailBrackets1=$this->input->post('rear42');
 $TopLHTopSideRail1=$this->input->post('TopLHTopSideRail');
  $TopRHTopSideRail1=$this->input->post('TopRHTopSideRail');
  $TOPhandrails=$this->input->post('TOPhandrails');
   $Toprollovertuberear=$this->input->post('TopRollOverTubeRear');
   $toptoprail=$this->input->post('Toptoprail');
  $topladder=$this->input->post('Topladder');
  $bottomrollovertubefront=$this->input->post('BottomRollOverTubeFront');
  $BottomBottomCrossBeam=$this->input->post('BottomBottomCrossBeam');
  
  
  
  
  

$BottomLongitudes1=$this->input->post('rear43');
  $BottomDiagonals1=$this->input->post('rear44');
  $BottomSaddleBeams1=$this->input->post('rear45');
  $BottomCentreBeam1=$this->input->post('rear46');

  $InspectedBy1=$this->input->post('rear47');

  $Datepage11=$this->input->post('rear48');

       
  $inspecrecord1=array(
      
      'Technical_identification_number'=>$techid1,
      'datestart'=>$ds1,
     'RearLongDiagonal'=>$RearLongDiagonal1,
      'RearDiagnoll'=>$Reardiagnol,
      'RHSLadder'=>$RHSLADDER,
'RearShortDiagonal'=>$RearShortDiagonal1,
'RearBottomRail'=>$RearBottomRail1,
'RearCornerCasting'=>$RearCornerCasting1,
'RearCornerPost'=>$RearCornerPost1,
'RearCentreGusset'=>$RearCentreGusset1,
'RearCornerGusset'=>$RearCornerGusset1,
  'RearNumberPlate'=> $Rearnumberplate,
      'RearHazchemPlate'=>$Rearhazchemplate,
      'RearTopRail'=>$reartoprail,
      'RHShandrailoperating'=>$RHShandrailop,
      'TOPhandrails'=>$TOPhandrails,
'RHSFrontDiagonal'=>$RHSFrontDiagonal1,
'RHSFrontSidePost'=>$RHSFrontSidePost1,
'RHSFrontSaddle'=>$RHSFrontSaddle1,
'RHSBottomRail'=>$RHSBottomRail1,
'RHSSaddleGusset'=>$RHSSaddleGusset1,
'RHSRearSaddle'=>$RHSRearSaddle1,
'RHSRearSidePost'=>$RHSRearSidePost1,
'RHSRearDiagonal' =>$RHSRearDiagonal1,
'RHSDiagonalGusset' =>$RHSDiagonalGusset1,
'RHSCornerGusset'  =>	$RHSCornerGusset1,
 'RHSplatformverticalsup'=>$RHSplatformvsup,     
   'RHSPlatformSupport'=>$RHSPlatformSupport,
'RHSFrontBrace'=>$RHSFrontBrace,
'RHSRearBrace'=>$RHSRearBrace,  
   
'rhsfrontdiagonaltop'=>$rhsfdt,
'rhsfrontdiagonalbottom'=>$rhsfdb,
'rhsfrontdiagonalinner'=>$rhsfdi,
'rhsreardiagonalinner'=>$rhsrdi,
'rhsreardiagonalbottom'=>$rhsrdb,
'rhsreardiagonaltop'=>$rhsrdt,
'rhsmiddlesiderail'=>$rhsmsr,
'rhssteprail'=>$rhssr,
      
   
      
'FrontLongDiagonal'  =>	$FrontLongDiagonal1,
'FrontShortDiagonal'  =>$FrontShortDiagonal1,
'FrontBottomRail'  =>	$FrontBottomRail1,
     'FrontDiagonal'=>$frontdiagnol,
      'frontnumberplate'=>$fnumplate,
      'fronthazchemplate'=>$fhazplate,
'FrontTopRail'=>$Fronttoprail,
'FrontCornerCasting' =>$FrontCornerCasting1,
'FrontCornerPost' =>$FrontCornerPost1,
'FrontCentreGusset' =>$FrontCentreGusset1,
'FrontCornerGusset'  =>$FrontCornerGusset1,
'LHSFrontDiagonal'  =>$LHSFrontDiagonal1,
'LHSFrontSidepost'  =>$LHSFrontSidepost1,
'LHSFrontSaddle'  =>$LHSFrontSaddle1,
'LHSBottomRail'  =>$LHSBottomRail1,
'LHSSaddleGuesset' =>$LHSSaddleGuesset1,
'LHSLadderHandrail'  =>	$LHSLadderHandrail1,
'LHSRearSaddle'  =>	$LHSRearSaddle1,
'LHSRearSidepost'  =>	$LHSRearSidepost1,
'LHSRearDiagnol'  =>	$LHSRearDiagnol1,
'LHSDiagnolGuesset'  =>	$LHSDiagnolGuesset1,
'LHSCornerGuesset'  =>	$LHSCornerGuesset1,
      'LHSPlatformSupport'=>$lhsplatformsupport,
      'LHSLadder'=>$lhsladder,
  'LHSplatformverticalsup'=>$lhsplatformvsup,    
      'LHSFrontDiagonalTop'=>$LHSFrontDiagonaltop,
'LHSFrontDiagonalBottom'=>$LHSFrontDiagonalbottom,
'LHSFrontDiagonalInner'=>$LHSFrontDiagonalinner,
'LHSRearDiagonalInner'=>$LHSrearDiagonalinner,
'LHSRearDiagonalBottom'=>$LHSrearDiagonalbottom,
'LHSMiddleSideRail'=>$LHSmiddlesiderail,
'LHSRearDiagonalTop'=>$LHSrearDiagonaltop,
'LHSLadder'=>$LHSladder,
'LHSStepRail'=>$LHSsteprail,
    'LHSFrontBrace'=>$LHSFrontBrace,
'LHSRearBrace'=>$LHSRearBrace,    
    
 'TopLHTopSideRail'=>$TopLHTopSideRail1,
  'TopRHTopSideRail'=>$TopRHTopSideRail1,
   'TopRollOverTubeRear'=>$Toprollovertuberear,
 'BottomRollOverTubeFront'=> $bottomrollovertubefront,
  'BottomBottomCrossBeam'=>$BottomBottomCrossBeam, 
      
      
      
      
'Topplatform'  =>	$Topplatform1,
'TopRearTopRail'  =>	$TopRearTopRail1,
'TopLHTopRail' =>$TopLHTopRail1,
'TopRHTopRail' =>$TopRHTopRail1,
'TopFrontTopRail'=>$TopFrontTopRail1,
'TopRemovableRail' =>$TopRemovableRail1,
'TopRemovableRailBrackets' =>$TopRemovableRailBrackets1,
      'Toptoprail'=>$toptoprail,
  'Topladder'=>$topladder,
'BottomLongitudes'  =>	$BottomLongitudes1,
'BottomDiagonals'  =>	$BottomDiagonals1,
'BottomSaddleBeams' =>	$BottomSaddleBeams1,
'BottomCentreBeam'  =>	$BottomCentreBeam1,
'InspectedBy'  =>$InspectedBy1,
'Datepage1'  =>	$Datepage11,


  


        );
       
              
         $this->work_model->updateframeinspecpage1($inspecrecord1,$wkid);
         $this->work_model->assigncolorframeinspec($wkid,$color);
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
         );
        if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
        
        }
        public function update_frameinssection4(){
            $color=$this->input->post('redcolor');
             $wkid=$this->input->post('wid9');       
        $slid=$this->input->post('sl1id9'); 
         $coid=$this->input->post('co1id9'); 
         $eid=$this->input->post('eq1id9'); 
         $mid=$this->input->post('man9'); 
       $issue1=$this->input->post('issue');
    $revision1= $this->input->post('revision');  
    $Section1FrameRepairsAsSpecifiedOnPage1Complete=$this->input->post('section1text');
    $Section1Signature= $this->input->post('section1staff');
    $section1Date=$this->input->post('datepicker111');
    $Section2ManlidCoverAssemblyRepairsRequired=$this->input->post('section2text');
    $Section2RepairsComplete=$this->input->post('displayValue44');
    $Section2Signature=$this->input->post('section2staff');
    $Section2Date=$this->input->post('datepicker2');
    $Section3OtherRepairsRequired=$this->input->post('section3text');
    $Section3RepairsComplete=$this->input->post('displayValue55');
    $Section3Signature=$this->input->post('section3staff');
    $Section3Date=$this->input->post('datepicker3');
    $Section4PaintworkandlabelsorlatteringRepairsRequired=$this->input->post('section4text1');
    $Section4RepairsComplete=$this->input->post('displayValue66');  
    $Section4Signature=$this->input->post('section4staff');
    $Section4Date=$this->input->post('datepicker4');
   $FrameFitforServiceSignature1=$this->input->post('FrameFit1');
   $FrameFitforServiceDate1=$this->input->post('FrameFit2');
  
    
    $frameinspectionrec = array('Section1FrameRepairsAsSpecifiedOnPage1Complete'=>$Section1FrameRepairsAsSpecifiedOnPage1Complete,
      'Section1Signature'=>$Section1Signature,
      'section1Date'=>$section1Date,
      'Section2ManlidCoverAssemblyRepairsRequired'=>$Section2ManlidCoverAssemblyRepairsRequired,
        'issue'=>$issue1,
      'revision'=>$revision1,
 
      'Section2RepairsComplete'=>$Section2RepairsComplete,
      'Section2Signature'=>$Section2Signature,
      'Section2Date'=>$Section2Date,
      'Section3OtherRepairsRequired'=>$Section3OtherRepairsRequired,
      'Section3RepairsComplete'=>$Section3RepairsComplete,
      'Section3Signature'=>$Section3Signature,
      'Section3Date'=>$Section3Date,
      'Section4PaintworkandlabelsorlatteringRepairsRequired'=>$Section4PaintworkandlabelsorlatteringRepairsRequired,
      'Section4RepairsComplete'=>$Section4RepairsComplete,
      'Section4Signature'=>$Section4Signature,
       'Section4Date'=>$Section4Date,
    'FrameFitforServiceSignature'=>$FrameFitforServiceSignature1,
       'FrameFitforServiceDate'=>$FrameFitforServiceDate1); 
    $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
         );
        $this->work_model->update_frameinspectionpage2($frameinspectionrec,$wkid);
         $this->work_model->assigncolorsection4($wkid,$color);
              //  ($isocontainer1);
       if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
}


public function update_section5(){
     $wkid=$this->input->post('wid8');  
     $color=$this->input->post('redcolorrr');
        $slid=$this->input->post('sl1id8'); 
         $coid=$this->input->post('co1id8'); 
         $eid=$this->input->post('eq1id8'); 
         $mid=$this->input->post('man8'); 
          $iso_container_Fillvalve=$this->input->post('FV1');
            $iso_container_FillvalveRepairNumber=$this->input->post('FV2');
            $iso_container_VentvalveRepair=$this->input->post('VV1');
            $iso_container_VentvalveRepaiNumber=$this->input->post('VV2');
            $iso_container_AirvalveRepair=$this->input->post('AV1');
            $iso_container_AirValveRepairNumber=$this->input->post('AV2');
            $iso_container_ReliefvalveRepair=$this->input->post('RV1');
            $iso_container_ReliefvalveRepairNumber=$this->input->post('RV2');
            $iso_container_BurstingDiscRepair=$this->input->post('BD1');
            $iso_container_BurstingDiscRepairNumber=$this->input->post('BD2');
            $iso_container_BurstingDiscRepair1=$this->input->post('BDH1');
            $iso_container_BurstingDiscRepairNumber1=$this->input->post('BDH2');
            $iso_container_TellTaleAssemblyGaugeRepair=$this->input->post('TT1');
            $iso_container_TellTaleAssemblyGaugeNumber=$this->input->post('TT2');
            $iso_container_NeedlevalveRepair=$this->input->post('NV1');
            $iso_container_NeedlevalveRepairNumber=$this->input->post('NV2');
            $iso_container_ValveSpacerRepair=$this->input->post('VS1');
            $iso_container_ValveSpaceRepairNumber=$this->input->post('VS2');
            $iso_container_DipPipeRepair=$this->input->post('DP1');
            $iso_container_DipPipeRepairNumber=$this->input->post('DP2');
            $iso_container_DipPipeRepair1=$this->input->post('UDP1');
            $iso_container_DipPipeRepairNumber1=$this->input->post('UDP2');
            $iso_container_SpecialStudsRepair=$this->input->post('SS1');
            $iso_container_SpecialStudsRepairNumber=$this->input->post('SS2');
            $iso_container_ManlidBoltsRepair=$this->input->post('MB1');
            $iso_container_MalidBoltRepairNumber=$this->input->post('MB2');
                  $iso_container_manlidblankRepair=$this->input->post('ML2');
            $iso_container_malidblankRepairNumber=$this->input->post('ML1');
             $iso_container_valveblankRepair=$this->input->post('VB2');
            $iso_container_valveblankRepairNumber=$this->input->post('VB1');
            
            $iso_container_RemarksRepair=$this->input->post('R1');
            $iso_container_RemarksRepairNumber=$this->input->post('R2');
            $iso_container_HydraPsig=$this->input->post('HyPsig');
            $iso_container_HydraPresecence=$this->input->post('HyPrese');
            $iso_container_HydraOf=$this->input->post('HyOf');
            $iso_container_HydraDate=$this->input->post('HyDate');
            $iso_container_LeakPsig=$this->input->post('LeakPsig');
            $iso_container_LeakPresence=$this->input->post('LeakPrese');
            $iso_container_LeakOf=$this->input->post('LeakOf');
            $iso_container_LeakDate=$this->input->post('LeakDate');
            $iso_container_DryDate1=$this->input->post('DryDate1');
            $iso_container_DryTime1=$this->input->post('dryTime1');
            $iso_container_DryPressure1=$this->input->post('DryPressu1');
            $iso_container_DryC1=$this->input->post('DryC1');
            $iso_container_DryDate2=$this->input->post('DryDate2');
            $iso_container_DryTime2=$this->input->post('dryTime2');
            $iso_container_DryPressure2=$this->input->post('DryPressu2');
            $iso_container_DryC2=$this->input->post('DryC2');
            $iso_container_CertifiedDate=$this->input->post('CertifiedDate');
            $iso_container_CertifiedTime=$this->input->post('CertifiedTime');
            $iso_container_CertifiedBy=$this->input->post('CertifiedBy');
  
 
 $isocontainer=array(
            'FillValve_RepairsorReplacements'=>$iso_container_Fillvalve,
            'FillValve_RepairNo'=>$iso_container_FillvalveRepairNumber,
            'VentValve_RepairsorReplacements' =>$iso_container_VentvalveRepair,
            'VentValve_RepairNo' =>$iso_container_VentvalveRepaiNumber,
            'AirValve_RepairsorReplacements' =>$iso_container_AirvalveRepair,
            'AirValve_RepairNo' =>$iso_container_AirValveRepairNumber,
            'ReliefValve_RepairsorReplacements'=>$iso_container_ReliefvalveRepair,
            'ReliefValve_RepairNo'=>$iso_container_ReliefvalveRepairNumber,
            'BurstingDisc_RepairsorReplacements'=>$iso_container_BurstingDiscRepair,
           'BurstingDisc_RepairNo' =>$iso_container_BurstingDiscRepairNumber,
     'BustingDiscHolder_RepairsorReplacements'=>$iso_container_BurstingDiscRepair1,
           'BustingDiscHolder_Repairs' =>$iso_container_BurstingDiscRepairNumber1,
           'TellTaleAssemblyGauge_RepairsorReplacements' =>$iso_container_TellTaleAssemblyGaugeRepair,
           'telltaleassemblygauagerepairno' =>$iso_container_TellTaleAssemblyGaugeNumber,
           'NeedleValve_RepairsorReplacements' =>$iso_container_NeedlevalveRepair,
           'NeedleValve_RepairNo' =>$iso_container_NeedlevalveRepairNumber,
           'ValveSpacer_RepairsOrReplacements' =>$iso_container_ValveSpacerRepair,
           'ValveSpacer_RepairNo' =>$iso_container_ValveSpaceRepairNumber,
           'DipPipe_RepairsorReplacements' =>$iso_container_DipPipeRepair,
           'DipPipe_RepairNo' =>$iso_container_DipPipeRepairNumber,
      'UllageDipPipe_RepairsorReplacements' =>$iso_container_DipPipeRepair1,
           'UllageDipPipe_RepairNo' =>$iso_container_DipPipeRepairNumber1,
           'SpecialStuds_RepairsorReplacements' =>$iso_container_SpecialStudsRepair,
           'SpecialStuds_RepairNo' =>$iso_container_SpecialStudsRepairNumber,
           'ManlidBolts_RepairsorReplacements' =>$iso_container_ManlidBoltsRepair,
           'ManlidBolts_RepairNo' =>$iso_container_MalidBoltRepairNumber,
           'Remarks_RepairsorReplacements' =>$iso_container_RemarksRepair,
           'Remarks_RepairNo' =>$iso_container_RemarksRepairNumber,
           'Hydraulic_psig' =>$iso_container_HydraPsig,
           'Hydraulic_Presenceof' =>$iso_container_HydraPresecence,
           'Hydraulic_of' =>$iso_container_HydraOf,
           'Hydraulic_date' =>$iso_container_HydraDate,
           'Leakproof_psig' =>$iso_container_LeakPsig,
           'Leakproof_presenceof' =>$iso_container_LeakPresence,
           'Leakproof_of' =>$iso_container_LeakOf,
           'LeakProof_date' =>$iso_container_LeakDate,
           'Dryness_Date1' =>$iso_container_DryDate1,
           'Dryness_Time1' =>$iso_container_DryTime1,
           'Dryness_Pressure1' =>$iso_container_DryPressure1,
           'Dryness_DryC1' =>$iso_container_DryC1,
           'Dryness_Date2' =>$iso_container_DryDate2,
           'Dryness_Time2' =>$iso_container_DryTime2,
           'Dryness_Pressure2' =>$iso_container_DryPressure2,
           'Dryness_DryC2' =>$iso_container_DryC2,
           'Certified_Date' =>$iso_container_CertifiedDate,
           'Certified_Time' =>$iso_container_CertifiedTime,
           'Certified_By' =>$iso_container_CertifiedBy,
 'ValveBlanks_RepairsorReplacements'=>$iso_container_valveblankRepairNumber,
 'ValveBlanks_RepairNo'=>$iso_container_valveblankRepair,
 'manlidblank_RepairsorReplacements'=>$iso_container_malidblankRepairNumber,
 'manlidblank_RepairNo'=>$iso_container_manlidblankRepair,);
 
  $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
         );
 $this->work_model->update_section5($isocontainer,$wkid);
  $this->work_model->assigncolorsection5($wkid,$color);
              //  ($isocontainer1);
        
      if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
}
       
        
        
        
       public function bvpurgingrecord()
        {
  //$Technical_identification_number1=$this->input-post('rear2');

//$WO_ID1=$this->input->post('wid');	
            $color=$this->input->post('rer');
             $wkid=$this->input->post('wid7');       
        $slid=$this->input->post('slid7'); 
         $coid=$this->input->post('co1id7'); 
         $eid=$this->input->post('eq1id7'); 
          $mid=$this->input->post('man7'); 

		$CausticTankLevelData1=$this->input->post('rear1'); 

		$CausticTankLevelTime1=$this->input->post('rear2'); 	

		$CausticTankLevelTech1=$this->input->post('rear3'); 	

		$CausticFlowData1=$this->input->post('rear4');  					

		$CausticFlowTime1=$this->input->post('rear5'); 	

		$CausticFlowTech1=$this->input->post('rear6'); 	

		$CausticStrengthData1=$this->input->post('rear7'); 						

		$CausticStrengthTime1=$this->input->post('rear8'); 		

		$CausticStrengthTech1=$this->input->post('rear9'); 		

		$AirDewpointData1=$this->input->post('rear10'); 						
                 $AirDewpointTime1=$this->input->post('rear11'); 	

$AirDewpointTech1=$this->input->post('rear12');	


		$ValvesConnectedandSetData1=$this->input->post('rear13');	

		$ValvesConnectedandSetTime1=$this->input->post('rear14'); 		

		$ValvesConnectedandSetTech1=$this->input->post('rear15'); 		

		$AirPressureDATA1=$this->input->post('rear16'); 					

		$AirPressureTime1=$this->input->post('rear17'); 	

		$AirPressureTech1=$this->input->post('rear18'); 		

		$AirTemperatureDATA1=$this->input->post('rear19'); 						

		$AirTemperAtureTime1=$this->input->post('rear20'); 		

		$AirTemperAtureTech1=$this->input->post('rear21'); 		
                 $VentingStArtedDATA1=$this->input->post('rear22'); 		

		$VentingStArtedTime1=$this->input->post('rear23'); 		

		$VentingStArtedTech1=$this->input->post('rear24'); 		

	$ThiosulphateWAshStartedDATA1=$this->input->post('rear25'); 		

	$ThiosulphateWAshStartedTime1=$this->input->post('rear26'); 		

	$ThiosulphateWashStArtedTech1=$this->input->post('rear27'); 		

	$ThiosulphateWashCompletedDATA1=$this->input->post('rear28'); 		
$ThiosulphateWashCompletedTime1=$this->input->post('rear29'); 	

	$ThiosulphateWashCompletedTech1=$this->input->post('rear30'); 		

		$VesselCleanDATA1=$this->input->post('rear31'); 	

		$VesselCleanTime1=$this->input->post('rear32'); 	

		$VesselCleanTech1=$this->input->post('rear33'); 	

		$VesselHydroDATA1=$this->input->post('rear34'); 						

		$VesselHydroTime1=$this->input->post('rear35'); 		

		$VesselHydroTech1=$this->input->post('rear36'); 	

		$VesselDisassembledDATA1=$this->input->post('rear37'); 		

		$VesselDisassembledTime1=$this->input->post('rear38'); 		

		$VesselDisassembled1=$this->input->post('rear39'); 		

		$ConfinedSpacePermitDATA1=$this->input->post('rear40'); 		

		$ConfinedSpacePermitTime1=$this->input->post('rear41'); 		

		$ConfinedSpacePermitTech1=$this->input->post('rear42');		

$VESSEL_READYFORINSPECTION_tech1=$this->input->post('rear44'); 	

$VESSEL_READYFORINSPECTION_date1=$this->input->post('rear413'); 	
$VESSEL_READYFORINSPECTION_time=$this->input->post('rear43'); 
$BROMINEVESSELPURGINGRECORDComments1=$this->input->post('rear45'); 	



$bvpurging=array(
'Technicalidentificationnumber'=>$eid,
	
'WO_ID'=>$wkid,
	
'CausticTankLevelData'	=>$CausticTankLevelData1,
	
'CausticTankLevelTime'	=>$CausticTankLevelTime1,
	
'CausticTankLevelTech'	=>$CausticTankLevelTech1, 
	
'CausticFlowData' 	=>$CausticFlowData1,
	
'CausticFlowTime'	=>$CausticFlowTime1, 
	
'CausticFlowTech'	=>$CausticFlowTech1, 
	
'CausticStrengthData'	=>$CausticStrengthData1, 
	
'CausticStrengthTime'	=>$CausticStrengthTime1, 
	
'CausticStrengthTech'	=>$CausticStrengthTech1, 
	
'AirDewpointData'	=>$AirDewpointData1,
	 
'adptech'	=>$AirDewpointTech1, 
	'AirDewpointTime'=>$AirDewpointTime1,

	
'ValvesConnected_SetData'=>$ValvesConnectedandSetData1,	
'ValvesConnected_SetTime'	=>$ValvesConnectedandSetTime1, 
	
'ValvesConnected_SetTech'	=>$ValvesConnectedandSetTech1, 
	
'AirPressureData'	=>$AirPressureDATA1,
	
'AirPressureTime'	=>$AirPressureTime1,
	
'AirPressureTech'	=>$AirPressureTech1,
	
'AirTemperatureData'	=>$AirTemperatureDATA1,
	
'AirTemperatureTime'	=>$AirTemperAtureTime1,
	
'AirTemperatureTech'	=>$AirTemperAtureTech1,
	
'VentingStartedData'	=>$VentingStArtedDATA1,
	
'VentingStartedTime'	=>$VentingStArtedTime1,
	
'VentingStartedTech'	=>$VentingStArtedTech1,
	
'ThiosulphateWashStartedData'=>$ThiosulphateWAshStartedDATA1,
	
'ThiosulphateWashStartedTime'=>$ThiosulphateWAshStartedTime1,
	
'ThiosulphateWashStartedTech'=>$ThiosulphateWashStArtedTech1,
	
'ThiosulphateWashCompletedData'	=>$ThiosulphateWashCompletedDATA1,
	
'ThiosulphateWashCompletedTime'	=>$ThiosulphateWashCompletedTime1,
	
'ThiosulphateWashCompletedTech'	=>$ThiosulphateWashCompletedTech1,
	
'VesselCleanData'	=>$VesselCleanDATA1,
	
'VesselCleanTime'	=>$VesselCleanTime1,
	
'VesselCleanTech'	=>$VesselCleanTech1,
	
'VesselHydroData'	=>$VesselHydroDATA1,
	
'VesselHydroTime'	=>$VesselHydroTime1,
	
'VesselHydroTech'	=>$VesselHydroTech1,
	
'VesselDisassembledData'=>$VesselDisassembledDATA1,
	
'VesselDisassembledTime'=>$VesselDisassembledTime1,
	
'VesselDisassembledTech'=>$VesselDisassembled1, 
	
'ConfinedSpacePermitData'=>$ConfinedSpacePermitDATA1, 
	
'ConfinedSpacePermitTime'=>$ConfinedSpacePermitTime1,
	
'ConfinedSpacePermitTech'=>$ConfinedSpacePermitTech1,
	
'VESSELREADYFORINSPECTIONtech'=>$VESSEL_READYFORINSPECTION_tech1,
	
'VESSELREADYFORINSPECTIONdate'=>$VESSEL_READYFORINSPECTION_date1, 
'VESSELREADYFORINSPECTIONtime'=>$VESSEL_READYFORINSPECTION_time,
'BROMINEVESSELPURGINGRECORDComments'=>$BROMINEVESSELPURGINGRECORDComments1, 
  

        );
$data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
         );
       
       
        $this->work_model->updatebvpurgingrecord($bvpurging,$wkid);
         $this->work_model->assigncolorsectionbvpurging($wkid,$color);
      if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
     //   $this->load->view('Section6');

        //$data['id'] = $id;
        //$data['active'] = 'profile';
        //$this->load->view('staff_patient_profile', $data);
        }
  public function ercertificate() {
      $color=$this->input->post('rer1'); 
      $wkid=$this->input->post('wid2');       
        $slid=$this->input->post('slid2'); 
         $coid=$this->input->post('coid2'); 
         $eid=$this->input->post('eqid2'); 
          $mid=$this->input->post('man2'); 
  $DateIssued1=$this->input->post('textfield1');
$Issue1=$this->input->post('textfield2');	
$EquipmentNo1=$this->input->post('eqid');
$ManlidInitialTorque1=$this->input->post('textfield3');
$ManlidFinalTorque1=$this->input->post('textfield4');
$ManlidTighteningRequired_tiny1=$this->input->post('displayValue');
$ManlidTech1=$this->input->post('textfield5');
$FillValveYellowInitialTorque1=$this->input->post('textfield6');
$FillValveYellowFinalTorque1=$this->input->post('textfield7');			
$FillValveYellowTighteningRequired_tiny1=$this->input->post('displayValue1');		
$FillValveYellowTech1=$this->input->post('textfield8');		
$PressueValveGreenInitialTorque1=$this->input->post('textfield9');				
$PressueValveGreenFinalTorque1=$this->input->post('textfield10');				
$PressueValveGreenTighteningRequired_tiny1=$this->input->post('displayValue2');			
$PressueValveGreenTech1=$this->input->post('textfield11');			
$VentvalveRedInitialTorque1=$this->input->post('textfield12');				
$VentvalveRedFinalTorque1=$this->input->post('textfield13');				
$VentvalveRedTighteningRequired_tiny1=$this->input->post('3displayValue3');			
$VentvalveRedTech1=$this->input->post('textfield14');			
$ReliefValveInitialTorque1=$this->input->post('textfield15');				
$ReliefValveFinalTorque1=$this->input->post('textfield16');				
$ReliefValveTighteningRequired_tiny1=$this->input->post('4displayValue41');			
$ReliefValveTech1=$this->input->post('textfield17');			
$FusibleElementorBlankInitialTorque1=$this->input->post('textfield18');				
$FusibleElementorBlankFinalTorque1=$this->input->post('textfield19');				
$FusibleElementorBlankTighteningRequired_tiny1=$this->input->post('displayValue51');			
$FusibleElementorBlankTech1=$this->input->post('textfield20');			
$ValveBonnetTorqueSettingsFillValveYellowInitialTorque1=$this->input->post('textfield21');			
$ValveBonnetTorqueSettingsFillValveYellowFinalTorque1=$this->input->post('textfield22');		
$ValveBonnetTorqueSettingsFillValveYellowTighteningRequired1=$this->input->post('displayValue16');	
$ValveBonnetTorqueSettingsFillValveYellowSpringWashers1=$this->input->post('11displayValue7');		
$ValveBonnetTorqueSettingsFillValveYellowTech1=$this->input->post('textfield23');		
$ValveBonnetTorqueSettingsPressureValveGreenInitialTorque1=$this->input->post('textfield24');			
$ValveBonnetTorqueSettingsPressureValveGreenFinalTorque1=$this->input->post('textfield25');			
$ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired1=$this->input->post('displayValue8');			
$ValveBonnetTorqueSettingsPressureValveGreenSpringWashers1=$this->input->post('displayValue9');				
$ValveBonnetTorqueSettingsPressureValveGreenTech1=$this->input->post('textfield26');		
$ValveBonnetTorqueSettingsVentValveRedInitialTorque1=$this->input->post('textfield27');				
$ValveBonnetTorqueSettingsVentValveRedFinalTorque1=$this->input->post('textfield28');				
$ValveBonnetTorqueSettingsVentValveRedTighteningRequired1=$this->input->post('1displayValue10');				
$ValveBonnetTorqueSettingsVentValveRedSpringWashers1=$this->input->post('1displayValue11');				
$ValveBonnetTorqueSettingsTech1=$this->input->post('textfield29');			
$Leakproofnesstestpsig1=$this->input->post('textfield30');			
$Leakproofnesstestmanlid1=$this->input->post('textfield31');				
$LeakproofnesstestFillValve1=$this->input->post('textfield32');				
$LeakproofnesstestPressureValve1=$this->input->post('textfield33');				
$LeakproofnesstestVentValve1=$this->input->post('textfield34');				
$LeakproofnesstestReliefValve1=$this->input->post('textfield35');				
$LeakproofnesstestFusibleorBlank1=$this->input->post('textfield36');				
$LeakproofnesstestFillBonnet1=$this->input->post('textfield37');				
$LeakproofnesstestPressureBonnet1=$this->input->post('textfield38');				
$LeakproofnesstestVentBonnet1=$this->input->post('textfield39');			
$LeakproofnesstestRecordSheetscheckedYesorNo1=$this->input->post('displayValue12');				
$LeakproofnesstestRecordSheetscheckedInitials1=$this->input->post('textfield40');	
$LeakproofnesstestDomeCoversecuredyesorno1=$this->input->post('displayValue13');	
$LeakproofnesstestDomeCoverSecuredSealNumber1=$this->input->post('textfield41');			
$LeakproofnesstestHazardSignscovered1=$this->input->post('displayValue14');		
$LeakproofnesstestDomeCoverSecuredInitials1=$this->input->post('textfield42');
$LeakproofnesstestThevesselcontainsdryairbynitrogen1=$this->input->post('textfield43');		
$LeakproofnesstestDewpointatapressureof1=$this->input->post('textfield44');				
$LeakproofnesstestReleasedTo1=$this->input->post('textfield45');				
$LeakproofnesstestHaulier1=$this->input->post('textfield46');				
$LeakproofnesstestVehicleRegNo1=$this->input->post('textfield47');	
$LeakproofnesstestforGLS1=$this->input->post('textfield48');		
$LeakproofnesstestDateTime1=$this->input->post('textfield49');		
$errecord = array(
 'DateIssued'=>$DateIssued1,
'Issue'=>$Issue1,	
'EquipmentNo'=>$EquipmentNo1,
'ManlidInitialTorque'=>$ManlidInitialTorque1,
'ManlidFinalTorque'=>$ManlidFinalTorque1,
'ManlidTighteningRequired'=>$ManlidTighteningRequired_tiny1,
'ManlidTech'=>$ManlidTech1,
'FillValveYellowInitialTorque'=>$FillValveYellowInitialTorque1,
'FillValveYellowFinalTorque'	=>$FillValveYellowFinalTorque1,
'FillValveYellowTighteningRequired'=>$FillValveYellowTighteningRequired_tiny1,
'FillValveYellowTech'=>$FillValveYellowTech1,
'PressureValveGreenInitialTorque'=>$PressueValveGreenInitialTorque1,		
'PressureValveGreenFinalTorque'=>$PressueValveGreenFinalTorque1,		
'PressureValveGreenTighteningRequired'=>$PressueValveGreenTighteningRequired_tiny1,	
'PressureValveGreenTech'	=>$PressueValveGreenTech1,	
'VentvalveRedInitialTorque'=>$VentvalveRedInitialTorque1,
'VentvalveRedFinalTorque'=>$VentvalveRedFinalTorque1,				
'VentvalveRedTighteningRequired'=>$VentvalveRedTighteningRequired_tiny1,		
'VentvalveRedTech'	=>$VentvalveRedTech1,	
'ReliefValveInitialTorque'=>$ReliefValveInitialTorque1,		
'ReliefValveFinalTorque'=>$ReliefValveFinalTorque1,			
'ReliefValveTighteningRequired'=>$ReliefValveTighteningRequired_tiny1,		
'ReliefValveTech'=>$ReliefValveTech1,
'FusibleElementorBlankInitialTorque'=>$FusibleElementorBlankInitialTorque1,			
'FusibleElementorBlankFinalTorque'=>$FusibleElementorBlankFinalTorque1,				
'FusibleElementorBlankTighteningRequired'=>$FusibleElementorBlankTighteningRequired_tiny1,		
'FusibleElementorBlankTech'=>$FusibleElementorBlankTech1,	
'ValveBonnetTorqueSettingsFillValveYellowInitialTorque'=>$ValveBonnetTorqueSettingsFillValveYellowInitialTorque1,			
'ValveBonnetTorqueSettingsFillValveYellowFinalTorque'=>$ValveBonnetTorqueSettingsFillValveYellowFinalTorque1,			
'ValveBonnetTorqueSettingsFillValveYellowTighteningRequired'=>$ValveBonnetTorqueSettingsFillValveYellowTighteningRequired1,			
'ValveBonnetTorqueSettingsFillValveYellowSpringWashers'=>$ValveBonnetTorqueSettingsFillValveYellowSpringWashers1,	
'ValveBonnetTorqueSettingsFillValveYellowTech'=>$ValveBonnetTorqueSettingsFillValveYellowTech1,	
'ValveBonnetTorqueSettingsPressureValveGreenInitialTorque'=>$ValveBonnetTorqueSettingsPressureValveGreenInitialTorque1,	
'ValveBonnetTorqueSettingsPressureValveGreenFinalTorque'=>$ValveBonnetTorqueSettingsPressureValveGreenFinalTorque1,		
'ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired'	=>$ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired1,		
'ValveBonnetTorqueSettingsPressureValveGreenSpringWashers'=>$ValveBonnetTorqueSettingsPressureValveGreenSpringWashers1,			
'ValveBonnetTorqueSettingsPressureValveGreenTech'=>$ValveBonnetTorqueSettingsPressureValveGreenTech1,		
'ValveBonnetTorqueSettingsVentValveRedInitialTorque'=>$ValveBonnetTorqueSettingsVentValveRedInitialTorque1,			
'ValveBonnetTorqueSettingsVentValveRedFinalTorque'=>$ValveBonnetTorqueSettingsVentValveRedFinalTorque1,			
'ValveBonnetTorqueSettingsVentValveRedTighteningRequired'=>$ValveBonnetTorqueSettingsVentValveRedTighteningRequired1,				
'ValveBonnetTorqueSettingsVentValveRedSpringWashers'=>$ValveBonnetTorqueSettingsVentValveRedSpringWashers1,			
'ValveBonnetTorqueSettingsTech'	=>$ValveBonnetTorqueSettingsTech1,
'Leakproofnesstestpsig'	=>$Leakproofnesstestpsig1,		
'Leakproofnesstestmanlid'=>$Leakproofnesstestmanlid1,			
'LeakproofnesstestFillValve'=>$LeakproofnesstestFillValve1,	
'LeakproofnesstestPressureValve'=>$LeakproofnesstestPressureValve1,		
'LeakproofnesstestVentValve'	=>$LeakproofnesstestVentValve1,
'LeakproofnesstestReliefValve'=>$LeakproofnesstestReliefValve1,			
'LeakproofnesstestFusibleorBlank'=>$LeakproofnesstestFusibleorBlank1,	
'LeakproofnesstestFillBonnet'	=>$LeakproofnesstestFillBonnet1,		
'LeakproofnesstestPressureBonnet'=>$LeakproofnesstestPressureBonnet1,
'LeakproofnesstestVentBonnet'	=>$LeakproofnesstestVentBonnet1,	
'LeakproofnesstestRecordSheetscheckedYesorNo'=>$LeakproofnesstestRecordSheetscheckedYesorNo1,		
'LeakproofnesstestRecordSheetscheckedInitials'=>$LeakproofnesstestRecordSheetscheckedInitials1,
'LeakproofnesstestDomeCoversecuredyesorno'=>$LeakproofnesstestDomeCoversecuredyesorno1,
'LeakproofnesstestDomeCoverSecuredSealNumber'=>$LeakproofnesstestDomeCoverSecuredSealNumber1,		
'LeakproofnesstestHazardSignscovered'=>$LeakproofnesstestHazardSignscovered1,	
'LeakproofnesstestDomeCoverSecuredInitials'=>$LeakproofnesstestDomeCoverSecuredInitials1,
'LeakproofnesstestThevesselcontainsdryairnitrogen'=>$LeakproofnesstestThevesselcontainsdryairbynitrogen1,		
'LeakproofnesstestDewpointatapressureof'=>$LeakproofnesstestDewpointatapressureof1,				
'LeakproofnesstestReleasedTo'	=>$LeakproofnesstestReleasedTo1,			
'LeakproofnesstestHaulier'=>$LeakproofnesstestHaulier1,		
'LeakproofnesstestVehicleRegNo'=>$LeakproofnesstestVehicleRegNo1,
'LeakproofnesstestforGLS'=>$LeakproofnesstestforGLS1,
'LeakproofnesstestDateTime'=>$LeakproofnesstestDateTime1,	



    
);
$this->work_model->updateerrecord($errecord,$wkid);
        $this->work_model->assigncolorercertificate($wkid,$color);
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'containersize'=>$coid,
             'equipmentid'=>$eid,
             'manufacturer'=>$mid,
         );
       if($coid=='18.5 MT'){
     
if($mid=='M.I. ENGINEERING'){
$this->load->view('aocu',$data);}else{
$this->load->view('glbu18.5t',$data);}
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
       

        
    }
        public function workorder() {
         $this->load->view('mainhomepage');
    }
     public function workorderoverview() {
         $this->load->view('OnloadWorkorderView');
    }
        
       public function vieweachworkorder() {
         $this->load->view('bobu14t');
    } 
    public function isoinspectionform6(){
    
    
    $this->load->view('Section6'); 
    
}
 public function createworkorder(){
    
    
    $this->load->view('wkocreatehome'); 
    
}
public function searchwkorder(){
    
    
    $this->load->view('wkosearchhome'); 
    
}
public function viewinspectioncertificate(){
    
    
    $this->load->view('certificatesearch'); 
    
}

public function reassignwkorder(){
    
    
    $this->load->view('reaasign'); 
    
}
public function currentwkorder(){
    
    
    $this->load->view('current'); 
    
}
public function transfer(){
    
    
    $this->load->view('exchange'); 
    
}
public function searchworkorder(){
    if (empty($_POST["tid"])){
        $message = "Technical identification number required...Pleaase enter";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('wkosearchhome');
    }
    else{
    $tid = $this->input->post('tid');
     $result=$this->work_model->get_by_techid($tid);
   if ($result == false)
   {  $message = " No such Technical identification  Number!..Please Enter Correct one";
   echo "<script type='text/javascript'>alert('$message');</script>";
    $this->load->view('wkosearchhome');
   }
    else{
        $data['id']=$tid;
      $this->load->view('techsummary',$data);
   } 
    }
}
public function wkcertificate(){
    if (empty($_POST["tid"])){
        $message = "Technical identification number required...Pleaase enter";
    echo "<script type='text/javascript'>alert('$message');</script>";
     $this->load->view('wkosearchhome');
    }
    else{
    $tid = $this->input->post('tid');
     $result=$this->work_model->get_by_techid($tid);
   if ($result == false)
   {  $message = " No such Technical identification  Number!..Please Enter Correct one";
   echo "<script type='text/javascript'>alert('$message');</script>";
    $this->load->view('wkosearchhome');
   }
    else{
        $data['id']=$tid;
      $this->load->view('cersummary',$data);
   } 
    }
}

public function closewk(){
    
    if(isset($_POST['close'])){
 
 $slotnum=$this->input->post('csid');
    }
    $eqid='0';$status='0';$wkid ='0';
    $this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status);
  

}
public function onrepairview()
        {
            
           
        $this->load->view('summary'); 
             
        

        }

 public function formview()
        {
            
            $wkid=$this->input->post('wokid');    
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }
            else{
        $slid=$this->input->post('sid'); 
        $equid=$this->input->post('eqid');
            $size=$this->input->post('coid');
            $manu=$this->input->post('mid');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
             'containersize'=>$size,
             'manufacturer'=>$manu,
         );
       if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
           else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }  
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }
 else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
        
            }
        }
        public function formview2()
        {
            
            $wkid=$this->input->post('wokid2');   
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }else{
        $slid=$this->input->post('sid2'); 
        $equid=$this->input->post('eqid2');
        $size=$this->input->post('coid2');
        $manu=$this->input->post('mid2');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
             'containersize'=>$size,
            'manufacturer'=>$manu,
         );
         if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }
 else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
             
        
            }
        }
        public function formview3()
        {
            
            $wkid=$this->input->post('wokid3'); 
            
            if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }
            else{
        $slid=$this->input->post('sid3'); 
        $equid=$this->input->post('eqid3');
        $manu=$this->input->post('mid3');
       $size=$this->input->post('coid3');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
             'containersize'=>$size,
            'manufacturer'=>$manu,
         );
         if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
        }}
       public function formview4()
        {
            
            $wkid=$this->input->post('wokid4');  
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }
            else{
        $slid=$this->input->post('sid4');
        $equid=$this->input->post('eqid4');
         $size=$this->input->post('coid4');
         $manu=$this->input->post('mid4');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
             'containersize'=>$size,
            'manufacturer'=>$manu,
         );
          if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 } 
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
             
        }}
       public function formview5()
        {
            
            $wkid=$this->input->post('wokid5');    
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }else{
        $slid=$this->input->post('sid5'); 
        $equid=$this->input->post('eqid5');
         $size=$this->input->post('coid5');
    $manu=$this->input->post('mid5');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
             'containersize'=>$size,
             'manufacturer'=>$manu,
            
         );
          if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
            }
       }
       public function formview6()
        {
            
            $wkid=$this->input->post('wokid6');    
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }else{
        $slid=$this->input->post('sid6'); 
        $equid=$this->input->post('eqid6');
         $size=$this->input->post('coid6');
         $manu=$this->input->post('mid6');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
            'containersize'=>$size,
             'manufacturer'=>$manu,
         );
         if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
             
        }}
       public function formview7()
        {
            
            $wkid=$this->input->post('wokid7'); 
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }else{
        $slid=$this->input->post('sid7'); 
        $equid=$this->input->post('eqid7');
         $size=$this->input->post('coid7');
         $manu=$this->input->post('mid7');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
            'containersize'=>$size,
             'manufacturer'=>$manu,
         );
       
   if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
  else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
 
 
 
             
        }}
       public function formview8()
        {
            
            $wkid=$this->input->post('wokid8');   
             if($wkid=='0'){
                 
 $this->load->view('warningpage');
            }else{
        $slid=$this->input->post('sid8'); 
        $equid=$this->input->post('eqid8');
         $size=$this->input->post('coid8');
         $manu=$this->input->post('mid8');
         $data=array(
             'workorderid'=>$wkid,
             'slotnumber'=>$slid,
             'equipmentid'=>$equid,
            'containersize'=>$size,
             'manufacturer'=>$manu,
         );
         if($size=='18.5 MT'){
     
if($manu == 'M.I. ENGINEERING'){
$this->load->view('aocu',$data);}
else{
$this->load->view('glbu18.5t',$data);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$data);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$data);
 } 
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$data);
 }
 else if($size=='15 MT'){

 $this->load->view('cgbu15t',$data);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$data);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$data);
 }
             
        }}
        
public function transferwkflow(){
     if ((empty($_POST["sid"])) || (empty($_POST["sid1"]) )){
        $message = " Slot Number required...cannot be empty..!";
echo "<script type='text/javascript'>alert('$message');</script>";
         $this->load->view('exchange');
        
          
    }   
    else{
     $source=$this->input->post('sid');  
      $dest=$this->input->post('sid1');  
         $result1=$this->work_model->get_by_slotnum($source);
            $result2=$this->work_model->get_by_slotnum($dest);
$s1=$result1->status;
        $s2=$result2->status;
 $eqid1 =$result1->equipmentid;
   $eqid2  =$result2->equipmentid; 
   $wk1=$result1->workorderid; 
   $size=$result1->containersize; 
           $man=$result1->manufacturer; 
           $wk2=$result2->workorderid; 
   $size2=$result2->containersize; 
           $man2=$result2->manufacturer; 
           
            $workflow1= array(
            'workorderid' => $wk1,
            'equipmentid' => $eqid1,
            'containersize' => $size,
            'manufacturer' => $man,
           
            
            'status'=>$s1,
            
            
            
        );
              $workflow2= array(
            'workorderid' => $wk2,
            'equipmentid' => $eqid2,
            'containersize' => $size2,
            'manufacturer' => $man2,
           
            
            'status'=>$s2,
            
            
            
        );
           
      if ($source != $dest){
   if($s1==='0' && $s2==='0' ){
         $message = "N0 work order in eigther of slots";
echo "<script type='text/javascript'>alert('$message');</script>";
 $this->load->view('exchange');
   }
   elseif($s1==='1' && $s2==='1' ){
       $this->work_model->updateslot($workflow2,$source);
       $this->work_model->updateslot($workflow1,$dest); 
           $this->load->view('mainhomepage');
   }
   elseif($s1==='1' && $s2==='0'){
       
       $this->work_model->updateslot($workflow2,$source);
       $this->work_model->updateslot($workflow1,$dest); 
      $this->load->view('mainhomepage');
   }
   elseif($s1==='0' && $s2==='1'){
       
       $this->work_model->updateslot($workflow2,$source);
       $this->work_model->updateslot($workflow1,$dest); 
      $this->load->view('mainhomepage');
      }}
   else{
       
        $message = "Exchange cannot be done between same slots numbers";
echo "<script type='text/javascript'>alert('$message');</script>";
 $this->load->view('exchange');
    }
  
   }}

      
      

public function storewkflow(){
    if ((empty($_POST["equip"])) || (empty($_POST["sid"]) )){
        $message = "Equipment Id and Slot Number required";
echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view('wkocreatehome');
        
          
    }   else{
   
 if(isset($_POST['go'])){
    $wkid = $this->input->post('wkoid');
    $eqid = $this->input->post('equip');
   $chin = $this->input->post('date');
    $statusc ='Inprogress';
    
    $NA='N/A';
    }
    
   $result=$this->work_model->get_by_equipmentid($eqid);
   if ($result == false)
   {  $message = " No such Equipment Id!..Please Enter Again";
echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view('wkocreatehome');
        
   }
      else{
        
   $slotnum=$this->input->post('sid');  
     // $res=$this->work_model->get_by_equipmentid($eqid);
   foreach ($result as $row):
   
   $size =  $row->SIZEORDIMENSION;
     $loadstatus = $row->MANUFACTURER_OF_ASSET;
     
     endforeach;
        
        $status='1';


        $workflow= array(
            'workorderid' => $wkid,
            'equipmentid' => $eqid,
            'containersize' => $size,
            'manufacturer' => $loadstatus,
            'slotnumber'=>$slotnum,
            'checkin'=>$chin,
            'checkout'=>$NA,
            'Status'=>$statusc,
            'path'=>'no',
            
            
        );
    
    
 
 
   if($size=='18.5 MT'){
     $this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
if($loadstatus== 'M.I. ENGINEERING'){
    
$this->load->view('aocu',$workflow);}
else{
$this->load->view('glbu18.5t',$workflow);

}
 }
 else if($size=='14 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('bobu',$workflow);
 }
 else if($size=='18 MT'){
     $this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('bobu18t',$workflow);
 }
 else if($size=='17.4 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('bobu17.4t',$workflow);
 }
 else if($size=='15 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('cgbu15t',$workflow);
 }else if($size=='23 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('bobu23t',$workflow);
 }
 else if($size=='19 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('glbu19t',$workflow);
 } 
  else if($size=='17.5 MT'){
$this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$loadstatus);
$this->work_model->assigncolorstatus($wkid);
$this->work_model->insertwkidbobu14t($wkid);
$this->work_model->wkidupdate($workflow);
 $this->load->view('glbu17.5t',$workflow);
 }
 else{
      $message = "  Equipment Id exist in datbase!..But there is no form for this Id... Please Enter Another Id";
echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view('wkocreatehome');
 }
}}}

public function storeonrepairwkflow(){
 if(isset($_POST['gogo'])){
     $wokid = $this->input->post('wid');
     $data['id']=$wokid;
     if((empty($_POST["slid"]))){
            $message = " No such Slotnumer!..Please Enter Again";
echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view('resumeonrepair',$data);
        }
        else{
    $wokid = $this->input->post('wid');
    
        $row= $this->work_model->geteqid($wokid);
       $equid= $row->equipmentid;
       $size=$row->containersize;
       $man=$row->manufacturer;
        $slotnum=$this->input->post('slid');
        
        $status='1';
$this->work_model->assignslotandwk($slotnum,$equid,$wokid,$status,$size,$man);
$this->work_model->unassignonrepair($wokid);
$this->work_model->updatestatuswkflow1($wokid);
//$this->work_model->insertwkidbobu14t($wkid);

        $workflow= array(
            'workorderid' => $wokid,
            'equipmentid' => $equid,
            
            'slotnumber'=>$slotnum,
            'containersize'=>$size,
            'manufacturer'=>$man,
        );
 
 
  if($size=='18.5 MT'){
     
if($man == 'M.I. ENGINEERING'){
$this->load->view('aocu',$workflow);}
else{
$this->load->view('glbu18.5t',$workflow);}
 }
 else if($size=='14 MT'){

 $this->load->view('bobu',$workflow);
 }
 else if($size=='18 MT'){

 $this->load->view('bobu18t',$workflow);
 }
 else if($size=='17.4 MT'){

 $this->load->view('bobu17.4t',$workflow);
 }
 else if($size=='15 MT'){

 $this->load->view('cgbu15t',$workflow);
 }else if($size=='23 MT'){

 $this->load->view('bobu23t',$data);
 }
 else if($size=='19 MT'){

 $this->load->view('glbu19t',$workflow);
 } 
  else if($size=='17.5 MT'){

 $this->load->view('glbu17.5t',$workflow);
 }
 }}
}
public function reassignwkflow() {
         if(empty($_POST['checkbox'])){
               $message = " Please select a workorder to reassign!";
echo "<script type='text/javascript'>alert('$message');</script>";
         $this->load->view('reaasign'); }
         else{
  
for($i=0;$i<count($_POST['checkbox']);$i++){
$data['id']=$_POST['checkbox'][$i];

$this->load->view('resumeonrepair',$data);


}}
// if successful redirect to delete_multiple.php

    
}

    }
    
   