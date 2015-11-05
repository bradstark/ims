
<html>
       
    <head>
    <script>
      function Change_to_section1(){
            document.getElementById("content").innerHTML='<object width="100%" height="200%" float="left"  data="<?php echo site_url('isocontainer/isoinspectionform1')?>"" ></object>';
  }
        function Change_to_section2(){
            document.getElementById("content").innerHTML='<object  width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform2')?>" ></object>';
  }
        function Change_to_section3(){
           document.getElementById("content").innerHTML='<object width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform3')?>" ></object>';
       }function Change_to_section4(){
            document.getElementById("content").innerHTML='<object width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform4')?>" ></object>';
        }function Change_to_section5(){
            document.getElementById("content").innerHTML='<object width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform5')?>" ></object>';
        }function Change_to_section6(){
            document.getElementById("content").innerHTML='<object width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform6')?>" ></object>';
        }function Change_to_section7(){
            document.getElementById("content").innerHTML='<object width="100%" height="200%" data="<?php echo site_url('isocontainer/isoinspectionform7')?>" ></object>';
  }
</script>
        </head>
<body>

<div id="container" style="width:1400px">

<div id="header">
<center><h1 style="margin-bottom:0;">WorkOrder Details</h1></center></div>

<div id="menu" style="background-color:#94B8B8;height:650px;width:200px;float:left;">
<table>
<tr>
<td>
<button type="button" name="section1" style="border:none;" onclick="Change_to_section1()" >Section1</button>
</td>
<td><label style="background-color:orange;width:35px;">Inprogess</label></td>
</tr>
<tr>
<td>
<button type="button" name="section2" style="border:none;" onclick="Change_to_section2()" >Section2</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
<tr>
<td>
<button type="button" name="section3" style="border:none;" onclick="Change_to_section3()" >Section3</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
<tr>
<td>
<button type="button" name="section3" style="border:none;" onclick="Change_to_section4()" >Section4</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
<tr>
<td>
<button type="button" name="section3" style="border:none;" onclick="Change_to_section5()" >Section5</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
<tr>
<td>
<button type="button" name="section3" style="border:none;" onclick="Change_to_section6()" >Section6</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
<tr>
<td>
<button type="button" name="section3" style="border:none;" onclick="Change_to_section7()" >Section7</button>
</td>
<td><label style="background-color:red;width:35px;">Incomplete</label></td>
</tr>
</table>
</div>

<div id="content" style="background-color:#94B8;height:400px;width:1200px;float:left;">
</div>



</div>
 
</body>
</html>
