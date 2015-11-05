<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

 <script src="//code.jquery.com/jquery-1.9.1.js"></script>

 <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

 <link rel="stylesheet" href="/resources/demos/style.css">
     <script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 


</head>

<body>
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
  
             
            







</body>
</html>
