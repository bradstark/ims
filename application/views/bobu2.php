<!DOCTYPE html>  
<html>  
     <?php $this->load->view('includes/staff_navbar2'); ?>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>

  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <link rel="stylesheet" href="/resources/demos/style.css">
  <script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 
  <script>
      
  </script>
</head>
<body>
    <?php echo $workorderid ?>
    <?php echo $slotnumber ?>  


<ul class="nav nav-pills nav-stacked col-md-2 ">
  <li><a href="#tab_a" data-toggle="pill">ISO Container Dimension Record</a></li>
  <li><a href="#tab_b" data-toggle="pill">ISO Inspection Frame Record-1</a></li>
  <li><a href="#tab_c" data-toggle="pill">ISO Container Inspection Record-1</a></li>
  <li><a href="#tab_d" data-toggle="pill">ISO Inspection Frame Record-2</a></li>
  <li><a href="#tab_e" data-toggle="pill">ISO Container Inspection Record-2</a></li>
  <li><a href="#tab_f" data-toggle="pill">Bromine Vessel Purging Record</a></li>
  <li><a href="#tab_g" data-toggle="pill">Equipment Release Certificate</a></li>
   <li>
        <form id="form121" action="<?php echo site_url('site') ?>" method="POST">
       <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid" value="<?php echo $workorderid ?>" id="f21e41" />
         <input style="width:200px;" type="hidden" name="sid" width ="70%"id="fe1641" value="<?php echo $slotnumber ?>" />
    <a ><input type="submit"  style="height:50px;width:190px" value="Home" name="home" class="btn btn-danger"></a>
               </form>  </li>
   
    <li>
      <form id="form1121" action="<?php echo site_url('workflow/closewk') ?>" method="POST">
       <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="cwokid" value="<?php echo $workorderid ?>" id="f21e41" />
         <input style="width:200px;" type="hidden" name="csid" width ="70%"id="fe132641" value="<?php echo $slotnumber ?>" />
    <a ><input type="submit"  style="height:50px;width:190px" value="Close" name="close" class="btn btn-danger"></a>
               </form>  </li>
</ul>
<div class="tab-content col-md-10">
        <div class="tab-pane" id="tab_a">
            
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
 


    <div>
        
        <form id="form1" name="form1" method="post" action="">
    <table width="1170" height="66" border="1" style="position:absolute;left:2%;">
  <tr>
      <td width="592" style="font-weight: bold; font-size: 36px;">Equipment Id: <input type="text" style="position:absolute;left:21%;top:15.0%;width:200px;height:30px" name="eqid" id="fe2" value=""/></td>
    <td width="562"><span style="font-size: 36px; font-weight: bold;">Date Started: <input type="text" style="position:absolute;font:bold 17px Times New Roman;left:70%;top:17.0%;width:190px;height:30px" name="datestarted" id="fe3" /> </span></td>
  </tr>
</table>
        
        


<img src="..\image\Screenshot (1)(1).png" alt="iso" id="aja" width="412" height="293" style="position: absolute; left: 180px; top: 89px"/>
<img src="..\image\matter.jpg" alt="iso" id="aja" width="412" height="293" style="position: absolute;width:500px; left: 680px; top: 85px"/>




<table width="200" border="1" style="position: absolute; left: 85px; top: 430px; width: 1111px; height: 172px;">
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
  </tr>
  <tr>
    <th scope="row">Actual-Initial</th>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000"></td>
    <td><input type="text" style="position:absolute;top:59%;width:71px;height:25px;" name="ac1" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:69px;height:25px;" name="ac2" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac3" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac4" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:69px;height:25px;" name="ac5" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac6" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:74px;height:25px;" name="ac7" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:69px;height:25px;" name="ac8" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac9" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:69px;height:25px;" name="ac10" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac11" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:59%;width:62px;height:25px;" name="ac12" id="fe41" /></td>
    
  </tr>
  <tr>
    <th scope="row">Actual-Final</th>
    <td style=" font: bold 25px Times New Roman;background-color:#000"></td>
    <td><input type="text" style="position:absolute;top:79%;width:71px;height:25px;" name="af1" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:69px;height:25px;" name="af2" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af3" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af4" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:69px;height:25px;" name="af5" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af6" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:74px;height:25px;" name="af7" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:69px;height:25px;" name="af8" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af9" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:69px;height:25px;" name="af10" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af11" id="fe41" /></td>
    <td><input type="text" style="position:absolute;top:79%;width:62px;height:25px;" name="af12" id="fe41" /></td>
    
  </tr>
    
      
    
</table>
 
<label style="alignment-adjust:central;font: bold 22px Times New Roman;position:absolute;left:8%;top:80%"> Frame conforms to the dimensional requirements of ISO 668-1979(E)</label>


<table  border="1"style="position:absolute;left:6%;top:85%;width:1170px;height:66px;">
  <tr>
    <td width="592" style="font-weight: bold; font-size: 36px;">Technician:<input type="text" style="position:absolute;left:17%;top:19%;width:200px;height:30px" name="tech" id="fe4" /></td>
    <td width="562"><span style="font-size: 36px; font-weight: bold;">Date: 
   <input type="text" style="position:absolute;left:62%;top:19%;width:200px;height:30px;" name="date2" id="datepicker" /> </span></td>
  </tr>
</table>
    <table width="1170" height="66" border="1"style="position:absolute;left:6%;top:94%;">
  <tr>
      <td width="279" height style="font-weight: bold; font-size: 36px;"><img height="75" src="..\image\download.jpg"  /></td>
    <td width="475" <span style="font-size: 24px; font-weight: bold;">Title: 20 ft ISO Container Dimension Record</spam></td>
    <td width="222"><span style="font-size: 24px; font-weight: bold;">Issue: F02.04</span></td>
    <td width="166"><span style="font-size: 24px; font-weight: bold;">Revision:</span></td>
  </tr>
</table>


 
  <script type="text/javascript">    
    document.getElementById("fe3").value = Date().toString();    
</script> 


</form>
        
    </div>    
      
            </div>
    
    
    
    
    
    
    
    
    
    
    
    
   
    
        <div class="tab-pane" id="tab_b">
        
         <?php $row = $this->work_model->get_by_wkid($workorderid); ?>   
            
<img src="..\image\Screenshot (4).png" style="position: absolute; left: 850px; top: 235px; height:210px; width: 223px;" />

<img src="..\image\Screenshot (4)(1).png" style="position: absolute; left: 853px; top: 463px;height:305px; width: 242px;" />
<img src="..\image\geesa.jpg" style="position: absolute; left: 853px; top: 788px;height:265px; width: 242px;" />
<img src="..\image\bomma1.png" style="position: absolute; left: 853px; top: 1068px;height:315px; width: 252px;" />
<img src="..\image\bomma2.png" style="position: absolute; left: 853px; top: 1400px;height:255px; width: 242px;" />
<img src="..\image\bomma3.png" style="position: absolute; left: 853px; top: 1650px;height:205px; width: 222px;" />
  <form id="form1" action="<?php echo site_url('workflow/isoinspecframerecord1') ?>" method="POST">
      <input style="width:200px;" type="hidden" name="wid" width ="70%"id="fe161" value="<?php echo $workorderid ?>" />
     
<table width="1175" height="107" border="1">
  <tr>
    <th width="304" height="101" scope="row"><img src="..\image\download.jpg"  /></th>
    <td width="492" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Title:</p>
    <p>20 feet Iso container dimension record</p></td>
    <td width="133" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Issue:</p>
    <p>F02.04</p></td>
    <td width="218" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Revision</p>
    <p> </p></td>
  </tr>
</table>
<table width="1172" height="65" border="1">
  <tr>
   <th width="598" height="59"  valign="center" style="font: bold 15px Times New Roman" scope="row"><p>14T Iso frame record inspection</p>
    </t>  <th width="558"  valign="center" height="59"   style="font: bold 15px Times New Roman" scope="row">FrameID:
    <input type="text" name="techid" width ="450px"id="fe5" /></th>
  </tr>
</table>
<table width="760" height="207" border="1" style="position: absolute; left: 89px; top: 234px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Rear</p></th>
    <td width="78" align="center">1</td>
    <td   style="font: bold 20px Times New Roman" width="231">Long Diagonal</td>
    <td width="199"><input style="width:200px;" value="<?php echo $row->RearLongDiagonal; ?>" type="text" name="rear1" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">2</td>
    <td  style="font: bold 20px Times New Roman">Short Diagonal</td>
    <td><input style="width:200px;" type="text" name="rear2" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">3</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td><input style="width:200px;" type="text" name="rear3" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">4</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td><input style="width:200px;" type="text" name="rear4" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">5</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td><input style="width:200px;" type="text" name="rear5" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">6</td>
    <td style="font: bold 20px Times New Roman">Center Guesset</td>
    <td><input style="width:200px;" type="text" name="rear6" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">7</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input style="width:200px;" type="text" name="rear7" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="997" height="298" border="1" style="position: absolute; left: 87px; top: 468px; height: 290px; width: 761px; font-weight: bold; font-size: 18px;">
  <tr>
    <th width="220" rowspan="10" scope="row"  style="font: bold 25px Times New Roman" ><p>Right Hand Side</p></th>
    <td width="81" align="center">8</td>
    <td   style="font: bold 20px Times New Roman" width="231">Front Diagonal</td>
    <td   style="font: bold 20px Times New Roman" width="181"><input style="width:200px;" type="text" name="rear8" width ="70%"id="fe16" /></td>
    
  </tr>
  <tr>
    <td  valign="right" align="center">9</td>
    <td  style="font: bold 20px Times New Roman">Front Sidepost</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear9" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td align="center">10</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear10" width ="70%"id="fe16" /></td>

  </tr>
  <tr>
    <td height="31" align="center">11</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear11" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">12</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear12" width ="70%"id="fe16" /></td>
    
  </tr>
  <tr>
    <td  align="center">13</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear13" width ="70%"id="fe16" /></td>
 
  </tr>
  <tr>
    <td   height="27" align="center">14</td>
    <td>Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear14" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td align="center" style="font: bold 20px Times New Roman">15</td>
    <td>Rear Diagonal</td>
    <td><input style="width:200px;" type="text" name="rear15" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center" style="font: bold 20px Times New Roman">16</td>
    <td>Diagonal Guesset</td>
    <td><input style="width:200px;" type="text" name="rear16" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td height="27" align="center" style="font: bold 20px Times New Roman">17</td>
    <td>Corner Guesset</td>
    <td><input style="width:200px;" type="text" name="rear17" width ="70%"id="fe16" /></td>
  </tr>
</table>

<table width="760" height="207" border="1" style="position: absolute; left: 89px; top: 804px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Front</p></th>
    <td width="78" align="center">18</td>
    <td   style="font: bold 20px Times New Roman" width="231">Long Diagonal</td>
    <td width="199"><input style="width:200px;" type="text" name="rear18" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">19</td>
    <td  style="font: bold 20px Times New Roman">Short Diagonal</td>
    <td><input style="width:200px;" type="text" name="rear19" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">20</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td><input style="width:200px;" type="text" name="rear20" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">21</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td><input style="width:200px;" type="text" name="21" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">22</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td><input style="width:200px;" type="text" name="rear22" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">23</td>
    <td style="font: bold 20px Times New Roman">Center Guesset</td>
    <td><input style="width:200px;" type="text" name="rear23" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">24</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input style="width:200px;" type="text" name="rear24" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="997" height="298" border="1" style="position: absolute; left: 87px; top: 1048px; height: 290px; width: 761px; font-weight: bold; font-size: 18px;">
  <tr>
    <th width="220" rowspan="12" scope="row"  style="font: bold 25px Times New Roman" ><p>Left Hand Side</p></th>
    <td width="81" align="center">25</td>
    <td   style="font: bold 20px Times New Roman" width="231">Front Diagonal</td>
    <td   style="font: bold 20px Times New Roman" width="181"><input style="width:200px;" type="text" name="rear25" width ="70%"id="fe16" /></td>
    
  </tr>
  <tr>
    <td  valign="right" align="center">26</td>
    <td  style="font: bold 20px Times New Roman">Front Sidepost</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear26" width ="70%"id="fe16" /></td>
  
  </tr>
   
  <tr>
    <td align="center">27</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear27" width ="70%"id="fe16" /></td>

  </tr>
  <tr>
    <td height="31" align="center">28</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear28" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">29</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear29" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td  valign="right" align="center">30</td>
    <td  style="font: bold 20px Times New Roman">ladder/HandRail</td>
    <td  style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear30" width ="70%"id="fe16" /></td>
  
  </tr>
  <tr>
    <td  align="center">31</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear31" width ="70%"id="fe16" /></td>
 
  </tr>
  <tr>
    <td   height="27" align="center">32</td>
    <td>Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input style="width:200px;" type="text" name="rear32" width ="70%"id="fe16" /></td>
    
  </tr>
    <tr>
    <td align="center" style="font: bold 20px Times New Roman">33</td>
    <td>Rear Diagonal</td>
    <td><input style="width:200px;" type="text" name="rear33" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center" style="font: bold 20px Times New Roman">34</td>
    <td>Diagonal Guesset</td>
    <td><input style="width:200px;" type="text" name="rear34" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td height="27" align="center" style="font: bold 20px Times New Roman">35</td>
    <td>Corner Guesset</td>
    <td><input style="width:200px;" type="text" name="rear35" width ="70%"id="fe16" /></td>
  </tr>
</table>

<table width="760" height="207" border="1" style="position: absolute; left: 89px; top: 1424px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Top</p></th>
    <td width="78" align="center">36</td>
    <td   style="font: bold 20px Times New Roman" width="231">Platform</td>
    <td width="199"><input style="width:200px;" type="text" name="rear36" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">37</td>
    <td  style="font: bold 20px Times New Roman">Rear Top  Rail</td>
    <td><input style="width:200px;" type="text" name="rear37" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">38</td>
    <td  style="font: bold 20px Times New Roman">LH Top Rail</td>
    <td><input style="width:200px;" type="text" name="rear38" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td align="center">39</td>
    <td  style="font: bold 20px Times New Roman">RH Top Rail</td>
    <td><input style="width:200px;" type="text" name="rear39" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">40</td>
    <td style="font: bold 20px Times New Roman">Front Top rail</td>
    <td><input style="width:200px;" type="text" name="rear40" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">41</td>
    <td style="font: bold 20px Times New Roman">Removable Rail</td>
    <td><input style="width:200px;" type="text" name="rear41" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">42</td>
    <td style="font: bold 20px Times New Roman">Removable Rail Brack</td>
    <td><input style="width:200px;" type="text" name="rear42" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="760"  border="1" style="position: absolute; left: 89px; top: 1674px; height: 151px;">
  <tr>
    <th width="224" rowspan="4" scope="row"  style="font: bold 25px Times New Roman" ><p>Bottom</p></th>
    <td width="78" align="center">43</td>
    <td   style="font: bold 20px Times New Roman" width="231">Longitude</td>
    <td width="199"><input style="width:200px;" type="text" name="rear43" width ="70%"id="fe16" /></td>
  </tr>
 
  <tr>
    <td  align="center">44</td>
    <td style="font: bold 20px Times New Roman">Diagnol</td>
    <td><input style="width:200px;" type="text" name="rear44" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td  align="center">45</td>
    <td style="font: bold 20px Times New Roman">Saddle Beams</td>
    <td><input style="width:200px;" type="text" name="rear45" width ="70%"id="fe16" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">46</td>
    <td style="font: bold 20px Times New Roman">Center Beam</td>
    <td><input style="width:200px;" type="text" name="rear46" width ="70%"id="fe16" /></td>
  </tr>
</table>
<table width="990"  border="1" style="position: absolute; left: 89px; top: 1854px; height: 41px;">
  <tr>
    <th width="224" rowspan="1" scope="row"  style="font: bold 25px Times New Roman" >Inspected By:<input style="width:200px;height:25px;" type="text" name="rear47" width ="70%"id="fe16" /></th>
    <td width="78" align="center">Date:<input style="font: bold 20px Times New Roman;width:150px;" type="text" name="rear48" width ="70%"id="datepicker1" /></td>
  
  </tr>
 
</table>
      <script>
   $(function(){
       
       $("#datepicker1").datepicker();
   });
</script>
       <div>
                  
                     <input type ="submit" style="position:absolute;top:1910px;text-align: left;width:125px;left:600px;"id="btnimp" value="save" name="save"  class="btn btn-danger">
                </div>
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
        <div class="tab-pane" id="tab_c">
            
    <form id="form1" action="<?php echo site_url('isocontainer/isoinspectionrecord') ?>" method="POST">
    
<table width="751" border="1" style="position: absolute; left: 2%; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
  <tr>
    <td width="232" height="40px"><img src="..\image\download.jpg"  width="200" height="67" alt="chem" /></td>
    <td width="199" height="61" align="center">
        <label style="font-weight:bold;font-size: 24px;">Issue:F02.23</label>
        
    </td>
    <td width="141" height="61px" style="font-weight:bold;font-size: 24px;" align="center"> Page 1 of 2</td>
    <td width="180" height="61" align="center">
      <label style="font-weight:bold;font-size: 24px;">REVISION</label>
      </td>
  </tr>
  <tr>
    <td height="35" colspan="2" align="center" style="font-weight:bold;font-size: 24px;">14T/18T ISO Container Inspection Record</td>
    <td colspan="2" align="center">
      <label for="tx3"style="font-weight:bold;font-size: 24px;">Vessel ID: BOBU000</label>
      <input style="font-weight:bold;font-size: 16px;"type="text" name="vesselid" id="tx3" />
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
 
   
    
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:155px;top:300px;" id="btn63" value="59" onclick="setColor('btn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:355px;top:300px;" id="bktn57" value="57" onclick="setColor('bktn57','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:865px;top:300px;" id="btin65" value="65" onclick="setColor('btin65','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:300px;" id="bktn66" value="66" onclick="setColor('bktn66','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:260px;" id="bhtn63" value="63" onclick="setColor('bhtn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:260px;" id="btkn60" value="60" onclick="setColor('btkn60','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:340px;" id="bttn58" value="62" onclick="setColor('bttn58','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:340px;" id="btnr59" value="61" onclick="setColor('btnr59','#fff200');" /> 
  
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:185px;" id="btkp60" value="56" onclick="setColor('btkp60','#fff200');" /> 
   
   <input type="button" class="default span btn  btn-default btn-circle"style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:416px;" id="botn58" value="58" onclick="setColor('botn58','#fff200');" /> 
   
   <input type="button"class="default span btn" style="width: 34px;z-index: 10;height: 34px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;position:absolute;z-index: 10;font-weight: bold;left:925px;top:220px;" id="btkp68" value="67" onclick="setColor('btkp68','#fff200');" /> 
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:925px;top:380px;" id="botn68" value="68" onclick="setColor('botn68','#fff200');" /> 
  
   
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1090px;" id="btn151" value="47" onclick="setColor('btn151','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1170px;" id="btn161" value="51" onclick="setColor('btn161','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:250px;top:1250px;" id="btn171" value="59" onclick="setColor('btn171','#fff200');" />
   
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1090px;" id="btn152" value="1" onclick="setColor('btn152','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1170px;" id="btn162" value="5" onclick="setColor('btn162','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:920px;top:1250px;" id="btn172" value="3" onclick="setColor('btn172','#fff200');" />
  
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:180px;top:1170px;" id="btn163" value="48" onclick="setColor('btn163','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:320px;top:1170px;" id="btn165" value="50" onclick="setColor('btn165','#fff200');" /> 
   
    <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:850px;top:1170px;" id="btn164" value="4" onclick="setColor('btn164','#fff200');" /> 
     <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:1170px;" id="btn166" value="2" onclick="setColor('btn166','#fff200');" /> 
   
     
    <input type="text" name="vent" id="tx1 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1170px;" /> 
    <input type="text" name="air/n2"  id="tx2 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1210px;" />
    <input type="text" name="fusible" id="tx3 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1250px;" />
    <input type="text"  name="fill" id="tx4 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1130px;" />
   <input type="text"name="batchno" id="tx5 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:445px;top:1363px;" />
   <input type="text"name="clean"  id="tx6 "style="width: 308px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:465px;top:1610px;" />
   <input type="text" name="datepicker5" id="datepicker5"style="width:160px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:855px;top:1610px;" />
   
   <textarea  name="repairs" cols="30" style="width: 880px;height: 168px;top:1430px;z-index: 10;position: absolute;left:160px;"rows="4"></textarea>
   
    <input type="text" id="tb2" name ="hcells"style="display: none;"   class="input-xlarge">
   
   
    <img src="..\image\rings.jpg" style="position: absolute; left: 150px; top: 140px; height:310px; width: 900px;" />
  
         <img src="..\image\ajay.jpg" style="position: absolute; left: 150px; top: 700px; height:310px; width: 900px;" />
      <img src="..\image\zoom.jpg" style="position: absolute; left: 150px; top: 1350px; height:310px; width: 900px;" />
 <img src="..\image\pic2.jpg" style="position: absolute; left: 150px; top: 460px; height:200px; width: 900px;" />
 
 <img src="..\image\last.jpg" style="position: absolute; left: 150px; top: 1060px; height:250px; width: 900px;" />

 
 
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
 var  x = document.getElementById("form1");


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

    $( "#datepicker5" ).datepicker();

  });

  </script>
  
  
      
                 <div>
                  
                     <input type ="submit" style="position:absolute;top:1700px;text-align: left;width:125px;left:600px;"id="btnimp" value="save the form" onclick="getColor();" class="btn btn-danger">
                </div>
     
               
          </form>
        </div>
    
    
    
    
    
    
        <div class="tab-pane" id="tab_d">
    
 
</div>
    
    
     
  
    
    
        
        
    <div class="tab-pane" id="tab_e">
        
        <table width="697" border="1" style="position: absolute; left: 207px; top: 23px; width: 673px; height: 1222px; font-weight: bold;">
  <tr>
    <td width="224" height="43"><img src="..//image/download.jpg" width="224" height="97"></td>
    <td width="147">&nbsp;</td>
    <td width="117">&nbsp;</td>
    <td width="146">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" align="center">BOBU ISO CONTAINER</td>
    <td width="147" align="center">Page 2 of 2</td>
    <td width="117" align="center">Issue:F02.23</td>
    <td width="146" align="center">Revision</td>
  </tr>
  <tr>
    <td height="41" align="left">ITEM</td>
    <td colspan="2" align="center">REPAIRS/REPLACEMENTS</td>
    <td>CERT No. REPAIR</td>
  </tr>
  <tr>
    <td align="left">Fill valve</td>
    <td colspan="2"> <input type="text" style="width:99%;"name="rear9"  id="textfield30" /></td>
     <td colspan="2"><input type="text" style="width:99%;"name="rear9"  id="textfield30" /></td>
  </tr>
  <tr>
    <td align="left">Vent Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield12"  id="textfield12" /></td>
     <td colspan="2"><input type="text" style="width:99%;"name="textfield"  id="textfield" /></td>
  </tr>
  <tr>
    <td>Air/N Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield13"  id="textfield13" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"name="textfield3"  id="textfield3" /></td>
    
  </tr>
  <tr>
    <td>Relief Valve</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield14"  id="textfield14" /></td>
 
    <td colspan="2"><input type="text" style="width:99%;"name="textfield2"  id="textfield2" /></td>
 
  </tr>
  <tr>
    <td>Bursting Disc</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield15"  id="textfield15" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"name="textfield4"  id="textfield4" /></td>
    
  </tr>
  <tr>
    <td>Tell-Tale Assembly-Gauge</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield16"  id="textfield16" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"name="textfield5"  id="textfield5" /></td>
   
  </tr>
  <tr>
    <td>Needle valve</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield17"  id="textfield17" /></td>
    
    <td colspan="2"><input type="text" style="width:99%;"name="textfield6"  id="textfield6" /></td>
    
  </tr>
  <tr>
    <td>Valve Spacer</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield18"  id="textfield18" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"name="textfield7"  id="textfield7" /></td>
   
  </tr>
  <tr>
    <td>Dip Pipe</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield19"  id="textfield19" /></td>
  
    <td colspan="2"><input type="text" style="width:99%;"name="textfield8"  id="textfield8" /></td>
  
  </tr>
  <tr>
    <td>Special Studs</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield20"  id="textfield20" /></td>
  
    <td colspan="2"><input type="text" style="width:99%;"name="textfield9"  id="textfield9" /></td>
  
  </tr>
  <tr>
    <td>Manlid Bolts</td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield21"  id="textfield21" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"name="textfield10"  id="textfield10" /></td>
   
  </tr>
  <tr>
    <td><p>Remarks</p></td>
    <td colspan="2"><input type="text" style="width:99%;"name="textfield22"  id="textfield22" /></td>
   
    <td colspan="2"><input type="text" style="width:99%;"name="textfield11"  id="textfield11" /></td>
   
  </tr>
  <tr>
    <td height="176" colspan="4"><p><img src="../image/hy2.jpg" width="660" height="181" alt="hyd"></p>
    <p><img src="../image/lk.jpg" width="664" height="192" alt="leak"></p>
    <p><img src="../image/dry.jpg" width="668" height="193" alt="dry"></p>
    <p><img src="../image/FIN (1).jpg" width="663" height="109" alt="FI"></p>
    <p>&nbsp;</p></td>
  </tr>
</table>
 <input type="text" name="vent" id="tx1 "style="width: 290px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:565px;top:564px;" /> 

<input type="text" name="ven" id="tx2 "style="width: 220px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:320px;top:564px;" /> 
<input type="text" name="vent" id="tx3 "style="width: 600px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:255px;top:599px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:725px;top:514px;" /> 
 
 
 
<input type="text" name="vent" id="tx1 "style="width: 290px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:574px;top:764px;" /> 

<input type="text" name="ven" id="tx2 "style="width: 220px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:325px;top:764px;" /> 
<input type="text" name="vent" id="tx3 "style="width: 610px;z-index: 10;height: 26px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:255px;top:802px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:730px;top:709px;" /> 
 
 
 
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:776px;top:984px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:606px;top:984px;" />
<input type="text" name="vent" id="tx4 "style="width: 105px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:415px;top:984px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 95px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:270px;top:984px;" /> 
    
    
    
    
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:776px;top:1039px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 55px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:606px;top:1039px;" />
<input type="text" name="vent" id="tx4 "style="width: 105px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:415px;top:1039px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 95px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:270px;top:1039px;" />
    
<input type="text" name="vent" id="tx4 "style="width: 105px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:445px;top:1159px;" /> 
<input type="text" name="vent" id="tx4 "style="width: 95px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:270px;top:1159px;" />
    
<input type="text" name="vent" id="tx4 "style="width: 175px;z-index: 10;height: 24px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:645px;top:1159px;" />

        </div>
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="tab-pane" id="tab_f">
        
<form id="form22" action="<?php echo site_url('workflow/bvpurgingrecord') ?>" method="POST">
<div align="left">
  <table width="772" height="865" border="1" style="position: absolute; left: 5%; top: 0%; font-weight: bold; width: 826px;">
    <tr>
      <td height="63" colspan="2"><img src="..\image\download.jpg"  /></td>
      <td height="63" colspan="2"><div align="center">
        <p style="font-weight:bold;font-size:24px;">Issue:F01.02 </p>
        <p  style="font-weight:bold;font-size:24px;">Revision: </p>
      </div></td>
    </tr>
    <tr>
        <td height="53" colspan="4" style="background-color: greenyellow;"><p align="center"  style="font-weight:bold;font-size:30px;background-color: red;">Bromine Vessel Purging Record</p>
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
        <input type="text" style="width:97%;"name="rear1" id="textfield6" />
      </div></td>
       <td><input id="demo14"name="rear2" type="text" style="width:90%;"><a href="javascript:NewCal('demo14','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear3" id="textfield28" /></td>
    </tr>
    <tr>
      <td>Caustic Flow</td>
      <td><div align="left">
          <input type="text" style="width:81%;"name="rear4"  id="textfield2" />
      gpm</div></td>
     <td><input id="demo13"name="rear5"  type="text" style="width:90%;"><a href="javascript:NewCal('demo13','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear6"  id="textfield29" /></td>
    </tr>
    <tr>
      <td height="26">Caustic Strength</td>
      <td><div align="left">
          <input type="text" style="width:77%;"name="rear7" id="textfield3" />
          %w/w      </div></td>
  <td><input id="demo12" type="text"name="rear8"  style="width:90%;"><a href="javascript:NewCal('demo12','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear9"  id="textfield30" /></td>
    </tr>
    <tr>
      <td>Air Dewpoint</td>
      <td><div align="left">
          <input type="text" style="width:89%;"name="rear10"  id="textfield4" />
      C</div></td>
      <td><input id="demo11" type="text" name="rear11" style="width:90%;"><a href="javascript:NewCal('demo11','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear12"  id="textfield31" /></td>
    </tr>
    <tr>
      <td>Valves Connected &amp; Set</td>
      <td><div align="right">
        <input type="text" style="width:97%;"name="rear13"  id="textfield42" />
      </div></td>
       <td><input id="demo10" type="text"name="rear14"  style="width:90%;"><a href="javascript:NewCal('demo10','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear15"  id="textfield32" /></td>
    </tr>
    <tr>
      <td>Air Pressure</td>
      <td><div align="left">
          <input type="text" style="width:81%;"name="rear16"  id="textfield" />
        psig
      </div></td>
        <td><input id="demo9" type="text"name="rear17"  style="width:90%;"><a href="javascript:NewCal('demo9','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear8"  id="textfield33" /></td>
    </tr>
    <tr>
      <td>Air Temperature</td>
      <td><div align="left">
          <input type="text" style="width:89%;"name="rear19"  id="textfield5" />
      F</div></td>
       <td><input id="demo8" type="text"name="rear20"  style="width:90%;"><a href="javascript:NewCal('demo8','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear21"  id="textfield34" /></td>
    </tr>
    <tr>
      <td>Venting Started</td>
      <td><input type="text" style="width:97%;"name="rear22" id="textfield7" /></td>
       <td><input id="demo7" type="text"name="rear23"  style="width:90%;"><a href="javascript:NewCal('demo7','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear24" id="textfield35" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Started</td>
      <td><input type="text" style="width:97%;"name="rear25" id="textfield8" /></td>
       <td><input id="demo6" type="text"name="rear26"  style="width:90%;"><a href="javascript:NewCal('demo6','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear27"  id="textfield36" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Complete</td>
      <td><input type="text" style="width:97%;"name="rear28"  id="textfield9" /></td>
        <td><input id="demo5" name="rear29" type="text" style="width:90%;"><a href="javascript:NewCal('demo5','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear30"  id="textfield37" /></td>
    </tr>
    <tr>
      <td>Vessel Clean</td>
      <td><input type="text" style="width:97%;"name="rear31"  id="textfield11" /></td>
       <td><input id="demo4" type="text"name="rear32"  style="width:90%;"><a href="javascript:NewCal('demo4','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear33"  id="textfield38" /></td>
    </tr>
    <tr>
      <td height="26">Vessel Hydro</td>
      <td><div align="left">
        <input type="text" style="width:81%;"name="rear34"  id="textfield10" />
      psig</div></td>
        <td><input id="demo3" type="text" name="rear35" style="width:90%;"><a href="javascript:NewCal('demo3','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear36" id="textfield39" /></td>
    </tr>
    <tr>
      <td>Vessel Dissembled</td>
      <td><input type="text" style="width:97%;"name="rear37" id="textfield12" /></td>
      <td><input id="demo2" type="text"name="rear38"  style="width:90%;"><a href="javascript:NewCal('demo2','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      <td><input type="text" style="width:97%;"name="rear39"  id="textfield40" /></td>
    </tr>
    <tr>
      <td>Confined Space Permit</td>
      <td><input type="text" style="width:97%;"name="rear40"  id="textfield13" /></td>
     
    <td><input id="demo1" name="rear41"  type="text" style="width:90%;"><a href="javascript:NewCal('demo1','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
    <td><input type="text" style="width:97%;"name="rear42"  id="textfield15" /></td>
    </tr>
    <tr>
      <td>Vessel Ready for inspection</td>
      <td><input type="text" style="width:97%;"name="rear413"  id="textfield13" /></td>
     
    <td><input id="demo21" type="text"name="rear43"  style="width:90%;"><a href="javascript:NewCal('demo21','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
    <td><input type="text" style="width:97%;"name="rear44"  id="textfield15" /></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><p style="font-weight: bold;">Comments:</p>
        <p align="center">
          <textarea name="rear45" cols="70" rows="7" id="txb"></textarea>
          <div>
                  
                     <input type ="submit" id="btnimp" value="save the form"  class="btn btn-danger">
                </div>
      </p></td>
    </tr>
  </table>
    
</div>
    </form>
        
        </div>
    
    
    
    
    
    
    
    
    <div class="tab-pane" id="tab_g">
         <form id="form212" action="<?php echo site_url('workflow/ercertificate') ?>" method="POST">
<table width="991" border="1" style="position: absolute; left:5%; top: 18px;">
  <tr>
    <td height="66" colspan="11"><img src="..\image\download.jpg"  /></td>
  </tr>
  <tr>
    <td height="39" colspan="11"> <div align="center" style="font-weight:bold;font-size:22px;">Equipment Release Certificate</div></td>
  </tr>
  <tr>
    <td height="57" colspan="5"style="font-weight:bold;font-size:16px;"><div align="right">
      <p align="center">Date Isuued:
        
<input id="demo23" type="text"name="textfield1"  style="width:170px;"><a href="javascript:NewCal('demo23','ddmmyyyy')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
  
      </p>
    </div></td>
    <td colspan="3"><p align="center" style="font-weight:bold;font-size:16px;"> Issue:
        <input type="text" name="textfield2" id="tx2" />
      </p>    </td>
    <td colspan="3"><div align="center"style="font-weight:bold;font-size:16px;">Revision</div></td>
  </tr>
  <tr>
    <td height="24" colspan="11"><div align="right">
      <p align="center" style="font-weight:bold;font-size:16px;">Equipment Id:
        <input type="text" name="eqid" id="tx4" />
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
    <td colspan="2" ><input type="text" style="width:195px;"name="textfield3" id="textfield" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield4" id="textfield11" /></td>
    <td colspan="2">
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue" placeholder="add/select a value" id="displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield5" id="textfield15" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fill Valve-Yellow</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield6" id="textfield5" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield7" id="textfield3" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue1').value=this.options[this.selectedIndex].text; document.getElementById('idValue1').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="No">NO</option>
   <option value="Yes">Yes</option>
</select>
<input name="displayValue1" placeholder="add/select a value" id="displayValue1" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue1" id="idValue1" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield8" id="textfield19" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green  </td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield9" id="textfield6" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield10" id="textfield4" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue2').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="two">No</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue2" placeholder="add/select a value" id="displayValue2" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue2" id="idValue2" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield11" id="textfield20" /></td>
  </tr>
  <tr>
    <td height="26" colspan="2">Vent Valve-Red</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield12" id="textfield7" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield13" id="textfield10" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue3').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="two">No</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue3" placeholder="add/select a value" id="displayValue3" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue3" id="idValue3" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield14" id="textfield21" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Relief Valve</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield15" id="textfield8" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield16" id="textfield12" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue4').value=this.options[this.selectedIndex].text; document.getElementById('idValue4').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="two">NO</option>
   <option value="three">Yes</option>
</select>
<input name="displayValue4" placeholder="add/select a value" id="displayValue4" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue4" id="idValue4" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield17" id="textfield22" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fusible Element/Blank</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield18" id="textfield9" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield19" id="textfield13" /></td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue5').value=this.options[this.selectedIndex].text; document.getElementById('idValue5').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="one">no</option>
   <option value="two">yes</option>

</select>
<input name="displayValue5" placeholder="add/select a value" id="displayValue5" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue5" id="idValue5" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield20" id="textfield23" /></td>
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
    <td height="25" colspan="2">Manlid </td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield21" id="textfield2" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield22" id="textfield14" /></td>
    <td>  <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue6').value=this.options[this.selectedIndex].text; document.getElementById('idValue6').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue6" placeholder="add/select a value" id="displayValue6" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue6" id="idValue6" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('idValue7').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue7" placeholder="add/select a value" id="displayValue7" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue7" id="idValue7" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield23" id="textfield32" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Fill Valve-Yellow</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield24" id="textfield38" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield25" id="textfield16" /></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue8').value=this.options[this.selectedIndex].text; document.getElementById('idValue8').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue8" placeholder="add/select a value" id="displayValue8" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue8" id="idValue8" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue9').value=this.options[this.selectedIndex].text; document.getElementById('idValue9').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue9" placeholder="add/select a value" id="displayValue9" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue9" id="idValue9" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield26" id="textfield33" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green</td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield27" id="textfield39" /></td>
    <td colspan="3"><input type="text" style="width:97%;"name="textfield28" id="textfield17" /></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue10').value=this.options[this.selectedIndex].text; document.getElementById('idValue10').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue10" placeholder="add/select a value" id="displayValue10" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue10" id="idValue10" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue11').value=this.options[this.selectedIndex].text; document.getElementById('idValue11').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue11" placeholder="add/select a value" id="displayValue11" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue11" id="idValue11" type="hidden">
</div></td>
    <td colspan="2"><input type="text" style="width:195px;"name="textfield29" id="textfield34" /></td>
  </tr>
 
 
  <tr>
    <td height="24" colspan="11"><strong>Leakness Proof Test @
    <input style="width:120px;" type="text" name="textfield30" id="tx28" /> 
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
    <td height="25"><input type="text" style="width:97%;"name="textfield31" id="textfield26" /></td>

    <td height="25"><input type="text" style="width:97%;"name="textfield32" id="textfield27" /></td>
    <td><input type="text" style="width:97%;"name="textfield33" id="textfield28" /></td>
    <td><input type="text" style="width:97%;"name="textfield34" id="textfield29" /></td>
    <td colspan="2"><input type="text" style="width:97%;"name="textfield35" id="textfield30" /></td>
    <td><input type="text" style="width:97%;"name="textfield36" id="textfield31" /></td>
    <td><input type="text" style="width:97%;"name="textfield37" id="textfield43" /></td>
    <td><input type="text" style="width:97%;"name="textfield38" id="textfield44" /></td>
    <td colspan="2"><input type="text" style="width:97%;"name="textfield39" id="textfield45" /></td>
  </tr>
  <tr>
    <td colspan="8"><strong>Record Sheets Checked </strong></td>
    <td width="101"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue12').value=this.options[this.selectedIndex].text; document.getElementById('idValue12').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue12" placeholder="add/select a value" id="displayValue20" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue12" id="idValue12" type="hidden">
</div></td>
    <td width="195" colspan="2"><div align="left"><strong>Initials:</strong>
      <input style="width:50px;" type="text" name="textfield40" id="tx32" />
    </div></td>
  </tr>
  <tr>
    <td height="83" colspan="2"><p align="left"><strong>Dome Cover Secured:</strong><strong>
      <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue18').value=this.options[this.selectedIndex].text; document.getElementById('idValue18').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue13" placeholder="add/select a value" id="displayValue13" style="position:absolute;top:0px;left:0px;width:75%;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue13" id="idValue13" type="hidden">
</div>
    </strong></p>
    <p>&nbsp;</p></td>
    <td colspan="3"><strong>Seal Number:
      <input style="width:100px;" type="text" name="textfield41" id="tx40" />
    </strong></td>
    <td colspan="3"><strong>Hazard Sign Covered:
      <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue19').value=this.options[this.selectedIndex].text; document.getElementById('idValue19').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="one">No</option>
   <option value="two">Yes</option>

</select>
<input name="displayValue14" placeholder="add/select a value" id="displayValue19" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:23px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue14" id="idValue14" type="hidden">
</div>
    </strong></td>
    <td colspan="3"><strong>Intials:
    </strong>      <input style="width:120px;" type="text" name="textfield42" id="tx36" /></td>
  </tr>
  <tr>
    <td height="46" colspan="11"><strong>The Vessel contains dry Air/Nitrogen @ 
      <input style="width:50px;" type="text" name="textfield43" id="tx44" /> 
      C. Dew point at the pressure of 
      <input style="width:50px;" type="text" name="textfield44" id="tx48" /> 
      psig.
    </strong></td>
  </tr>
  <tr>
    <td height="53" colspan="11"><div align="left"><strong>Released to 
      <input style="width:100px;" type="text" name="textfield45" id="tx49" />
      (haulier):
  <input style="width:100px;" type="text" name="textfield46" id="tx50" />
     vehicle registration number:
     <input style="width:100px;" type="text" name="textfield47" id="tx51" />
    </strong><strong></strong></div></td>
  </tr>
  <tr>
    <td height="83" colspan="11"><strong>For GLS 
      <input style="width:120px;" type="text" name="textfield48" id="tx52" /> 

 date & Time:
<input id="demo22" type="text"name="textfield49"  style="width:170px;"><a href="javascript:NewCal('demo22','ddmmyyyy','true','24')"><img src="../image/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
  <input type ="submit" id="btnimp" value="save the form"  class="btn btn-danger">
    </strong></td>
  </tr>
</table>
</form>
        </div> 
    
    
    
    
    
    
 
    
  </div>
</body>