<html>
<head>  
  <meta charset="utf-8">
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

      
     
    
    <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  


</head>


<body style="background-color: lightcyan">
  
   <form id="form111" action="<?php echo site_url('workflow/storeonrepairwkflow') ?>" method="POST">
 

       
       
       
  
 
     
   
     <img  style="position:absolute; left:30%;top:5%;" width="280"  height="80" src="..\image\gt1.png" /> 
     <p style="position: absolute;left:50%;top:8%;font-size: 30px;font-weight: bold;background-color:lightgoldenrodyellow">WorkOrder Reassignment</p>
   
   


<table width="483" height="214" border="3" style="position: absolute; left: 30%; top: 20%; height: 231px; width: 552px; font-weight: bold;">

 
  
  <tr>
    <td width="329" height="26" align="center" >workorderid</td>
    <td width="207"> 
        <div> 
            

         
            <input name="wid" readonly="readonly" value="<?php echo $id ?>" >
        </div></td>
 
   
 
 </tr>
 

  <tr>
    <td width="329" height="26" align="center" >Slot Number</td>
    <td width="207"> 
        <div> 
            
<select style="background-color:mediumspringgreen;width:90%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('sid').value=this.options[this.selectedIndex].text; document.getElementById('idValue9').value=this.options[this.selectedIndex].value;">
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
            <input name="slid" type="hidden" id="sid" style="width:75%;height:25px; height:21px\9;height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue9" id="idValue9" type="hidden">
        </div></td>
 
   
 
 </tr>
 
 
 
 
 
 
 
 
 
 
 
  <tr>
    <td height="47" colspan="2"  align="center" >
        <a href="<?php echo site_url('site')?>"><input type ="button" style="text-align:center;width:125px;"id="btnimp" value="Back"  class="btn btn-danger"> </a>
                            
   
    
 <input type ="submit"  style="text-align:center;width:125px;"id="btmp" name="gogo"  value="GO!"  class="btn btn-danger">
      
 
    </td>
  </tr>
</table>
 
  
      </form>

</body>
</html>