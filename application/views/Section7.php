<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script type="text/javascript" src="<?php echo base_url('js/datetimepicker.js'); ?>"></script> 
</head>

<body>


<body>
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

</body>
</html>

</html>
