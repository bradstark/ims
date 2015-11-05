

<!DOCTYPE html>  
<html> 
    
   
<head>  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
     
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script> 
<link rel="stylesheet" href="css/jquery-ui.css">

  <script src="js/jquery-1.9.1.js"></script>

  <script src="js/jquery-ui.js"></script>

  <link rel="stylesheet" href="/resources/demos/style.css">
  <script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 
  
  
</head>


 <?php $row3 = $this->work_model->get_by_vesselid($workorderid); ?>
 <?php $row1 = $this->work_model->get_by_colorstatus($workorderid); ?>
<body onload="set1Color('<?php echo $row3->hcells ?>');" >
    
           <?php $row2 = $this->work_model->get_by_isodimen($workorderid); ?>  
                 <script>

  $(function() {

    $( "#datepicker" ).datepicker();

  });

  </script>


<style type="text/css">
body,td,th {
	color: #000;
	background-color: #FFF;
}
</style>
 
<h2></h2>

    <div>
     <form id="tab" action="<?php echo site_url('workflow/update_section1') ?>" method="POST">
     <div>
       <input style="width:200px;" type="hidden" name="wid1" width ="70%"id="fe1x61" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id1" width ="70%"id="coxa61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id1" width ="70%"id="cox61" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="sl1id1" width ="70%"id="coxx61" value="<?php echo $slotnumber?>" />
     
    <input style="width:200px;" type="hidden" name="man11" width ="70%"id="eqwz461" value="<?php echo $manufacturer?>" />
    <table width="1170" height="56" border="1" style="position:absolute;left:6%;top:5100px">
  <tr>
    <td width="592" style="background-color: greenyellow;font-weight: bold; font-size: 26px;">Equipment Id: <input type="text" value="<?php echo $equipmentid?>" style="position:absolute;width:200px;font:bold 17px Times New Roman;height:30px" name="eqid" id="fe2" /></td>
    <td width="562"style="background-color: greenyellow;"><span style="background-color: greenyellow;font-weight: bold;font-size: 26px;">Date Started: <input type="text" style="position:absolute;font:bold 17px Times New Roman;width:250px;height:30px" name="datestarted" id="fe3" /> </span></td>
  </tr>
</table>
        
        


<img src="/ims/image/Screenshot (1)(1).png" alt="iso" id="aja" width="412" height="270" style="position: absolute; left: 180px; top: 5200px"/>
<img src="/ims/image/Dimen.jpg" alt="iso" id="aja" width="412" height="273" style=" position: absolute;width:500px; left: 680px; top: 5200px"/>




<table width="200" border="1" style="position: absolute; left: 85px; top:5500px; width: 1111px; height: 172px;">
  <tr>
    <th width="111" scope="row">Dimension</th>
    <td width="62" style="alignment-adjust:central;font: bold 25px Times New Roman"> L</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">S</td>
    <td width="69" style="alignment-adjust:central;font: bold 25px Times New Roman">W</td>
    <td width="64" style="alignment-adjust:central;font: bold 25px Times New Roman">P</td>
    <td width="63" style="alignment-adjust:central;font: bold 25px Times New Roman">H</td>
    <td width="67" style="alignment-adjust:central;font: bold 25px Times New Roman">D1</td>
    <td width="61" style="alignment-adjust:central;font: bold 25px Times New Roman">D2</td>
    <td width="76" style="alignment-adjust:central;font: bold 25px Times New Roman">K1</td>
    <td width="70" style="alignment-adjust:central;font: bold 25px Times New Roman">D3</td>
    <td width="61" style="alignment-adjust:central;font: bold 25px Times New Roman">D4</td>
    <td width="70" style="alignment-adjust:central;font: bold 25px Times New Roman">K2</td>
    <td width="62" style="alignment-adjust:central;font: bold 25px Times New Roman">D5</td>
    <td width="62" style="alignment-adjust:central;font: bold 25px Times New Roman">D6</td>
     <td width="62" style="alignment-adjust:central;font: bold 25px Times New Roman">K3</td>
  </tr>
  <tr>
    <th scope="row">Nominal</th>
    <td  style="alignment-adjust:central;font: bold 25px Times New Roman">6058</td>
    <td  style="alignment-adjust:central;font: bold 25px Times New Roman">5853</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2438</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2259</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2438</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
     <td  style="alignment-adjust:central;font: bold 25px Times New Roman">13</td>
     <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
       <td  style="alignment-adjust:central;font: bold 25px Times New Roman">13</td>
        <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
     <td style="alignment-adjust:central;font: bold 25px Times New Roman;">10</td>
  </tr>
  <tr>
    <th scope="row">Actual-Initial</th>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_S?>" name="ac2" id="ac1" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_W?>"name="ac3" id="ac2" /></td>-
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_P?>"name="ac4" id="ac3" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_H?>"name="ac5" id="ac4" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D1?>"name="ac6" id="ac5" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D2?>"name="ac7" id="ac6" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_K1?>"name="ac8" id="ac7" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D3?>"name="ac9" id="ac8" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D4?>"name="ac10" id="ac9" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_K2?>"name="ac11" id="ac10" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D5?>"name="ac12" id="ac11" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D6?>"name="ac13" id="ac12" /></td>
     <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_K3?>"name="ac14" id="ac12" /></td>
  </tr>
  <tr>
    <th scope="row">Actual-Final</th>
    <td style=" font: bold 25px Times New Roman;background-color:#000"></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_S?>"name="af2" id="af1" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_W?>"name="af3" id="af2" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_P?>"name="af4" id="af3" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_H?>"name="af5" id="af4" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D1?>"name="af6" id="af5" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D2?>"name="af7" id="af6" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_K1?>"name="af8" id="af7" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D3?>"name="af9" id="af8" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D4?>"name="af10" id="af9" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_K2?>"name="af11" id="af10" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D5?>"name="af12" id="af11" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D6?>"name="af13" id="af12" /></td>
    <td><input type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_K3?>"name="af14" id="af13" /></td>
  </tr>
    
      
    
</table>
 
<label style="alignment-adjust:central;font: bold 22px Times New Roman;position:absolute;left:8%;top:5680px"> Frame conforms to the dimensional requirements of ISO 668-1979(E)</label>


<table  border="1"style="position:absolute;left:6%;top:5720px;width:1170px;height:66px;">
  <tr>
      <td width="592" style="font-weight: bold; font-size: 20px;"> <label>Technician:<input style=width:200px;height:30px;alignment-adjust:central;" value="<?php echo $row2->Technician?>" type="text" name ="tech"  </label></td>
                
    <td width="562"><span style="font-size: 20px; font-weight: bold;"><label>Date: 
   <input type="text" style=width:200px;height:30px;" value="<?php echo $row2->Date?>"name="date2" id="datepicker" /></label> </span></td>
  </tr>
</table>
    <table width="1170" height="46" border="1" style="position:absolute;left:6%;top:5000px;">
  <tr>
      <td width="279" height style="background-color: lightseagreen;font-weight: bold; font-size: 36px;"><img height="65" src="/ims/image/download.jpg"  /></td>
    <td width="475" style="background-color: lightseagreen;font-size: 24px; font-weight: bold;"<span style="background-color: lightseagreen;font-size: 24px; font-weight: bold;">Title: 20 ft ISO Container Dimension Record</spam></td>
    <td width="222"style="background-color: lightseagreen;"><span style="background-color: lightseagreen;font-size: 24px; font-weight: bold;">Issue: F02.04</span></td>
    <td width="166" style="background-color: lightseagreen;"><span style="background-color: lightseagreen;font-size: 24px; font-weight: bold;">Revision:</span></td>
  </tr>
  
</table>


 
  <script type="text/javascript">    
    document.getElementById("fe3").value = Date().toString();    
</script> 


</div>
         <script > 
 function changetocolor111(color){
   
  document.getElementById("readcolor11").value =color;



}




  </script>
            
 <input type="hidden" name="redcolor" id="readcolor11" />
    </form>
 
    
    
    
    
    
   <h2></h2>
       
         <?php $row = $this->work_model->get_by_wkid($workorderid); ?>   
            







<form id="form432431" action="<?php echo site_url('workflow/isoinspecframerecord1') ?>" method="POST">
      <input style="width:200px;" type="hidden" name="wid" width ="70%"id="fe161" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id" width ="70%"id="co61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id" width ="70%"id="co61" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="sl1id" width ="70%"id="co61" value="<?php echo $slotnumber?>" />
     <input style="width:200px;" type="hidden" name="man1" width ="70%"id="eqw461" value="<?php echo $manufacturer?>" />
      
    
<table width="1175" height="107" border="1" style="position: absolute; left: 89px; top: 2000px; height: 101px;">
  <tr>
    <th width="304" height="101" scope="row"><img src="\ims\image\download.jpg"  /></th>
    <td width="492" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Title:</p>
    <p>20 feet Iso container dimension record</p></td>
    <td width="133" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Issue:</p>
    <p>F02.04</p></td>
    <td width="218" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Revision</p>
    <p> </p></td>
  </tr>
</table>
<table width="1172" height="65" border="1" style="position: absolute; left: 89px; top: 2104px; height: 101px;">
  <tr>
   <th width="598" height="59"  valign="center" style="font: bold 15px Times New Roman" scope="row"><p>15T Iso frame record inspection</p>
    </t>  <th width="558"  valign="center" height="59"   style="font: bold 15px Times New Roman" scope="row">FrameID:
    <input type="text" value="<?php echo $equipmentid?>"name="techid" width ="450px"id="fe5" /></th>
  </tr>
</table>
<table width="994"  border="1" style="position: absolute; left: 89px; top: 2205px; height: 125px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Rear</p></th>
    <td width="78" align="center">1</td>
    <td   style="font: bold 20px Times New Roman" width="231"> Diagonal</td>
    <td width="181">
    <input style="width:200px;" type="text" value="<?php echo $row->RearDiagnoll; ?>" name="rear1_bobu18t" width ="80%"id="fe16" /></td>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;height:200px; "src="\ims\image\15TInspection REAR.jpg" /></th>
  </tr>
  <tr>
    <td  valign="right" align="center">2</td>
    <td  style="font: bold 20px Times New Roman"></td>
    <td>
    </td>
  </tr>
  <tr>
    <td align="center">3</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td>
    <input style="width:200px;" type="text" value="<?php echo $row->RearBottomRail;?>"  name="rear3" width ="80%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">4</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td>
    <input style="width:200px;" type="text" value="<?php echo $row->RearCornerCasting;?>"  name="rear4" width ="80%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">5</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td>
   <input style="width:200px;" type="text" value="<?php echo $row->RearCornerPost;?>"  name="rear5" width ="80%"id="fe16" /></td>
  </tr>
   <tr>
  
    <td width="78" align="center">6</td>
    <td   style="font: bold 20px Times New Roman" width="231">Platform Support</td>
    <td width="199">
    <input style="width:200px;" type="text" value="<?php echo $row->RHSPlatformSupport ?>" name="RHSPlatformSupport" width ="70%"id="fe16" /></td>
   
    
  </tr>
   <tr>
    <td  valign="right" align="center">7</td>
    <td  style="font: bold 20px Times New Roman">Ladder</td>
    <td  style="font: bold 20px Times New Roman">
        <input style="width:200px;" type="text"value="<?php echo $row->RHSLadder ?>" name="RHSLadder" width ="70%"id="fe16" /></td>
  
  </tr>
  
</table>
<table width="994"  border="1" style="position: absolute; left: 89px; top:2420px; height: 300px; ">
 
  <tr>
        <th width="224" rowspan="10" scope="row"  style="font: bold 25px Times New Roman" ><p>Right Hand Side</p></th>
    <td align="center">8</td>
   
    <td  style="font: bold 20px Times New Roman">Front Diagonal</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->RHSFrontDiagonal ?>" name="rear8" width ="70%"id="fe16" /></td>
 <th width="224" rowspan="12" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;" src="\ims\image\15TInspection RHS.jpg" /></th>
  </tr>
  <tr>
    <td height="31" align="center">9</td>
    <td  style="font: bold 20px Times New Roman">Front Side Post</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->RHSFrontSidePost ?>" name="rear9" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td height="31" align="center">10</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->RHSFrontSaddle ?>" name="rear10" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td height="31" align="center">11</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->RHSFrontSidePost ?>" name="rear11" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">12</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" value="<?php echo $row->RHSSaddleGusset ?>"name="rear12" width ="70%"id="fe16" /></td>
    
  </tr>
  <tr>
    <td  align="center">13</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" value="<?php echo $row->RHSRearSaddle ?>"name="rear13" width ="70%"id="fe16" /></td>
 
  </tr>
  <tr>
    <td   align="center">14</td>
    <td style="font: bold 20px Times New Roman">Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" value="<?php echo $row->RHSRearSidePost ?>"name="rear14" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td align="center" >15</td>
    <td style="font: bold 20px Times New Roman">Rear Diagonal</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->RHSRearDiagonal ?>" name="rear15" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center" >16</td>
    <td style="font: bold 20px Times New Roman">Diagonal Guesset</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->RHSDiagonalGusset ?>" name="rear16" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center" >17</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->RHSCornerGusset ?>" name="rear17" width ="70%"id="fe16" /></td>
  </tr>
</table>

<table width="994" height="207" border="1" style="position: absolute; left: 89px; top:2850px; height: 175px;">
   <tr>
    <th width="224" rowspan="6" scope="row"  style="font: bold 25px Times New Roman" ><p>Front</p></th>
    <td width="78" align="center">18</td>
    <td   style="font: bold 20px Times New Roman" width="231">Diagonal</td>
    <td width="199"><input style="width:200px;" type="text"value="<?php echo $row->FrontLongDiagonal ?>" name="rear18" width ="70%"id="fe16" /></td>
    <th width="224" rowspan="6" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;" src="\ims\image\15TInspection FRONT.jpg"  /></th>
  </tr>
  <tr>
    <td  valign="right" align="center">19</td>
    <td  style="font: bold 20px Times New Roman"></td>
    <td></td>
  </tr>
  
  <tr>
    <td align="center">20</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->FrontBottomRail ?>" name="rear20" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">21</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->FrontCornerCasting?>" name="rear21" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">22</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->FrontCornerPost ?>" name="rear22" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">23</td>
    <td style="font: bold 20px Times New Roman"></td>
    <td></td>
  </tr>
  <tr>
    
  </tr>
</table>
<table width="994" height="298" border="1" style="position: absolute; left: 89px; top:3100px; height: 290px; ">
  <tr>
    <th width="224" rowspan="12" scope="row"  style="font: bold 25px Times New Roman" ><p>Left Hand Side</p></th>
    <td   height="27" align="center">24</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->FrontCornerGusset?>" name="rear24" width ="70%"id="fe16" /></td>
    <th width="224" rowspan="12" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;" src="\ims\image\15Inspection LHS.jpg" /></th>
  </tr>
  <tr>
    <td width="78" align="center">25</td>
    <td   style="font: bold 20px Times New Roman" width="231">Front Diagonal</td>
    <td   style="font: bold 20px Times New Roman" width="181"><input style="width:200px;" type="text"value="<?php echo $row->LHSFrontDiagonal ?>" name="rear25" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">26</td>
    <td  style="font: bold 20px Times New Roman">Front Sidepost</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSFrontSidepost ?>" name="rear26" width ="70%"id="fe16" /></td>
  
  </tr>
   
  <tr>
    <td align="center">27</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSFrontSaddle ?>" name="rear27" width ="70%"id="fe16" /></td>

  </tr>
  <tr>
    <td height="31" align="center">28</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" value="<?php echo $row->LHSBottomRail?>"name="rear28" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">29</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSSaddleGuesset ?>" name="rear29" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td  valign="right" align="center">30</td>
    <td  style="font: bold 20px Times New Roman">ladder</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSLadderHandrail?>" name="rear30" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">31</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSRearSaddle ?>" name="rear31" width ="70%"id="fe16" /></td>
 
  </tr>
  <tr>
    <td    align="center">32</td>
    <td style="font: bold 20px Times New Roman">Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text"value="<?php echo $row->LHSRearSidepost?>" name="rear32" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td align="center" >33</td>
    <td style="font: bold 20px Times New Roman">Rear Diagonal</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->LHSRearDiagnol?>" name="rear33" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">34</td>
    <td style="font: bold 20px Times New Roman">Diagonal Guesset</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->LHSDiagnolGuesset ?>" name="rear34" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center" >35</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->LHSCornerGuesset ?>" name="rear35" width ="70%"id="fe16" /></td>
  </tr>
</table>

<table width="994" height="207" border="1" style="position: absolute; left: 89px; top:3510px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Top</p></th>
    <td width="78" align="center">36</td>
    <td   style="font: bold 20px Times New Roman" width="231">Platform</td>
    <td width="199"><input style="width:200px;" type="text"value="<?php echo $row->Topplatform ?>" name="rear36" width ="70%"id="fe16" /></td>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;"src="\ims\image\15TInspection TOP.jpg" /></th>
  </tr>
  <tr>
    <td  valign="right" align="center">37</td>
    <td  style="font: bold 20px Times New Roman">Rear Top  Rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopRearTopRail ?>" name="rear37" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">38</td>
    <td  style="font: bold 20px Times New Roman">LH Top Rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopLHTopRail?>" name="rear38" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">39</td>
    <td  style="font: bold 20px Times New Roman">RH Top Rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopRHTopRail?>" name="rear39" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">40</td>
    <td style="font: bold 20px Times New Roman">Front Top rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopFrontTopRail ?>" name="rear40" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">41</td>
    <td style="font: bold 20px Times New Roman">Removable Rail</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopRemovableRail ?>" name="rear41" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">42</td>
    <td style="font: bold 20px Times New Roman">Removable Rail Brack</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->TopRemovableRailBrackets?>" name="rear42" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="994"  border="1" style="position: absolute; left: 89px; top:3750px; height: 100px;">
  <tr>
    <th width="224" rowspan="4" scope="row"  style="font: bold 25px Times New Roman" ><p>Bottom</p></th>
    <td width="78" align="center">43</td>
    <td   style="font: bold 20px Times New Roman" width="231">Longitude</td>
    <td width="199"><input style="width:200px;" type="text"value="<?php echo $row->BottomLongitudes ?>" name="rear43" width ="70%"id="fe16" /></td>
    <th width="224" rowspan="4" scope="row"  style="font: bold 25px Times New Roman" ><img style="width:200px;"src="\ims\image\15TInspection BOTTOM.jpg" /></th>
  </tr>
 
  <tr>
    <td  align="center">44</td>
    <td style="font: bold 20px Times New Roman">Diagnol</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->BottomDiagonals ?>" name="rear44" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">45</td>
    <td style="font: bold 20px Times New Roman">Saddle Beams</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->BottomSaddleBeams?>" name="rear45" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">46</td>
    <td style="font: bold 20px Times New Roman">Center Beam</td>
    <td><input style="width:200px;" type="text"value="<?php echo $row->BottomCentreBeam?>" name="rear46" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="994"  border="1" style="position: absolute; left: 89px; top: 1675px; height: 41px;">
 <tr>
    <th width="497" rowspan="1" scope="row"  style="font: bold 25px Times New Roman" >Inspected By:
    <input style="font: bold 20px Times New Roman;width:250px" type="text"value="<?php echo $row->InspectedBy ?>" name="rear47" width ="70%"id="fe16" /></th>
    <td width="497" align="center"style="font: bold 25px Times New Roman">Date:
    <input style="font: bold 20px Times New Roman;width:150px;" type="text" value="<?php echo $row->Datepage1 ?>"name="rear48" width ="70%"id="datepicker1" /></td>
  
  </tr>
 
  
</table>
     <input type="hidden" name="readcolor" id="readcolor1" />
      <script>
   $(function(){
       
       $("#datepicker1").datepicker();
   });
</script>
       <div>
             <script > 
 function changetocolor22(color){
   
  document.getElementById("readcolor1").value = color;
}

  </script>     
           </div>
</form>
        
    
    
    
    
    
    
    
   
    
  
          
 
         
         
             
<form id="form221" action="<?php echo site_url('isocontainer/isoinspectionrecord') ?>" method="POST">
   
    <input style="width:200px;" type="hidden" name="wid3" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id3" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id3" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man3" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id3" width ="70%"id="co64321" value="<?php echo $slotnumber?>" /><table width="751" border="1" style="position: absolute; left: 2%; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">

          <tr>
    <td width="232" height="40px"><img src="\ims\image\download.jpg"  width="200" height="67" alt="chem" /></td>
    <td width="199" height="61" align="center">
        <label style="font-weight:bold;font-size: 24px;">Issue:F02.23</label>
        
    </td>
    <td width="141" height="61px" style="font-weight:bold;font-size: 24px;" align="center"> Page 1 of 2</td>
    <td width="180" height="61" align="center">
      <label style="font-weight:bold;font-size: 24px;">REVISION</label>
      </td>
  </tr>
  <tr>
    <td height="35" colspan="2" align="center" style="font-weight:bold;font-size: 24px;">15T ISO Container Inspection Record</td>
    <td colspan="2" align="center">
      <label for="tx3"style="font-weight:bold;font-size: 24px;">Vessel ID: BOBU000</label>
      <input style="font-weight:bold;font-size: 16px;"type="text" value="<?php echo $equipmentid?>" name="vesselid" id="tx3" />
  </td>
  </tr>
</table>
    
    
    
     
    
    
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:690px;" id="btn11" value="41" onclick="setColor('btn11','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:760px;" id="btn12" value="46" onclick="setColor('btn12','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:800px;" id="btn13" value="45" onclick="setColor('btn13','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:840px;" id="btn14" value="44" onclick="setColor('btn14','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:880px;" id="btn15" value="43" onclick="setColor('btn15','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:920px;" id="btn16" value="42" onclick="setColor('btn16','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:170px;top:990px;" id="btn17" value="41" onclick="setColor('btn17','#fff200');" /> 
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:690px;" id="btn18" value="35" onclick="setColor('btn18','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:760px;" id="btn19" value="40" onclick="setColor('btn19','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:800px;" id="btn20" value="39" onclick="setColor('btn20','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:840px;" id="btn21" value="38" onclick="setColor('btn21','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:880px;" id="btn22" value="37" onclick="setColor('btn22','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:920px;" id="btn23" value="36" onclick="setColor('btn23','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:310px;top:990px;" id="btn24" value="35" onclick="setColor('btn24','#fff200');" /> 
   
   
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:690px;" id="btn25" value="29" onclick="setColor('btn25','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:760px;" id="btn26" value="34" onclick="setColor('btn26','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:800px;" id="btn27" value="33" onclick="setColor('btn27','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:840px;" id="btn28" value="32" onclick="setColor('btn28','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:880px;" id="btn29" value="31" onclick="setColor('btn29','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:920px;" id="btn30" value="30" onclick="setColor('btn30','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:470px;top:990px;" id="btn31" value="29" onclick="setColor('btn31','#fff200');" /> 
   
   
    
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:585px;top:760px;" id="btn32" value="28" onclick="setColor('btn32','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:585px;top:800px;" id="btn33" value="27" onclick="setColor('btn33','#fff200');" /> 
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:585px;top:840px;" id="btn34" value="26" onclick="setColor('btn34','#fff200');" /> 
     <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:585px;top:880px;" id="btn35" value="25" onclick="setColor('btn35','#fff200');" /> 
      <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:585px;top:920px;" id="btn36" value="24" onclick="setColor('btn36','#fff200');" /> 
  
  
  
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:690px;" id="btn37" value="18" onclick="setColor('btn37','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:760px;" id="btn38" value="23" onclick="setColor('btn38','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:800px;" id="btn39" value="22" onclick="setColor('btn39','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:840px;" id="btn40" value="21" onclick="setColor('btn40','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:880px;" id="btn41" value="20" onclick="setColor('btn41','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:920px;" id="btn42" value="19" onclick="setColor('btn42','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:700px;top:990px;" id="btn43" value="18" onclick="setColor('btn43','#fff200');" /> 
   
   
   
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:690px;" id="btn44" value="12" onclick="setColor('btn44','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:760px;" id="btn45" value="17" onclick="setColor('btn45','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:800px;" id="btn46" value="16" onclick="setColor('btn46','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:840px;" id="btn47" value="15" onclick="setColor('btn47','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:880px;" id="btn48" value="14" onclick="setColor('btn48','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:920px;" id="btn49" value="13" onclick="setColor('btn49','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:840px;top:990px;" id="btn50" value="12" onclick="setColor('btn50','#fff200');" /> 
   
   
  
  
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:690px;" id="btn51" value="6" onclick="setColor('btn51','#fff200');" /> 
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:760px;" id="btn52" value="11" onclick="setColor('btn52','#fff200');" />               
 <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:800px;" id="btn53" value="10" onclick="setColor('btn53','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:840px;" id="btn54" value="9" onclick="setColor('btn54','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:880px;" id="btn55" value="8" onclick="setColor('btn55','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:920px;" id="btn56" value="7" onclick="setColor('btn56','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:990px;" id="btn57" value="6" onclick="setColor('btn57','#ff0000');" /> 
   
   
   
  
  
  
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:405px;top:545px;" id="btn58" value="52" onclick="setColor('btn58','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:500px;top:545px;" id="btn59" value="53" onclick="setColor('btn59','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:595px;top:545px;" id="btn60" value="54" onclick="setColor('btn60','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:695px;top:545px;" id="btn61" value="55" onclick="setColor('btn61','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:790px;top:545px;" id="btn62" value="52" onclick="setColor('btn62','yellow');" /> 
 
   
    
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:155px;top:310px;" id="btn63" value="59" onclick="setColor('btn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:355px;top:310px;" id="bktn57" value="57" onclick="setColor('bktn57','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:865px;top:310px;" id="btin65" value="65" onclick="setColor('btin65','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:930px;top:310px;" id="bktn66" value="66" onclick="setColor('bktn66','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:270px;" id="bhtn63" value="63" onclick="setColor('bhtn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:270px;" id="btkn60" value="60" onclick="setColor('btkn60','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:350px;" id="bttn58" value="62" onclick="setColor('bttn58','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:350px;" id="btnr59" value="61" onclick="setColor('btnr59','#fff200');" /> 
  
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:195px;" id="btkp60" value="56" onclick="setColor('btkp60','#fff200');" /> 
   
   <input type="button" class="default span btn  btn-default btn-circle"style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:426px;" id="botn58" value="58" onclick="setColor('botn58','#fff200');" /> 
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 34px;z-index: 10;height: 34px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;position:absolute;z-index: 10;font-weight: bold;line-height: 1.42;border-radius: 15px;left:925px;top:230px;" id="btkp68" value="66" onclick="setColor('btkp68','#fff200');" /> 
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:935px;top:390px;" id="botn68" value="64" onclick="setColor('botn68','#fff200');" /> 
  
   
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1090px;" id="btn151" value="47" onclick="setColor('btn151','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1170px;" id="btn161" value="51" onclick="setColor('btn161','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1250px;" id="btn171" value="49" onclick="setColor('btn171','#fff200');" />
   
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1090px;" id="btn152" value="1" onclick="setColor('btn152','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1170px;" id="btn162" value="5" onclick="setColor('btn162','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1250px;" id="btn172" value="3" onclick="setColor('btn172','#fff200');" />
  
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:180px;top:1170px;" id="btn163" value="50" onclick="setColor('btn163','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:320px;top:1170px;" id="btn165" value="48" onclick="setColor('btn165','#fff200');" /> 
   
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:850px;top:1170px;" id="btn164" value="4" onclick="setColor('btn164','#fff200');" /> 
     <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:1170px;" id="btn166" value="2" onclick="setColor('btn166','#fff200');" /> 
   
     
    <input type="text"value="<?php echo $row3->vent ?>" name="vent" id="tx1 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1170px;" /> 
    <input type="text"value="<?php echo $row3->air ?>" name="air/n2"  id="tx2 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1210px;" />
  
    <input type="text"value="<?php echo $row3->fill?>"  name="fill" id="tx4 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1130px;" />
   <input type="text" value="<?php echo $row3->batchno ?>" name="batchno" id="tx5 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:445px;top:1363px;" />
   <input type="text"value="<?php echo $row3->clean ?>" name="clean"  id="tx6 "style="width: 308px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:465px;top:1610px;" />
   <input type="text" value="<?php echo $row3->date ?>" name="datepicker" id="datepicker21"style="width:160px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:855px;top:1610px;" />
   
   <input type="text"  name="repairs" value="<?php echo $row3->repairs ?>" cols="30" style="width: 880px;height: 168px;top:1430px;z-index: 10;position: absolute;left:160px;"rows="4"/>
   
    <input type="text" id="tb2" name ="hcells"style="display: none;"   class="input-xlarge">
   
   
    <img src="\ims\image\rings.jpg" style="position: absolute; left: 153px; top: 150px; height:310px; width: 900px;" />
    <label style="position: absolute; left: 50px; top: 820px;font-size: 35px" >Front</label>
    
     <label style="position: absolute; left: 1060px; top: 820px;font-size: 35px" >Rear</label>
         <img src="\ims\image\ajay.jpg" style="position: absolute; left: 150px; top: 700px; height:310px; width: 900px;" />
      <img src="\ims\image\zoom.jpg" style="position: absolute; left: 150px; top: 1350px; height:310px; width: 900px;" />
 <img src="\ims\image\pic2.jpg" style="position: absolute; left: 150px; top: 460px; height:200px; width: 900px;" />
 
 <img src="\ims\image\aoculast.png" style="position: absolute; left: 150px; top: 1060px; height:250px; width: 900px;" />

 
 
  <script > 
 function setColor(btnid,color){
   var val;
var property=document.getElementById(btnid);
if (property.style.backgroundColor ==="red") {
property.style.backgroundColor=color;

}

else {
property.style.backgroundColor = "red";


}

 var s = document.getElementByName("txbx");

    s.value =btnid;
}
  </script>
 
  <script > 
 function getColor(){
  
 
  var valcell=new Array(); 
   var j=0;
 var  x = document.getElementById("form221");


for (var i=0; i<x.length; i++)
  {
      
  if(x.elements[i].style.backgroundColor==='red')
  {
      valcell[j]=x.elements[i].id;
       j=j+1;
  } 
}
   document.getElementById("tb2").value = valcell.toString(); 
  
  }
  </script>
   <script>

  $(function() {

    $( "#datepicker21" ).datepicker();

  });

  </script>
  <script > 
 function set1Color(btnid){
     var cell=btnid.split(",");
   for(var i=0;i<=cell.length;i++){
var property=document.getElementById(cell[i]);



property.style.backgroundColor = "red";
   }

}
  </script>
  
  
      
                 <div>
                  
                    
               </div>
     
               
         </form>            
         
          
        </div>
     <h2></h2>   
    
    
    
    
    
    
            <?php $row4 = $this->work_model->get_by_sec4($workorderid); ?> 
            <form id="form1" name="form1" method="post" action="<?php echo site_url("workflow/update_frameinssection4") ?>">
                 <input style="width:200px;" type="hidden" name="wid9" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id9" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id9" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man9" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id9" width ="70%"id="co64321" value="<?php echo $slotnumber?>" /><table width="751" border="1" style="position: absolute; left: 2%; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">

    <table width="989" border="1" style="position: absolute; left: 167px; top: 3950px; width: 754px; height: 388px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
  
         <tr>
      
    <td height="101" colspan="2"><img src="..\image\download.jpg"  width="224" height="97" alt="chem" /></td>
    <td width="228" height="101" align="center" style="background-color:lightseagreen;">
        <label for="tx1">Issue</label>
        <input name="issue" type="text" id="tx1" value="<?php echo $row4->issue ?>" />
    </td>
    <td width="74" align="center" style="background-color:lightseagreen;"> Page 2 of 2</td>
    <td width="187" align="center"style="background-color:lightseagreen;">
      <label for="tx2">Revision:</label>
      <input type="text" name="revision" id="tx2" value="<?php echo $row4->revision?>" />
    </td>
  </tr>
  <tr>
    <td height="35" colspan="3" align="center" style="background-color:greenyellow;">1T ISO Frame Inspection Record</td>
    <td colspan="2" align="center" style="background-color:greenyellow;">
      <label for="tx3">FrameID:</label>
      <input type="text"  value="<?php echo $equipmentid ?>" name="tx3" id="tx3" />
    </td>
  </tr>
  <tr>
    <td height="280" colspan="5" align="left" valign="top"> 
        <label><strong>SECTION1</strong></label>
<p>Frame repairs as specified on page 1 complete</p>
  <label for="section1text"></label>
<input type="text" value="<?php echo $row4->Section1FrameRepairsAsSpecifiedOnPage1Complete?>" name="section1text" id="section1text" cols="55" rows="5"></input>

<p>&nbsp;</p>
<p>
<label>Signature</label>
<label for="section1staff"></label>
<input type="text" value="<?php echo $row4->Section1Signature?>"name="section1staff" id="section1staff" />
<label for="datepicker111">Date</label>
  <input type="text" value="<?php echo $row4->section1Date?>"name="datepicker111" id="datepicker111" />
  </p>
<p>
  <label><strong>SECTION2</strong></label>
</p>
<p>Manlid Cover assembly - Repairs required:</p>
<p>
  <input type="text" value="<?php echo $row4->Section2ManlidCoverAssemblyRepairsRequired?>"name="section2text" id="section2text" cols="55" rows="5"></input>
 </p>
  <p>
      <label for="list1">Repairs Complete:</label>
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue44').value=this.options[this.selectedIndex].text; document.getElementById('idValue44').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">Complete</option>
  <option value="two">Not complete</option>
  <option value="three">No Repair</option>
  <option value="four">N/A</option>
</select>
<input name="displayValue44" placeholder="add/select a value" id="displayValue44"value="<?php echo $row4->Section2RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue44" id="idValue44" type="hidden">
</div>
  </p>
  <p>
  <label>Signature</label>
  <label for="section2staff"></label>
  <input type="text" value="<?php echo $row4->Section2Signature?>"name="section2staff" id="section2staff" />
  <label for="datepicker2">Date</label>
  <input type="text" value="<?php echo $row4->Section2Date?>"name="datepicker2" id="datepicker2" />
  </p>

<p>
  <label><strong>SECTION3</strong></label>
</p>
<p>Other Repairs required:</p>
<p>
  <input type="text" value="<?php echo $row4->Section3OtherRepairsRequired?>"name="section3text" id="section3text" cols="55" rows="5"></input>
  </p>
<p>
    <label for="list3">Repairs Complete:</label>
           <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue55').value=this.options[this.selectedIndex].text; document.getElementById('idValue55').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="one">Complete</option>
  <option value="two">Not complete</option>
  <option value="three">No Repair</option>
  <option value="four">N/A</option>
</select>
<input name="displayValue55" placeholder="add/select a value" id="displayValue55"value="<?php echo $row4->Section3RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue55" id="idValue55" type="hidden">
</div>
 </p>
<p>
  <label>Signature</label>
  <label for="section3staff"></label>
  <input type="text" value="<?php echo $row4->Section3Signature?>"name="section3staff" id="section3staff" />
  <label for="datepicker3">Date</label>
  <input type="text" value="<?php echo $row4->Section3Date?>"name="datepicker3" id="datepicker3" />
</p>
<p>
  <label><strong>SECTION4</strong></label>
</p>
<p>Paintwork &amp; Labels/Lettering - Repairs required::</p>
<p>
  <input type="text" value="<?php echo $row4->Section4PaintworkandlabelsorlatteringRepairsRequired ?>"name="section4text1" id="section4text1" cols="55" rows="5"></input>
  <label><br />
  </label>
</p>
<p>
<label for="list2">Repairs required:</label>
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue66').value=this.options[this.selectedIndex].text; document.getElementById('idValue66').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="one">Complete</option>
  <option value="two">Not complete</option>
  <option value="three">No Repair</option>
  <option value="four">N/A</option>
</select>
<input name="displayValue66" placeholder="add/select a value" id="displayValue66" value="<?php echo $row4->Section4RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue66" id="idValue66" type="hidden">
</div>  
</p>

<p>
  <label>    Signature</label>
  <label for="section4staff"></label>
  <input type="text" value="<?php echo $row4->Section4Signature?>"name="section4staff" id="section4staff" />
  <label for="datepicker4">Date</label>
  <input type="text" value="<?php echo $row4->Section4Date?>"name="datepicker4" id="datepicker4" />
</p>
<p><strong>Frame fit for Service:</strong></p>
<p>
   <label>Signature</label>
  <label for="section5staff"></label>
  <input type="text" value="<?php echo $row4->FrameFitforServiceSignature?>" name="FrameFit1" id="section5staff" />
  <label for="datepicker5">Date</label>
  <input type="text" value="<?php echo $row4->FrameFitForServiceDate?>" name="FrameFit2" id="datepicker5" />
  
</p>
   <script > 
 function changetocolor(color){
   
  document.getElementById("redcolor").value = color;

}
  </script>
 <input type="hidden" name="redcolor" id="redcolor" />
<script>
    $(function(){
        
        $("#datepicker111").datepicker();
    });
</script>
<script>
    $(function(){
        
        $("#datepicker2").datepicker();
    });
</script>
<script>
    $(function(){
        
        $("#datepicker3").datepicker();
    });
</script>
<script>
    $(function(){
        
        $("#datepicker4").datepicker();
    });
</script>
<script>
    $(function(){
        
        $("#datepicker5").datepicker();
    });
</script>

<p>&nbsp;</p>

  
 
</table>
                 
</form>
            
    
 
</div>
    
    
    
 
 <h2></h2>   
    
     
  
    
    
        
        <?php $row5 = $this->work_model->get_by_sec5($workorderid); ?> 
       <table width="697" border="1" style="position: absolute; left: 207px; top: 5800px; width: 711px; height: 1047px; font-weight: bold;">
       <form id="form1rhrttb" name="form1hrtyrt" method="post" action="<?php echo site_url("workflow/update_section5") ?>"> 
             <input style="width:200px;" type="hidden" name="wid8" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id8" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id8" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man8" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id8" width ="70%"id="co64321" value="<?php echo $slotnumber?>" />
      <tr>
    <td  style="background-color:lightseagreen;" height="33" align="center">BOBU ISO CONTAINER</td>
    <td  style="background-color:lightseagreen;" width="147" align="center">Page 2 of 2</td>
    <td  style="background-color:lightseagreen;" width="117" align="center">Issue:F02.23</td>
    <td  style="background-color:lightseagreen;" width="146" align="center">Revision</td>
  </tr>
  <tr  >
    <td style="background-color:greenyellow;" height="41" align="left">ITEM</td>
    <td style="background-color:greenyellow;" colspan="2" align="center">REPAIRS/REPLACEMENTS</td>
    <td style="background-color:greenyellow;">CERT No. REPAIR</td>
  </tr>
  <tr>
    <td align="left">Fill valve</td>
    <td colspan="2"> <input type="text" style="width:99%;"value = "<?php echo $row5->FillValve_RepairsorReplacements ?>" name="FV1"  id="textfield30" /></td>
     <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->FillValve_RepairNo?>"name="FV2"  id="textfield30" /></td>
  </tr>
  <tr>
    <td align="left">Vent Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->VentValve_RepairsorReplacements ?>"name="VV1"  id="textfield12" /></td>
     <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->VentValve_RepairNo?>"name="VV2"  id="textfield" /></td>
  </tr>
  <tr>
    <td>Air/N Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->AirValve_RepairsorReplacements?>"name="AV1"  id="textfield13" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->AirValve_RepairNo?>"name="AV2"  id="textfield3" /></td>
    
  </tr>
  <tr>
    <td>Relief Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> ReliefValve_RepairsorReplacements?>"name="RV1"  id="textfield14" /></td>
 
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> ReliefValve_RepairNo?>"name="RV2"  id="textfield2" /></td>
 
  </tr>
  <tr>
    <td>Bursting Disc</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> BurstingDisc_RepairsorReplacements?>"name="BD1"  id="textfield15" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> BurstingDisc_RepairNo?>"name="BD2"  id="textfield4" /></td>
    
  </tr>
   <tr>
    <td>Bursting Disc Holder</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> BustingDiscHolder_RepairsorReplacements?>" name="BDH1"  id="textfield1551" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> BustingDiscHolder_Repairs?>" name="BDH2"  id="textfield441" /></td>
    
  </tr>
  <tr>
    <td>Tell-Tale Assembly-Gauge</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> TellTaleAssemblyGauge_RepairsorReplacements?>"name="TT1"  id="textfield16" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->telltaleassemblygauagerepairno?>"name="TT2"  id="textfield5" /></td>
   
  </tr>
  <tr>
    <td>Needle valve</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5->NeedleValve_RepairsorReplacements ?>"name="NV1"  id="textfield17" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> NeedleValve_RepairNo?>"name="NV2"  id="textfield6" /></td>
    
  </tr>
  <tr>
    <td>Dip Pipe</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> DipPipe_RepairsorReplacements?>"name="DP1"  id="textfield19" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> DipPipe_RepairNo?>"name="DP2"  id="textfield8" /></td>
    
  </tr>
  <tr>
    <td>Special Studs</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> SpecialStuds_RepairsorReplacements?>"name="SS1"  id="textfield20" /></td>
  
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> SpecialStuds_RepairNo?>"name="SS2"  id="textfield9" /></td>
  
  </tr>
  <tr>
    <td>Manlid Bolts</td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> ManlidBolts_RepairsorReplacements?>"name="MB1"  id="textfield21" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> ManlidBolts_RepairNo?>"name="MB2"  id="textfield10" /></td>
   
  </tr>
  <tr>
    <td><p>Remarks</p></td>
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> Remarks_RepairsorReplacements?>"name="R1"  id="textfield22" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"value = "<?php echo $row5-> Remarks_RepairNo?>"name="R2"  id="textfield11" /></td>
   
  </tr>

  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Hydraulic Test</label></br></br>
        <label>The vessel was astisfactorily tested to </label> 
        <input type="text" value = "<?php echo $row5-> Hydraulic_psig?>" name="HyPsig"   value="" />  
        <label>PSIG in the presence of</label></br>          
        <input type="text" value = "<?php echo $row5->Hydraulic_Presenceof ?>"name="HyPrese"   value="" />  
        <label>of</label> 
        <input type="text" value = "<?php echo $row5->Hydraulic_date ?>"name="HyOf" style="width: 60%;"  value="" />  
        <label>on</label> </br>
        <input type="text" value = "<?php echo $row5-> Hydraulic_of?>"name="HyDate" style="width: 80%;"  value="" />     <label>for GLS</label> 
    </div>
    
    </td>
  </tr>
  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Leakproof Test</label></br></br>
        <label>The vessel was satisfactorily tested to </label>
        <input type="text" value = "<?php echo $row5-> Leakproof_psig?>" name="LeakPsig"   value="" />  
        <label>PSIG in the presence of</label></br> 
        <input type="text" value = "<?php echo $row5-> Leakproof_presenceof?>"name="LeakPrese"   value="" />  
        <label>of</label> 
        <input type="text" value = "<?php echo $row5-> LeakProof_date?>"name="LeakOf" style="width: 60%;"  />   <label>on</label> </br>
        <input type="text" value = "<?php echo $row5-> Leakproof_of?>"name="LeakDate" style="width: 80%;"  />     <label>for GLS</label> 
    </div>
    
    </td>
  </tr>
 <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Dryness</label></br></br>
        <label>The internal atmosphere of vessel was tested for dryness with the following results: </label><br></br>
        <label>Date & Time</label>
       <input id="demo923" type="text"  name="DryDate1"  value=" <?php echo $row5->Dryness_Date1 ?> "  style="width:170px;"><a href="javascript:NewCal('demo923','ddmmyyyy',true,'24')"><img src="../image/cal.gif" width="16"  height="16" border="0" alt="Pick a date"></a>  <label>Pressure</label><input type="text"  style="width:100px;"  name="DryPressu1"   value="<?php echo $row5->Dryness_Pressure1?>" />  <label>Psig</label> <label> Dryness</label>
        <input type="text" value = "<?php echo $row5->Dryness_DryC1 ?>"name="DryC1"  style="width:100px;"   value="" /><label>C</label>   <br>
        <label>Date & Time</label>
       <input id="demo924" type="text"  name="DryDate2"  value=" <?php echo $row5->Dryness_Date2 ?> "  style="width:170px;"><a href="javascript:NewCal('demo924','ddmmyyyy',true,'24')"><img src="../image/cal.gif" width="16"  height="16" border="0" alt="Pick a date"></a> <label>Pressure</label><input type="text"  style="width:100px;"  name="DryPressu2"   value="<?php echo $row5->Dryness_Pressure1?>" />  <label>Psig</label> <label> Dryness</label>
        <input type="text" value = "<?php echo $row5->Dryness_DryC2  ?>"name="DryC2"  style="width:100px;"   value="" /><label>C</label>   <br>
        
    </div>
    
    </td>
  </tr>
  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">This vessel is certified fit for bromine service</label></br></br>
        <label>The internal atmosphere of vessel was tested for dryness with the following results: </label><br></br>
        <label>Date & Time</label><input id="demo925" type="text" value = "<?php echo $row5->Certified_Date ?>"name="CertifiedDate" style="width:170px;"><a href="javascript:NewCal('demo925','ddmmyyyy',true,'24')"><img src="../image/cal.gif" width="16"  height="16" border="0" alt="Pick a date"></a>
       
        <label>By</label>
        <input type="text" value = "<?php echo $row5->Certified_By ?>"style="width:200px;"  name="CertifiedBy"   value="" /> 
        <label>for GLS</label>  </br></br>
        <script > 
 function changetocolor55(color){
   
  document.getElementById("redcolorrr").value = color;

}
  </script>
 <input type="hidden" name="redcolorrr" id="redcolorrr" />
     
            <br>
        
        
    </div>
    
    </td>
  </tr>
    
</table>

  </form>

        </div>
   
  
  
    
    
    
     <h2></h2>   
    
    
    
    
    
      
      
    <div class="tab-pane" id="tab_f">

          <?php $row6 = $this->work_model->get_by_bvpurging($workorderid); ?> 
        
<div align="left">
    <form id="form1uku" name="form1vsdcdsc" method="post" action="<?php echo site_url("workflow/bvpurgingrecord") ?>">
   <input style="width:200px;" type="hidden" name="wid7" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id7" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id7" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man7" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id7" width ="70%" id="co64321" value="<?php echo $slotnumber?>" />
  <table width="792" height="865" border="1" style="position: absolute; left: 5%; top: 7150px; font-weight: bold; width: 926px;">
   <tr>
      <td  height="63" colspan="2"><img src="\ims\image\download.jpg"  /></td>
      <td height="63" colspan="2"><div align="center">
        <p style="font-weight:bold;font-size:24px;">Issue:F01.02 </p>
        <p  style="font-weight:bold;font-size:24px;">Revision: </p>
      </div></td>
    </tr>
    <tr>
        <td height="53" colspan="4" style="background-color: greenyellow;"><p align="center"  style="font-weight:bold;font-size:30px;background-color:lightseagreen;">Bromine Vessel Purging Record</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td height="36" colspan="2" style="font-weight:bold;font-size:24px;">Equipment Id:</td>
      <td colspan="2" style="font-weight:bold;font-size:24px;">Date Started:</td>
    </tr>
    <tr>
      <td width="227" height="38"  style="font-weight:bold;font-size:24px;">Operation</td>
      <td width="223" style="font-weight:bold;font-size:24px;">Data</td>
      <td width="189" style="font-weight:bold;font-size:24px;">Date/Time</td>
      <td width="159"  style="font-weight:bold;font-size:24px;">Tech</td>
    </tr>
    <tr>
      <td>Caustic Tank Level</td>
      <td><div align="left">
        <input type="text" style="width:97%;"value = "<?php echo $row6->CausticTankLevelData?>"name="rear1" id="textfield6" />
      </div></td>
       <td>
           <input id="demo14"value = "<?php echo $row6->CausticTankLevelTime?>"name="rear2" type="text" style="width:90%;"><a href="javascript:NewCal('demo14','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td>
          <input type="text" style="width:97%;"value = "<?php echo $row6->CausticTankLevelTech?>"name="rear3" id="textfield28" /></td>
    </tr>
    <tr>
      <td>Caustic Flow</td>
      <td><div align="left">
          <input type="text" style="width:81%;"value = "<?php echo $row6->CausticFlowData?>"name="rear4"  id="textfield2" />
      gpm</div></td>
     <td>
         <input id="demo13"value = "<?php echo $row6->CausticFlowTime?>"name="rear5"  type="text" style="width:90%;"><a href="javascript:NewCal('demo13','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td>
          <input type="text" style="width:97%;"value = "<?php echo $row6->CausticFlowTech?>"name="rear6"  id="textfield29" /></td>
    </tr>
    <tr>
      <td height="26">Caustic Strength</td>
      <td><div align="left">
          <input type="text" style="width:77%;"value = "<?php echo $row6->CausticStrengthData?>" name="rear7" id="textfield3" />
          %w/w      </div></td>
  <td>
      <input id="demo12" type="text" value = "<?php echo $row6->CausticStrengthTime ?>" name="rear8"  style="width:90%;"><a href="javascript:NewCal('demo12','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td>
          <input type="text" style="width:97%;"value = "<?php echo $row6->CausticStrengthTech?>"name="rear9"  id="textfield30" /></td>
    </tr>
    <tr>
      <td>Air Dewpoint</td>
      <td><div align="left">
          <input type="text" style="width:89%;"value = "<?php echo $row6->AirDewpointData?>"name="rear10"  id="textfield4" />
      C</div></td>
      <td>
          <input id="demo11" type="text"value = "<?php echo $row6->AirDewpointTime?>" name="rear11" style="width:90%;"><a href="javascript:NewCal('demo11','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td>
          <input type="text" style="width:97%;"value = "<?php echo $row6->adptech?>"name="rear12"  id="textfield31" /></td>
    </tr>
    <tr>
      <td>Valves Connected &amp; Set</td>
      <td><div align="right">
        <input type="text" style="width:97%;"value = "<?php echo $row6->ValvesConnected_SetData?>"name="rear13"  id="textfield42" />
      </div></td>
       <td><input id="demo10" type="text"value = "<?php echo $row6->ValvesConnected_SetTime?>"name="rear14"  style="width:90%;"><a href="javascript:NewCal('demo10','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ValvesConnected_SetTech?>"name="rear15"  id="textfield32" /></td>
    </tr>
    <tr>
      <td>Air Pressure</td>
      <td><div align="left">
          <input type="text" style="width:81%;"value = "<?php echo $row6->AirPressureData?>"name="rear16"  id="textfield" />
        psig
      </div></td>
        <td><input id="demo9" type="text"value = "<?php echo $row6->AirPressureTime?>"name="rear17"  style="width:90%;"><a href="javascript:NewCal('demo9','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->AirPressureTech?>"name="rear18"  id="textfield33" /></td>
    </tr>
    <tr>
      <td>Air Temperature</td>
      <td><div align="left">
          <input type="text" style="width:89%;"value = "<?php echo $row6->AirTemperatureData?>"name="rear19"  id="textfield5" />
      F</div></td>
       <td><input id="demo8" type="text"value = "<?php echo $row6->AirTemperatureTime?>"name="rear20"  style="width:90%;"><a href="javascript:NewCal('demo8','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->AirTemperatureTech?>"name="rear21"  id="textfield34" /></td>
    </tr>
    <tr>
      <td>Venting Started</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VentingStartedData?>"name="rear22" id="textfield7" /></td>
       <td><input id="demo7" type="text"value = "<?php echo $row6->VentingStartedTime?>"name="rear23"  style="width:90%;"><a href="javascript:NewCal('demo7','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VentingStartedTech?>"name="rear24" id="textfield35" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Started</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashStartedData?>"name="rear25" id="textfield8" /></td>
       <td><input id="demo6" type="text"value = "<?php echo $row6->ThiosulphateWashStartedTime?>"name="rear26"  style="width:90%;"><a href="javascript:NewCal('demo6','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashStartedTech?>"name="rear27"  id="textfield36" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Complete</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashCompletedData?>"name="rear28"  id="textfield9" /></td>
        <td><input id="demo5"value = "<?php echo $row6->ThiosulphateWashCompletedTime?>" name="rear29" type="text" style="width:90%;"><a href="javascript:NewCal('demo5','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashCompletedTech?>"name="rear30"  id="textfield37" /></td>
    </tr>
    <tr>
      <td>Vessel Clean</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VesselCleanData?>"name="rear31"  id="textfield11" /></td>
       <td><input id="demo4" type="text"value = "<?php echo $row6->VesselCleanTime?>"name="rear32"  style="width:90%;"><a href="javascript:NewCal('demo4','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VesselCleanTech?>"name="rear33"  id="textfield38" /></td>
    </tr>
    <tr>
      <td height="26">Vessel Hydro</td>
      <td><div align="left">
        <input type="text" style="width:81%;"value = "<?php echo $row6->VesselHydroData?>"name="rear34"  id="textfield10" />
      psig</div></td>
        <td><input id="demo3" type="text"value = "<?php echo $row6->VesselHydroTime?>" name="rear35" style="width:90%;"><a href="javascript:NewCal('demo3','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VesselHydroTech?>"name="rear36" id="textfield39" /></td>
    </tr>
    <tr>
      <td>Vessel Dissembled</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VesselDisassembledData?>"name="rear37" id="textfield12" /></td>
      <td><input id="demo2" type="text"value = "<?php echo $row6->VesselDisassembledTime?>"name="rear38"  style="width:90%;"><a href="javascript:NewCal('demo2','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VesselDisassembledTech?>"name="rear39"  id="textfield40" /></td>
    </tr>
    <tr>
      <td>Confined Space Permit</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->ConfinedSpacePermitData?>"name="rear40"  id="textfield13" /></td>
     
    <td><input id="demo1" value = "<?php echo $row6->ConfinedSpacePermitTime?>"name="rear41"  type="text" style="width:90%;"><a href="javascript:NewCal('demo1','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
    <td><input type="text" style="width:97%;"value = "<?php echo $row6->ConfinedSpacePermitTech?>"name="rear42"  id="textfield15" /></td>
    </tr></form>
    <tr>
      <td>Vessel Ready for inspection</td>
      <td><input type="text" style="width:97%;"value = "<?php echo $row6->VESSELREADYFORINSPECTIONdate?>"name="rear413"  id="textfield13" /></td>
     
    <td><input id="demo21" type="text"value = "<?php echo $row6->VESSELREADYFORINSPECTIONtime?>"name="rear43"  style="width:90%;"><a href="javascript:NewCal('demo21','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
    <td><input type="text" style="width:97%;"value = "<?php echo $row6->VESSELREADYFORINSPECTIONtech?>"name="rear44"  id="textfield15" /></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><p style="font-weight: bold;">Comments:</p>
        <p align="center">
            <input value = "<?php echo $row6->BROMINEVESSELPURGINGRECORDComments?>"name="rear45" cols="70" rows="7" style="width:400px;height:100px;" id="txb"></input>
          <div>
                  
                     <script > 
 function changetocolor66(color){
   
  document.getElementById("rer").value = color;

}
  </script>
 <input type="hidden" name="rer" id="rer" />
  
    
    
    
                     
                </div>
      </td>
    </tr>
    </form>
  </table>
    
</div>
   
        
        </div>
    
    
    
     <h2></h2>   
    
    
    
  
         <form id="form212" action="<?php echo site_url('workflow/ercertificate') ?>" method="POST">
             <?php $row7 = $this->work_model->get_by_ercertificate($workorderid); ?>
              <input style="width:200px;" type="hidden" name="wid2" width ="70%"id="3261" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="coid2" width ="70%"id="co67671" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eqid2" width ="70%"id="656561" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="slid2" width ="70%"id="5656561" value="<?php echo $slotnumber?>" />
<table width="991" border="1" style="position: absolute; left:5%; top: 8200px;">
 <tr>
    <td  style="background-color:lightseagreen;" height="66" colspan="11"><img src="\ims\image\download.jpg"  /></td>
  </tr>
  <tr>
    <td  style="background-color:greenyellow;" height="39" colspan="11"> <div align="center" style="font-weight:bold;font-size:22px;">Equipment Release Certificate</div></td>
  </tr>
  <tr>
    <td height="57" colspan="5"style="font-weight:bold;font-size:16px;"><div align="right">
      <p align="center">Date Isuued:
        
<input id="demo23" type="text" name="textfield1" value="<?php echo $row7->DateIssued ?>"  style="width:170px;"><a href="javascript:NewCal('demo23','ddmmyyyy',true,'24')"><img src="../image/cal.gif" width="16"  height="16" border="0" alt="Pick a date"></a></td>
  
      </p>
    </div></td>
    <td colspan="3"><p align="center" style="font-weight:bold;font-size:16px;"> Issue:
        <input type="text" name="textfield2" value="<?php echo $row7->Issue?>" id="tx2" />
      </p>    </td>
    <td colspan="3"><div align="center"style="font-weight:bold;font-size:16px;">Revision</div></td>
  </tr>
  <tr>
    <td height="24" colspan="11"><div align="right">
      <p align="center" style="font-weight:bold;font-size:16px;">Equipment Id:
        <input type="text" name="eqid" id="tx4" value="<?php echo $equipmentid?>" />
      </p>
    </div></td>
  </tr>
  <tr>
    <td height="24" colspan="11"><div align="center"><span style="font-weight:bold;font-size:16px;">The following tests were carried out on the above vessel prior to release:</span></div></td>
  </tr>
  <tr>
    <td height="24" colspan="11"><p align="left"style="font-weight:bold;font-size:16px;">Manlid Equipment Torque Settings(ft-lbs):</p></td>
  </tr>
  <tr>
    <td height="34" colspan="2"><div align="center"><strong>Item </strong></div></td>
    <td colspan="2"><strong>Initial Torque setting</strong></td>
    <td colspan="3"><strong>Final torque setting</strong></td>
    <td colspan="2"><strong>Tightning required   </strong></td>
    <td width="195" colspan="2"><strong>Tech</strong></td>
  </tr>
  <tr>
    <td height="25" colspan="2"  style="width:140px;">Manlid   </td>
    <td colspan="2" ><input type="text" style="width:195px;"name="textfield3"value="<?php echo $row7->ManlidInitialTorque?>" id="textfield"  /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield4"value="<?php echo $row7->ManlidFinalTorque?>" id="textfield11" /></td>
    <td colspan="2">
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue" value="<?php echo $row7->ManlidTighteningRequired?>"placeholder="add/select a value" id="displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div></td>
    <td colspan="2"><input type="text"value="<?php echo $row7->ManlidTech?>" style="width:195px;"name="textfield5" id="textfield15" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fill Valve-Yellow</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield6" id="textfield5"value="<?php echo $row7->FillValveYellowInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield7" id="textfield3"value="<?php echo $row7->FillValveYellowFinalTorque?>" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue1').value=this.options[this.selectedIndex].text; document.getElementById('idValue1').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="No">No</option>
   <option value="Yes">Yes</option>
</select>
<input name="displayValue1" placeholder="add/select a value" id="displayValue1" value="<?php echo $row7->FillValveYellowTighteningRequired?>"style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue1" id="idValue1" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield8" id="textfield19"value="<?php echo $row7->FillValveYellowTech?>" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green  </td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield9" id="textfield6"value="<?php echo $row7->PressureValveGreenInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield10" id="textfield4"value="<?php echo $row7->PressureValveGreenFinalTorque?>" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue2').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="two">No</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue2" placeholder="add/select a value" id="displayValue2"value="<?php echo $row7->PressureValveGreenTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue2" id="idValue2" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield11" id="textfield20" value="<?php echo $row7->PressureValveGreenTech?>" /></td>
  </tr>
  <tr>
    <td height="26" colspan="2">Vent Valve-Red</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield12" id="textfield7"value="<?php echo $row7->VentvalveRedInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield13" id="textfield10"value="<?php echo $row7->VentvalveRedFinalTorque?>" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue3').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="two">No</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue3" placeholder="add/select a value" id="displayValue3"value="<?php echo $row7->VentvalveRedTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue3" id="idValue3" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield14" id="textfield21"value="<?php echo $row7->VentvalveRedTech?>" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Relief Valve</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield15" id="textfield8"value="<?php echo $row7->ReliefValveInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield16" id="textfield12" value="<?php echo $row7->ReliefValveFinalTorque?>"/></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue41').value=this.options[this.selectedIndex].text; document.getElementById('idValue41').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="two">No</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue41" placeholder="add/select a value" id="displayValue41"value="<?php echo $row7->ReliefValveTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue41" id="idValue41" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield17" id="textfield22" value="<?php echo $row7->ReliefValveTech?>" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fusible Element/Blank</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield18" id="textfield9"value="<?php echo $row7->FusibleElementorBlankInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield19" id="textfield13"value="<?php echo $row7->FusibleElementorBlankFinalTorque?>" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue51').value=this.options[this.selectedIndex].text; document.getElementById('idValue51').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="one">No</option>
   <option value="two">yes</option>

</select>
<input name="displayValue51" placeholder="add/select a value" id="displayValue51"value="<?php echo $row7->FusibleElementorBlankTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue51" id="idValue51" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield20" id="textfield23"value="<?php echo $row7->FusibleElementorBlankTech?>" /></td>
  </tr>
  <tr>
    <td height="24" colspan="11"><p align="left"style="font-weight:bold;font-size:16px;">Valve Bonnet Torque Settings(ft-lbs):</p></td>
  </tr>
  <tr>
    <td height="34" colspan="2"><div align="center"><strong>valve</strong></div></td>
    <td colspan="2"><strong>Initial Torque </strong></td>
    <td colspan="3"><strong>Final torque </strong></td>
    <td width="88"><strong>Tightning required</strong></td>
    <td><strong>Spring Washers</strong></td>
    <td colspan="2"><strong>Tech</strong></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fill Valve-Yellow</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield21" id="textfield2"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield22" id="textfield14"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowFinalTorque?>" /></td>
    <td>  <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue16').value=this.options[this.selectedIndex].text; document.getElementById('idValue6').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue16" placeholder="add/select a value" id="displayValue16"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue6" id="idValue6" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('idValue7').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue7" placeholder="add/select a value" id="displayValue7"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowSpringWashers?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue7" id="idValue7" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield23" id="textfield32"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowTech?>" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield24" id="textfield38"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield25" id="textfield16"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenFinalTorque?>" /></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue8').value=this.options[this.selectedIndex].text; document.getElementById('idValue8').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue8" placeholder="add/select a value" id="displayValue8"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue8" id="idValue8" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue9').value=this.options[this.selectedIndex].text; document.getElementById('idValue9').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue9" placeholder="add/select a value" id="displayValue9"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenSpringWashers?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue9" id="idValue9" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield26" id="textfield33"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenTech ?> "</td>
  </tr>
  <tr>
    <td height="25" colspan="2">Vent valve Red</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield27" id="textfield39"value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedInitialTorque?>" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield28" id="textfield17"value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedFinalTorque?>" /></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue10').value=this.options[this.selectedIndex].text; document.getElementById('idValue10').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue10" placeholder="add/select a value"value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedTighteningRequired?>" id="displayValue10" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue10" id="idValue10" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue11').value=this.options[this.selectedIndex].text; document.getElementById('idValue11').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue11" placeholder="add/select a value" value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedSpringWashers?>"id="displayValue11" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue11" id="idValue11" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield29" id="textfield34" value="<?php echo $row7->ValveBonnetTorqueSettingsTech?>" /></td>
  </tr>
 
 
  <tr>
    <td height="24" colspan="11"><strong>Leakness Proof Test @
    <input style="width:120px;" type="text" name="textfield30" id="tx28"value="<?php echo $row7->Leakproofnesstestpsig?>" /> 
    psig</strong></td>
  </tr>
  <tr>
    <td width="93" height="26"><p align="left"><strong>Manlid</strong></p>      <div align="center"></div></td>
    <td width="41"><p>&nbsp;</p>
    <p><strong>Fill Valve</strong></p></td>
    <td width="66"><strong>Pressure Valve</strong></td>
    <td width="123"><strong>Vent Valve</strong></td>
    <td colspan="2"><strong>Relief Valve</strong>  </td>
    <td width="166"><p><strong>Fusible/</strong></p>
    <p><strong>Blank</strong></p></td>
    <td><strong>Fill Bonnet</strong></td>
    <td><strong>Pressure Bonnet</strong></td>
    <td colspan="2"><strong>Vent Bonnet</strong></td>
  </tr>
  <tr>
    <td height="25"><input type="text" style="width:97%;"name="textfield31" id="textfield26"value="<?php echo $row7->Leakproofnesstestmanlid?>" /></td>

    <td height="25"><input type="text" style="width:97%;"name="textfield32" id="textfield27"value="<?php echo $row7->LeakproofnesstestFillValve?>" /></td>
    <td><input type="text" style="width:97%;"name="textfield33" id="textfield28"value="<?php echo $row7->LeakproofnesstestPressureValve?>" /></td>
    <td><input type="text" style="width:97%;"name="textfield34" id="textfield29"value="<?php echo $row7->LeakproofnesstestVentValve?>" /></td>
    <td colspan="2"><input type="text" style="width:97%;"name="textfield35" id="textfield30"value="<?php echo $row7->LeakproofnesstestReliefValve?>" /></td>
    <td><input type="text" style="width:97%;"name="textfield36" id="textfield31"value="<?php echo $row7->LeakproofnesstestFusibleorBlank?>" /></td>
    <td><input type="text" style="width:97%;"name="textfield37" id="textfield43"value="<?php echo $row7->LeakproofnesstestFillBonnet?>" /></td>
    <td><input type="text" style="width:97%;"name="textfield38" id="textfield44"value="<?php echo $row7->LeakproofnesstestPressureBonnet?>" /></td>
    <td colspan="2"><input type="text" style="width:97%;"name="textfield39" id="textfield45"value="<?php echo $row7->LeakproofnesstestVentBonnet?>" /></td>
  </tr>
  <tr>
    <td colspan="8"><strong>Record Sheets Checked </strong></td>
    <td width="101"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue12').value=this.options[this.selectedIndex].text; document.getElementById('idValue12').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue12" placeholder="add/select a value" id="displayValue12"value="<?php echo $row7->LeakproofnesstestRecordSheetscheckedYesorNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue12" id="idValue12" type="hidden">
</div></td>
    <td width="195" colspan="2"><div align="left"><strong>Initials:</strong>
      <input style="width:50px;" type="text" name="textfield40" id="tx32"value="<?php echo $row7->LeakproofnesstestRecordSheetscheckedInitials?>" />
    </div></td>
  </tr>
  <tr>
    <td height="83" colspan="2"><p align="left"><strong>Dome Cover Secured:</strong><strong>
      <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue13').value=this.options[this.selectedIndex].text; document.getElementById('idValue13').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue13" placeholder="add/select a value"value="<?php echo $row7->LeakproofnesstestDomeCoversecuredyesorno?>" id="displayValue13" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue13" id="idValue13" type="hidden">
</div>
    </strong></p>
    <p>&nbsp;</p></td>
    <td colspan="3"><strong>Seal Number:
      <input style="width:100px;" type="text" name="textfield41" id="tx40"value="<?php echo $row7->LeakproofnesstestDomeCoverSecuredSealNumber?>" />
    </strong></td>
    <td colspan="3"><strong>Hazard Sign Covered:</strong>
      <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue14').value=this.options[this.selectedIndex].text; document.getElementById('idValue14').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue14" placeholder="add/select a value"value="<?php echo $row7->LeakproofnesstestHazardSignscovered?>" id="displayValue14" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue14" id="idValue14" type="hidden">
</div>
    </strong></td>
    <td colspan="3"><strong>Intials:
    </strong>      <input style="width:120px;" type="text" name="textfield42" id="tx36" value="<?php echo $row7->LeakproofnesstestDomeCoverSecuredInitials?>"/></td>
  </tr>
  <tr>
    <td height="46" colspan="11"><strong>The Vessel contains dry Air/Nitrogen @ 
      <input style="width:50px;" type="text" name="textfield43" id="tx44"value="<?php echo $row7->LeakproofnesstestThevesselcontainsdryairnitrogen?>" /> 
      C. Dew point at the pressure of 
      <input style="width:50px;" type="text" name="textfield44" id="tx48" value="<?php echo $row7->LeakproofnesstestDewpointatapressureof?>"/> 
      psig.
    </strong></td>
  </tr>
  <tr>
    <td height="53" colspan="11"><div align="left"><strong>Released to 
      <input style="width:100px;" type="text" name="textfield45" id="tx49"value="<?php echo $row7->LeakproofnesstestReleasedTo?>" />
      (haulier):
  <input style="width:100px;" type="text" name="textfield46" id="tx50"value="<?php echo $row7->LeakproofnesstestHaulier?>"/>
     vehicle registration number:
     <input style="width:100px;" type="text" name="textfield47" id="tx51"value="<?php echo $row7->LeakproofnesstestVehicleRegNo?>" />
    </strong><strong></strong></div></td>
  </tr>
  <tr>
    <td height="83" colspan="11"><strong>For GLS 
      <input style="width:120px;" type="text" name="textfield48" id="tx52"value="<?php echo $row7->LeakproofnesstestforGLS?>" /> 

 date & Time:
<input id="demo22" type="text"name="textfield49" value="<?php echo $row7->LeakproofnesstestDateTime?>" style="width:170px;"><a href="javascript:NewCal('demo22','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
 <script > 
 function changetocolor67(color){
   
  document.getElementById("rer1").value = color;

}
  </script>
 <input type="hidden" name="rer1" id="rer1" />
   
                     
    </strong></td>
  </tr>
</table>
</form>
        </div> 
    
    
    
    
    
    
 
    
  </div>
</body>   
    
    
    </html>

