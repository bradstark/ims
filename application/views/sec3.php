<!DOCTYPE html>  
<html>  
<head>  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ISO MANAGEMENT SYSTEM</title>
        <meta name="description" content="ISO MANAGEMENT SYSTEM in the cloud">
        <meta name="author" content="Team iso">
      
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script> 
<?php $row = $this->iso_model->get_by_vesselid($key); ?>
</head>
<body onload="setColor('<?php echo $row->hcells ?>');">
    <form id="form1" action="<?php echo site_url('isocontainer/sample') ?>" method="POST">
    
<table width="751" border="1" style="position: absolute; left: 127px; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
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
      <input style="font-weight:bold;font-size: 16px;"type="text"value="<?php echo $row->vesselid ?>" name="vesselid" id="tx3" />
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
   
     
    <input type="text"value="<?php echo $row->vent ?>" name="vent" id="tx1 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1170px;" /> 
    <input type="text"value="<?php echo $row->air ?>" name="air/n2"  id="tx2 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1210px;" />
    <input type="text" value="<?php echo $row->fusible ?>"name="fusible" id="tx3 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1250px;" />
    <input type="text"value="<?php echo $row->fill?>"  name="fill" id="tx4 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1130px;" />
   <input type="text" value="<?php echo $row->batchno ?>" name="batchno" id="tx5 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:445px;top:1363px;" />
   <input type="text"value="<?php echo $row->clean ?>" name="clean"  id="tx6 "style="width: 308px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:465px;top:1610px;" />
   <input type="text"value="<?php echo $row->date ?>" name="datepicker" id="datepicker"style="width:160px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:855px;top:1610px;" />
   
   <textarea  name="repairs"value="<?php echo $row->repairs ?>" cols="30" style="width: 880px;height: 168px;top:1430px;z-index: 10;position: absolute;left:160px;"rows="4"></textarea>
   
    <input type="text" id="tb2" name ="hcells"style="display: none;"   class="input-xlarge">
   
   
    <img src="..\image\rings.jpg" style="position: absolute; left: 150px; top: 140px; height:310px; width: 900px;" />
  
         <img src="..\image\ajay.jpg" style="position: absolute; left: 150px; top: 700px; height:310px; width: 900px;" />
      <img src="..\image\zoom.jpg" style="position: absolute; left: 150px; top: 1350px; height:310px; width: 900px;" />
 <img src="..\image\pic2.jpg" style="position: absolute; left: 150px; top: 460px; height:200px; width: 900px;" />
 
 <img src="..\image\last.jpg" style="position: absolute; left: 150px; top: 1060px; height:250px; width: 900px;" />

 
 
  <script > 
 function setColor(btnid){
     var cell=btnid.split(",");
   for(var i=0;i<=cell.length;i++){
var property=document.getElementById(cell[i]);



property.style.backgroundColor = "red";
   }

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

    $( "#datepicker" ).datepicker();

  });

  </script>
    
  
      
                 <div>
                  
                     <input type ="button" style="position:absolute;top:1800px;text-align: left;width:125px;left:600px;"id="btnimp" value="save the form" class="btn btn-danger">
                </div>
     
               
          </form>
</body>   
</html>
