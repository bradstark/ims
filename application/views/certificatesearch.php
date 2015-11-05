<html>
<head>  
  <meta charset="utf-8">
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

      
     
    
    <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  


</head>


<body style="background-color:lightcyan">
  
   <form id="form1" action="<?php echo site_url('workflow/wkcertificate') ?>" method="POST">
 


<table width="583" height="214" border="3" style="position: absolute; left: 30%; top: 20%; height: 231px; width: 552px; font-weight: bold;">
<tr height="96">
    <td><img  style="position:absolute; left:0%;top:0%;" width="320"  height="75" src="..\image\gt1.png" /> </td>
    <td align="center" style="-font-weight: bold;font-size: 20px;"> 
          Search WorkOrder 
    
 </td>
   
 
 </tr>
 
  <tr>
    <td height="36" align="center" ><p>TECHNICAL IDENTIFICATION NUMBER</p></td>
    <td width="217"> 
         <input style="background-color:mediumspringgreen;font-weight: bold;width: 190px;"name="tid" class="icon-search" type="text" id="tx1" value="" width="200px"><span class="glyphicon glyphicon-search"></SPAN> 
</td> </tr>
 
 
 
 
 
  
 
 
 
 
 

 
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