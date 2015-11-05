<html>
<head>  
  <meta charset="utf-8">
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

      
     
    
    <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  


</head>


<body style="background-color:lightcyan">
  
   <form id="form1" action="<?php echo site_url('workflow/storewkflow') ?>" method="POST">
 
  <?php $row = $this->work_model->maxwkid(); ?>
       
       
       
  
 
     
   
     
   
   
   


<table width="583" height="314" border="3" style="position: absolute; left: 30%; top: 20%; height: 231px; width: 552px; font-weight: bold;">
<tr height="96">
    <td><img  style="position:absolute; left:0%;top:0%;" width="320"  height="100" src="..\image\gt1.png" /> </td>
    <td align="center" style="-font-weight: bold;font-size: 20px;"> 
          WorkOrder Creation 
    
 </td>
   
 
 </tr>
 
  <tr>
    <td width="329" height="36" align="center" >Create WorkOrder Id</td>
    <td width="207"> 
               
        <input style="background-color:mediumspringgreen;font-weight: bold;width:100%;" name="wkoid" type="text" id="tx4" value="<?php echo $row+1 ?>" readonly="readonly"  width="200px">
 </td>
   
 
 </tr>
 
 
 
 
 
  <tr>
    <td width="329" height="36" align="center" >Slot Number</td>
    <td width="207"> 
        <div> 
            
<select style="background-color:mediumspringgreen;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('sid').value=this.options[this.selectedIndex].text; document.getElementById('idValue9').value=this.options[this.selectedIndex].value;">
  <option ></option>
 
     
    <?php
           
            $results = $this->work_model->slotsavailable();
                   
                foreach ($results as $row1): 
           // foreach ($result as $row):
            
               ?> 
               
                    
                   <option> <?php echo $row1->slotnumber ?></option>
                    
                    
                    
               
               <?php
           endforeach;
?>
</select>
            <input name="sid" type="hidden" id="sid" style="width:100%;height:25px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue9" id="idValue9" type="hidden">
        </div></td>
 
   
 
 </tr>
 
 
 
 
 
 
 
 
 
 
  <tr>
    <td height="36" align="center" ><p>TECHNICAL IDENTIFICATION NUMBER</p></td>
    <td width="207"> 
             
      <input style="background-color:mediumspringgreen;font-weight: bold;width:100%;"name="equip" type="text" id="tx1" value="" width="200px">
 </td>
 </tr>

 
  <tr height="76">
    <td height="47" colspan="2"  align="center" >
        <a href="<?php echo site_url('site')?>"><input type ="button" style="text-align:center;width:125px;"id="btnimp" value="Back"  class="btn btn-danger"> </a>
                            
   
    <input style="background-color:mediumspringgreen;font-weight: bold;" name="date" type="hidden" id="da"  width="200px">
  <script type="text/javascript">    
    document.getElementById("da").value = Date().toString();    
</script> 
    
 <input type ="submit"  style="text-align:center;width:125px;"id="btnimp" name="go"  value="GO!"  class="btn btn-danger">
      
 
    </td>
  </tr>
</table>
        
     
      </form>

</body>
</html>