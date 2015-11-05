<!DOCTYPE html>  
<html>  
     <?php 
 if ($this->session->userdata('role') == 'staff') {
     $data['eq']=$equipmentid;
     $data['cs']=$containersize;
     $data['wi']=$workorderid;
     $data['sn']=$slotnumber;
 $this->load->view('includes/staff_navbarbobu',$data);}

        if ($this->session->userdata('role') == 'admin') {
            $data['eq']=$equipmentid;
     $data['cs']=$containersize;
     $data['wi']=$workorderid;
     $data['sn']=$slotnumber;
          $this->load->view('includes/staff_navbar2bobu',$data);
        }
 ?>
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
    
   
    

 <ul class="nav nav-pills nav-stacked col-md-2 ">
  <li style="background-color:<?php echo $row1->bupurging ?>;"><a href="#tab_f" data-toggle="pill"style="font-weight: bold;font-size:18px;color: black;">Bromine Vessel Purging Record</a></li>
 
   <li style="background-color:<?php echo $row1->containerdimension ?>;"><a href="#tab_a"  data-toggle="pill" style="font-weight: bold;color: black;font-size:18px;">ISO Container Dimension Record</a></li>
  <li style="background-color:<?php echo $row1->inspecframe1 ?>;"><a href="#tab_b" data-toggle="pill"style="font-weight: bold;font-size:18px;color: black; ">ISO Inspection Frame Record-1</a></li>
  <li style="background-color:<?php echo $row1->containerinspec1 ?>;"><a href="#tab_c" data-toggle="pill"style="font-weight: bold;font-size:18px;color: black;">ISO Container Inspection Record-1</a></li>
  <li style="background-color:<?php echo $row1->inspecframe2 ?>;"><a href="#tab_d" data-toggle="pill"style="font-weight: bold;font-size:18px;color: black;">ISO Inspection Frame Record-2</a></li>
  <li style="background-color:<?php echo $row1->containerinspec2 ?>;"><a href="#tab_e" data-toggle="pill"style="font-weight: bold;font-size:18px;color: black;">ISO Container Inspection Record-2</a></li>
  <li style="background-color:<?php echo $row1->ercertificate ?>;"><a href="#tab_g" data-toggle="pill"style=" font-weight: bold;font-size:18px;color: black;">Equipment Release Certificate</a></li>
  <li>
         <?php $data['id']=$workorderid;?>
         <form id="fo32432" action="<?php echo site_url('workflow/filesample/' . $data['id']) ?>" method="POST">
             
             <script>
             // Popup window function
	function basicPopup() {
popupWindow = window.open("http://192.168.2.4/ims/workflow/filesample",'popUpWindow','height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
popupWindow.my_special_setting = <?php echo $workorderid ?>;	
    }
         </script>
         <script>
             // Popup window function
	function Popup(url) {
popupWindow = window.open(url,'popUpWindow','height=800,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');
	}
         </script>
         <a style="background-color:greenyellow;color:black;width:200px;height:35px;font-size:20px;" onclick="Popup(this.href);return false"  href="<?php echo site_url('workflow/filesample/' . $workorderid) ?>"><span class="glyphicon glyphicon-upload"></SPAN>  Upload Certificate</a></td>
<input type="hidden" value="<?php echo $workorderid ?>"  name="wiid" />
         
       </form>  </li>
   <li>
        <form id="form121" action="<?php echo site_url('site') ?>" method="POST">
       <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid" value="<?php echo $workorderid ?>" id="f21e41" />
         <input style="width:200px;" type="hidden" name="sid" width ="70%"id="fe1641" value="<?php echo $slotnumber ?>" />
         <input style="width:200px;" type="hidden" name="coid" width ="70%"id="cnt641" value="<?php echo $containersize ?>" />
          <input style="width:200px;" type="hidden" name="eqid" width ="70%"id="cnteqeq641" value="<?php echo $equipmentid?>" />
          <a ><button  type="submit" value="Staff Management" style="width:200px;color:black;"class="btn btn-primary"> <span class="glyphicon glyphicon-home"></SPAN>  Home </button></a>
               </form>  </li>
   
    <li>
      <form id="form1121" action="<?php echo site_url('site') ?>" method="POST">
       <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="cwokid" value="<?php echo $workorderid ?>" id="5432341" />
         <input style="width:200px;" type="hidden" name="csid" width ="70%"id="fe132641" value="<?php echo $slotnumber ?>" />
         <input style="width:200px;" type="hidden" name="checkout" width ="70%"id="da41" value="" />
         <script type="text/javascript">    
    document.getElementById("da41").value = Date().toString();    
</script>
    <a ><button type="text" href="#myModal"  style="width:200px; " value='close' role ="button" data-toggle="modal"
               class="btn btn-danger"><span class="glyphicon glyphicon-remove"></SPAN> Close</button></a>
            <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to close work order?</p>
                <p class="text-warning"><small>Press Close if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                        <button type="submit"   class="btn btn-danger" value="Close" name="close" >Close</button>
                    </div>
            </div></div>
                </div>   </form>  </li>
     <li>
      <form id="form1621" action="<?php echo site_url('site') ?>" method="POST">
       <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wkid" value="<?php echo $workorderid ?>" id="32321" />
         <input style="width:200px;" type="hidden" name="eid" width ="70%"id="641" value="<?php echo $equipmentid ?>" />
          <input style="width:200px;" type="hidden" name="slid" width ="70%"id="641" value="<?php echo $slotnumber ?>" />
          <input style="width:200px;" type="hidden" name="conid" width ="70%"id="cont641" value="<?php echo $containersize ?>" />
           <input style="width:200px;" type="hidden" name="man" width ="70%"id="cma41" value="<?php echo $manufacturer?>" />
    <a ><a ><button type="text" href="#myModal1"  value='close'  role ="button" data-toggle="modal"  style="width:200px;color:black;"
               class="btn btn-info"><span class="glyphicon glyphicon-pushpin"></SPAN> On Repair</button></a></a>
            <div id="myModal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to set on repair mode?</p>
                <p class="text-warning"><small>Press yes if you  to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                    <button type="submit"  class="btn btn-danger" value="" name="OnRepair" >Yes</button>
                    </div>
            </div></div>
                </div>   </form>  </li>
     
</ul>
    
    
    
<div class="tab-content col-md-10">
    
    
    
    
    
    
        <div class="tab-pane" id="tab_a">
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
 


    <div>
     <form id="tab" onkeypress="return event.keyCode !== 13;" action="<?php echo site_url('workflow/update_section1') ?>" method="POST">
     <div>
       <input style="width:200px;" type="hidden" name="wid1" width ="70%"id="fe1x61" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id1" width ="70%"id="coxa61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id1" width ="70%"id="cox61" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="sl1id1" width ="70%"id="coxx61" value="<?php echo $slotnumber?>" />
     <input style="width:200px;" type="hidden" name="man11" width ="70%"id="eqwz461" value="<?php echo $manufacturer?>" />
    <table width="1270" height="56" border="1" style="position:absolute;left:6%;top:70px">
  <tr>
    <td width="592" style="background-color: greenyellow;font-weight: bold; font-size: 26px;">Equipment Id: <input type="text" value="<?php echo $equipmentid?>" style="position:absolute;width:200px;font:bold 17px Times New Roman;height:30px" name="eqid" id="fe2" /></td>
    <td width="562"style="background-color: greenyellow;"><span style="background-color: greenyellow;font-weight: bold;font-size: 26px;">Date Started: <input type="text" style="position:absolute;font:bold 17px Times New Roman;width:200px;height:30px" name="datestarted" id="fe3" /> </span></td>
  </tr>
</table>
        
        


<img src="..\image\Screenshot (1)(1).png" alt="iso" id="aja" width="412" height="270" style="position: absolute; left: 120px; top: 146px"/>
<img src="..\image\Dimen.jpg" alt="iso" id="aja" width="412" height="273" style=" position: absolute;width:500px; left: 550px; top: 146px"/>




<table width="200" border="1" style="position: absolute; left: 6%; top: 430px; width: 1391px; height: 172px;">
  <tr>
    <th width="111" scope="row">Dimension</th>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman"> L</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">S</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">W</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">P</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">H</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D1</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D2</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">K1</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D3</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D4</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">K2</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D5</td>
    <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">D6</td>
     <td width="73" style="alignment-adjust:central;font: bold 25px Times New Roman">K3</td>
  </tr>
  <tr>
    <th scope="row">Nominal</th>
    <td  style="alignment-adjust:central;font: bold 25px Times New Roman">6058</td>
    <td  style="alignment-adjust:central;font: bold 25px Times New Roman">5853</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2438 </td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2259</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman">2438</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
     <td  style="alignment-adjust:central;font: bold 25px Times New Roman">13</td>
     <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
       <td  style="alignment-adjust:central;font: bold 25px Times New Roman">13</td>
        <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
    <td style="alignment-adjust:central;font: bold 25px Times New Roman;background-color:#000">2222</td>
     <td style="alignment-adjust:central;font: bold 25px Times New Roman;">10</td>
  </tr>
  <tr>
    <th scope="row">Actual-Initial</th>
     <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_L?>" name="ac1" id="ac0" /></td>
     <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_S?>" name="ac2" id="ac1" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_W?>"name="ac3" id="ac2" /></td>-
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_P?>"name="ac4" id="ac3" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_H?>"name="ac5" id="ac4" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D1?>"name="ac6" id="ac5" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D2?>"name="ac7" id="ac6" /></td>
    <td><input  type="text" style="width:100%;height:100%;" readonly="readonly" value="<?php echo $row2->Actual_Initial_K1?>"name="ac8" id="ac7" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D3?>"name="ac9" id="ac8" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D4?>"name="ac10" id="ac9" /></td>
    <td><input readonly="readonly" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_K2?>"name="ac11" id="ac10" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D5?>"name="ac12" id="ac11" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_D6?>"name="ac13" id="ac12" /></td>
    <td><input readonly="readonly" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Initial_K3?>"name="ac14" id="ac13" /></td>
     
     <script>
    
$("#ac5").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac5");
var inp1 = $("#ac6");
var inp2 =$("#ac7");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#ac6").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac6");
var inp1 = $("#ac5");
var inp2 =$("#ac7");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
     <script>
    
$("#ac8").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac8");
var inp1 = $("#ac9");
var inp2 =$("#ac10");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#ac9").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac9");
var inp1 = $("#ac8");
var inp2 =$("#ac10");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#ac11").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac11");
var inp1 = $("#ac12");
var inp2 =$("#ac13");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#ac12").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#ac12");
var inp1 = $("#ac11");
var inp2 =$("#ac13");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
  </tr>
  <tr>
    <th scope="row">Actual-Final</th>
       <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_L?>"name="af1" id="af0" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_S?>"name="af2" id="af1" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_W?>"name="af3" id="af2" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_P?>"name="af4" id="af3" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_H?>"name="af5" id="af4" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D1?>"name="af6" id="af5" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D2?>"name="af7" id="af6" /></td>
    <td><input  type="text" style="width:100%;height:100%;" readonly="readonly" value="<?php echo $row2->Actual_Final_K1?>"name="af8" id="af7" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D3?>"name="af9" id="af8" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D4?>"name="af10" id="af9" /></td>
    <td><input readonly="readonly" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_K2?>"name="af11" id="af10" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D5?>"name="af12" id="af11" /></td>
    <td><input class="username" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_D6?>"name="af13" id="af12" /></td>
    <td><input readonly="readonly" type="text" style="width:100%;height:100%;" value="<?php echo $row2->Actual_Final_K3?>"name="af14" id="af13" /></td>
  </tr>
    
     <script>
    
$("#af5").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af5");
var inp1 = $("#af6");
var inp2 =$("#af7");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#af6").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af6");
var inp1 = $("#af5");
var inp2 =$("#af7");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>  
    <script>
    
$("#af9").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af9");
var inp1 = $("#af8");
var inp2 =$("#af10");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#af8").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af8");
var inp1 = $("#af9");
var inp2 =$("#af10");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
     <script>
    
$("#af11").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af11");
var inp1 = $("#af12");
var inp2 =$("#af13");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
    <script>
    
$("#af12").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#af12");
var inp1 = $("#af11");
var inp2 =$("#af13");

    var p=inp.val();
    var e=inp1.val();
    
        inp2.val(p-e);
                
    
    }
});
    
    </script>
</table>
 
<label style="alignment-adjust:central;font: bold 22px Times New Roman;position:absolute;left:8%;top:600px"> Frame conforms to the dimensional requirements of ISO 668-1979(E)</label>


<table  border="1"style="position:absolute;left:6%;top:625px;width:1170px;height:66px;">
  <tr>
      <td width="592" style="font-weight: bold; font-size: 20px;"> <label>Technician:<input class="username" id="ajay" style=width:200px;height:30px;alignment-adjust:central;" value="<?php echo $row2->Technician?>" type="text" name ="tech"  </label></td>
             
    <td width="562"><span style="font-size: 20px; font-weight: bold;"><label>Date: 
   <input type="text" style=width:200px;height:30px;" class="username"  value="<?php echo $row2->Date?>"name="date2" id="1ajay" /></label> </span></td>
    <script>
    
$("#ajay").keyup(function (event) {
    if (event.keyCode === 13) {
       
$('#ajay').val('<?php echo $this->session->userdata('username');  ?>'); 
     
    }
});
    
    </script> 
     <script>
    
$("#1ajay").keyup(function (event) {
    if (event.keyCode === 13) {
       
$('#1ajay').val('<?php echo date("Y/m/d");?>');
     
    }
});
    
    </script> 
  </tr>
</table>
    <table width="1270" height="46" border="1"style="position:absolute;left:6%;top:0%;">
  <tr>
      <td width="279" height style="background-color: lightseagreen;font-weight: bold; font-size: 36px;"><img height="65" src="..\image\download.jpg"  /></td>
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
<button type="submit" onclick="changetocolor111('red');"  class="btn btn-danger" style="position:absolute;top:730px;left : 58%;width:91px;height:35px;"name="finish" id="ns_submit" >Finish</button>
  <button type="submit" onclick="changetocolor111('yellow')"  class="btn btn-danger" style="position:absolute;top:730px;left : 50%;width:91px;height:35px;"name="save" id="frameins_submit" >Submit</button>
     </form>
 
 
        
    </div>    
      
            </div>
    
    
    
    
    
    
    
    
    
    
   
    
        <div class="tab-pane" id="tab_b">
        
         <?php $row = $this->work_model->get_by_wkid($workorderid); ?>   
            
<img src="..\image\Screenshot (4).png" style="position: absolute; left: 850px; top: 235px; height:210px; width: 223px;" />

<img src="..\image\Screenshot (4)(1).png" style="position: absolute; left: 853px; top: 463px;height:305px; width: 242px;" />
<img src="..\image\geesa.jpg" style="position: absolute; left: 853px; top: 828px;height:265px; width: 242px;" />
<img src="..\image\bomma1.png" style="position: absolute; left: 853px; top: 1168px;height:315px; width: 252px;" />
<img src="..\image\bomma2.png" style="position: absolute; left: 853px; top: 1500px;height:255px; width: 242px;" />
<img src="..\image\bomma3.png" style="position: absolute; left: 853px; top: 1750px;height:205px; width: 222px;" />
  <form id="form432431" onkeypress="return event.keyCode !== 13;" action="<?php echo site_url('workflow/isoinspecframerecord1') ?>" method="POST">
      <input style="width:200px;" type="hidden" name="wid" width ="70%"id="fe161" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id" width ="70%"id="co61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id" width ="70%"id="co61" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="sl1id" width ="70%"id="co61" value="<?php echo $slotnumber?>" />
     <input style="width:200px;" type="hidden" name="man1" width ="70%"id="eqw461" value="<?php echo $manufacturer?>" />
      
    
<table width="1175" height="107" border="1">
   <tr>
    <th width="304" height="101" scope="row"><img src="..\image\download.jpg"  /></th>
    <td width="492" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p></p>
    Date: <input type="text" value="<?php echo $row->datestart; ?>"  name="datestarted11" width ="45px" id="ds1" />
 </td>
    <td width="133" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p></p>
    <p></p></td>
    <td width="218" align="left" valign="top" style="font: bold 25px Times New Roman;top:0%"><p>Reference:F02.04</p>
    <p> </p></td>
     <script>
    
$("#ds1").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
      
 $('#ds1').val('<?php echo date("Y/m/d"); ?>');
      
    }
});
    
    </script>
  </tr>
</table>
<table width="1172" height="65" border="1">
  <tr>
   <th width="598" height="59"  valign="center" style="background-color:greenyellow;font: bold 15px Times New Roman" scope="row"><p>14T Iso frame record inspection</p>
    </t>  <th width="558"  valign="center" height="59"   style="background-color:greenyellow;font: bold 15px Times New Roman" scope="row">FrameID:
    <input type="text" value="<?php echo $equipmentid?>" name="techid" width ="450px"id="fe5" /></th>
  </tr>
</table>
<table width="760" height="207" border="1" style="position: absolute; left: 89px; font-weight: bold;font-size: 18PX;top: 234px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Rear</p></th>
    <td width="78" align="center">1</td>
    <td   style="font: bold 20px Times New Roman" width="231">Long Diagonal</td>
    <td width="199"><input class="username" style="width:200px;" value="<?php echo $row->RearLongDiagonal; ?>" type="text" name="rear1" width ="70%"id="fe1611" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">2</td>
    <td  style="font: bold 20px Times New Roman">Short Diagonal</td>
    <td><input class="username" style="width:200px;" type="text" value="<?php echo $row->RearShortDiagonal; ?>" name="rear2" width ="70%"id="fe162" /></td>
  </tr>
  <tr>
    <td align="center">3</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td><input class="username" style="width:200px;" type="text" value="<?php echo $row->RearBottomRail;?>"  name="rear3" width ="70%"id="fe163" /></td>
  </tr>
  <tr>
    <td align="center">4</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td><input class="username" style="width:200px;" type="text" value="<?php echo $row->RearCornerCasting;?>"  name="rear4" width ="70%"id="fe164" /></td>
  </tr>
  <tr>
    <td  align="center">5</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td><input class="username" style="width:200px;" type="text" value="<?php echo $row->RearCornerPost;?>"  name="rear5" width ="70%"id="fe165" /></td>
  </tr>
  <tr>
      <td  align="center">6</td>
    <td style="font: bold 20px Times New Roman">Center Guesset</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->RearCentreGusset;?>" name="rear6" width ="70%"id="fe166" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">7</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input class="username" style="width:200px;" type="text" value="<?php echo $row->RearCornerGusset ?>" name="rear7" width ="70%"id="fe167" /></td>
  </tr>
  <script>
    
$("#fe1611").keyup(function (event) {
    
    if (event.keyCode === 13) {
        
       var inp = $("#fe1611");

if(inp.val() === ""){
        $('#fe1611').val('ok'); 
    }
 
      
    }
});
    
    </script>
    <script>
    
$("#fe162").keyup(function (event) {
    
    if (event.keyCode === 13) {
        var inp = $("#fe162");

if(inp.val() === ""){
        $('#fe162').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe163").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe163");

if(inp.val() === ""){
        $('#fe163').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe164").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe164");

if(inp.val() === ""){
        $('#fe164').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe165").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe165");

if(inp.val() === ""){
        $('#fe165').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe166").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe166");

if(inp.val() === ""){
        $('#fe166').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe167").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe167");

if(inp.val() === ""){
        $('#fe167').val('ok'); 
    }
    }
});
    
    </script>
</table>
<table width="997" height="298" border="1" style="position: absolute; left: 87px; top: 488px; height: 290px; width: 761px; font-weight: bold; font-size: 18px;">
  <tr>
    <th width="220" rowspan="10" scope="row"  style="font: bold 25px Times New Roman" ><p>Right Hand Side</p></th>
    <td width="81" align="center">8</td>
    <td   style="font: bold 20px Times New Roman" width="231">Front Diagonal</td>
    <td   style="font: bold 20px Times New Roman" width="181"><input class="username" style="width:200px;" type="text"value="<?php echo $row->RHSFrontDiagonal ?>" name="rear8" width ="70%"id="fe1622" /></td>
    
  </tr>
  <tr>
    <td  valign="right" align="center">9</td>
    <td  style="font: bold 20px Times New Roman">Front Sidepost</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->RHSFrontSidePost ?>" name="rear9" width ="70%"id="fe168" /></td>
  
  </tr>
  <tr>
    <td align="center">10</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->RHSFrontSaddle ?>" name="rear10" width ="70%"id="fe169" /></td>

  </tr>
  <tr>
    <td height="31" align="center">11</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->RHSBottomRail ?>" name="rear11" width ="70%"id="fe170" /></td>
  
  </tr>
  <tr>
    <td  align="center">12</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text" value="<?php echo $row->RHSSaddleGusset ?>"name="rear12" width ="70%"id="fe171" /></td>
    
  </tr>
  <tr>
    <td  align="center">13</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text" value="<?php echo $row->RHSRearSaddle ?>"name="rear13" width ="70%"id="fe172" /></td>
 
  </tr>
  <tr>
    <td   height="27" align="center">14</td>
    <td>Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text" value="<?php echo $row->RHSRearSidePost ?>"name="rear14" width ="70%"id="fe173" /></td>
    
  </tr>
    <tr>
    <td align="center" style="font: bold 20px Times New Roman">15</td>
    <td>Rear Diagonal</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->RHSRearDiagonal ?>" name="rear15" width ="70%"id="fe174" /></td>
  </tr>
  <tr>
    <td align="center" style="font: bold 20px Times New Roman">16</td>
    <td>Diagonal Guesset</td>
    <td><input  class="username" style="width:200px;" type="text"value="<?php echo $row->RHSDiagonalGusset ?>" name="rear16" width ="70%"id="fe175" /></td>
  </tr>
  <tr>
    <td height="27" align="center" style="font: bold 20px Times New Roman">17</td>
    <td>Corner Guesset</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->RHSCornerGusset ?>" name="rear17" width ="70%"id="fe176" /></td>
  </tr>
  <script>
    
$("#fe1622").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe1622");

if(inp.val() === ""){
        $('#fe1622').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe168").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe168");

if(inp.val() === ""){
        $('#fe168').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe169").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe169");

if(inp.val() === ""){
        $('#fe169').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe170").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe170");

if(inp.val() === ""){
        $('#fe170').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe171").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe171");

if(inp.val() === ""){
        $('#fe171').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe172").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe172");

if(inp.val() === ""){
        $('#fe172').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe173").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe173");

if(inp.val() === ""){
        $('#fe173').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe174").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe174");

if(inp.val() === ""){
        $('#fe174').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe175").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe175");

if(inp.val() === ""){
        $('#fe175').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe176").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe176");

if(inp.val() === ""){
        $('#fe176').val('ok'); 
    }
    }
});
    
    </script>
</table>

<table width="760" height="207" border="1" style="position: absolute;font-weight: bold;font-size: 18PX; left: 89px; top: 874px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Front</p></th>
    <td width="78" align="center">18</td>
    <td   style="font: bold 20px Times New Roman" width="231">Long Diagonal</td>
    <td width="199"><input class="username"  style="width:200px;" type="text"value="<?php echo $row->FrontLongDiagonal ?>" name="rear18" width ="70%"id="fe177" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">19</td>
    <td  style="font: bold 20px Times New Roman">Short Diagonal</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->FrontShortDiagonal ?>" name="rear19" width ="70%"id="fe178" /></td>
  </tr>
  <tr>
    <td align="center">20</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->FrontBottomRail ?>" name="rear20" width ="70%"id="fe179" /></td>
  </tr>
  <tr>
    <td align="center">21</td>
    <td  style="font: bold 20px Times New Roman">Corner casting</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->FrontCornerCasting?>" name="rear21" width ="70%"id="fe180" /></td>
  </tr>
  <tr>
    <td  align="center">22</td>
    <td style="font: bold 20px Times New Roman">Corner Post</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->FrontCornerPost ?>" name="rear22" width ="70%"id="fe181" /></td>
  </tr>
  <tr>
    <td  align="center">23</td>
    <td style="font: bold 20px Times New Roman">Center Guesset</td>
    <td><input class="username"   style="width:200px;" type="text"value="<?php echo $row->FrontCentreGusset ?>" name="rear23" width ="70%"id="fe182" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">24</td>
    <td style="font: bold 20px Times New Roman">Corner Guesset</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->FrontCornerGusset?>" name="rear24" width ="70%"id="fe183" /></td>
  </tr>
   <script>
    
$("#fe177").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe177");

if(inp.val() === ""){
        $('#fe177').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe178").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe178");

if(inp.val() === ""){
        $('#fe178').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe179").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe179");

if(inp.val() === ""){
        $('#fe179').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe180").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe180");

if(inp.val() === ""){
        $('#fe180').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe181").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe181");

if(inp.val() === ""){
        $('#fe181').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe182").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe182");

if(inp.val() === ""){
        $('#fe182').val('ok'); 
    }
    }
});
    
    </script>
     <script>
    
$("#fe183").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe183");

if(inp.val() === ""){
        $('#fe183').val('ok'); 
    }
    }
});
    
    </script>
</table>
<table width="997" height="298" border="1" style="position: absolute; left: 87px; top: 1148px; height: 290px; width: 761px; font-weight: bold; font-size: 18px;">
  <tr>
    <th width="220" rowspan="12" scope="row"  style="font: bold 25px Times New Roman;font-weight: bold;font-size: 18PX;" ><p>Left Hand Side</p></th>
    <td width="81" align="center">25</td>
    <td   style="font: bold 20px Times New Roman" width="231">Front Diagonal</td>
    <td   style="font: bold 20px Times New Roman" width="181"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSFrontDiagonal ?>" name="rear25" width ="70%"id="fe184" /></td>
    
  </tr>
  <tr>
    <td  valign="right" align="center">26</td>
    <td  style="font: bold 20px Times New Roman">Front Sidepost</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSFrontSidepost ?>" name="rear26" width ="70%"id="fe185" /></td>
  
  </tr>
   
  <tr>
    <td align="center">27</td>
    <td  style="font: bold 20px Times New Roman">Front Saddle</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSFrontSaddle ?>" name="rear27" width ="70%"id="fe186" /></td>

  </tr>
  <tr>
    <td height="31" align="center">28</td>
    <td  style="font: bold 20px Times New Roman">Bottom Rail</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text" value="<?php echo $row->LHSBottomRail?>"name="rear28" width ="70%"id="fe187" /></td>
  
  </tr>
  <tr>
    <td  align="center">29</td>
    <td style="font: bold 20px Times New Roman">Saddle Guesset</td>
    <td style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSSaddleGuesset ?>" name="rear29" width ="70%"id="fe188" /></td>
    
  </tr>
    <tr>
    <td  valign="right" align="center">30</td>
    <td  style="font: bold 20px Times New Roman">ladder/HandRail</td>
    <td  style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSLadderHandrail?>" name="rear30" width ="70%"id="fe189" /></td>
  
  </tr>
  <tr>
    <td  align="center">31</td>
    <td style="font: bold 20px Times New Roman">Rear Saddle</td>
    <td style="font: bold 20px Times New Roman"><input  class="username" style="width:200px;" type="text"value="<?php echo $row->LHSRearSaddle ?>" name="rear31" width ="70%"id="fe190" /></td>
 
  </tr>
  <tr>
    <td   height="27" align="center">32</td>
    <td>Rear Sidepost</td>
    <td style="font: bold 20px Times New Roman"><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSRearSidepost?>" name="rear32" width ="70%"id="fe191" /></td>
    
  </tr>
    <tr>
    <td align="center" style="font: bold 20px Times New Roman">33</td>
    <td>Rear Diagonal</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSRearDiagnol?>" name="rear33" width ="70%"id="fe192" /></td>
  </tr>
  <tr>
    <td align="center" style="font: bold 20px Times New Roman">34</td>
    <td>Diagonal Guesset</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSDiagnolGuesset ?>" name="rear34" width ="70%"id="fe193" /></td>
  </tr>
  <tr>
    <td height="27" align="center" style="font: bold 20px Times New Roman">35</td>
    <td>Corner Guesset</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->LHSCornerGuesset ?>" name="rear35" width ="70%"id="fe194" /></td>
  </tr>
  <script>
    
$("#fe184").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe184");

if(inp.val() === ""){
        $('#fe184').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe185").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe185");

if(inp.val() === ""){
        $('#fe185').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe186").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe186");

if(inp.val() === ""){
        $('#fe186').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe187").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe187");

if(inp.val() === ""){
        $('#fe187').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe188").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe188");

if(inp.val() === ""){
        $('#fe188').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe189").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe189");

if(inp.val() === ""){
        $('#fe189').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe190").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe190");

if(inp.val() === ""){
        $('#fe190').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe191").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe191");

if(inp.val() === ""){
        $('#fe191').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe192").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe192");

if(inp.val() === ""){
        $('#fe192').val('ok'); 
    }
    }
});
    
    </script><script>
    
$("#fe193").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe193");

if(inp.val() === ""){
        $('#fe193').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe194").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe194");

if(inp.val() === ""){
        $('#fe194').val('ok'); 
    }
    }
});
    
    </script>
</table>

<table width="760" height="207" border="1" style="position: absolute; left: 89px;font-weight: bold;font-size: 18PX; top: 1564px; height: 181px;">
  <tr>
    <th width="224" rowspan="7" scope="row"  style="font: bold 25px Times New Roman" ><p>Top</p></th>
    <td width="78" align="center">36</td>
    <td   style="font: bold 20px Times New Roman" width="231">Platform</td>
    <td width="199"><input class="username" style="width:200px;" type="text"value="<?php echo $row->Topplatform ?>" name="rear36" width ="70%"id="fe195" /></td>
  </tr>
  <tr>
    <td  valign="right" align="center">37</td>
    <td  style="font: bold 20px Times New Roman">Rear Top  Rail</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->TopRearTopRail ?>" name="rear37" width ="70%"id="fe196" /></td>
  </tr>
  <tr>
    <td align="center">38</td>
    <td  style="font: bold 20px Times New Roman">LH Top Rail</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->TopLHTopRail?>" name="rear38" width ="70%"id="fe197" /></td>
  </tr>
  <tr>
    <td align="center">39</td>
    <td  style="font: bold 20px Times New Roman">RH Top Rail</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->TopRHTopRail?>" name="rear39" width ="70%"id="fe198" /></td>
  </tr>
  <tr>
    <td  align="center">40</td>
    <td style="font: bold 20px Times New Roman">Front Top rail</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->TopFrontTopRail ?>" name="rear40" width ="70%"id="fe199" /></td>
  </tr>
  <tr>
    <td  align="center">41</td>
    <td style="font: bold 20px Times New Roman">Removable Rail</td>
    <td><input  class="username" style="width:200px;" type="text"value="<?php echo $row->TopRemovableRail ?>" name="rear41" width ="70%"id="fe200" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">42</td>
    <td style="font: bold 20px Times New Roman">Removable Rail Brack</td>
    <td><input class="username"  style="width:200px;" type="text"value="<?php echo $row->TopRemovableRailBrackets?>" name="rear42" width ="70%"id="fe201" /></td>
  </tr>
   <script>
    
$("#fe195").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe195");

if(inp.val() === ""){
        $('#fe195').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe196").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe196");

if(inp.val() === ""){
        $('#fe196').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe197").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe197");

if(inp.val() === ""){
        $('#fe197').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe198").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe198");

if(inp.val() === ""){
        $('#fe198').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe199").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe199");

if(inp.val() === ""){
        $('#fe199').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe200").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe200");

if(inp.val() === ""){
        $('#fe200').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe201").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe201");

if(inp.val() === ""){
        $('#fe201').val('ok'); 
    }
    }
});
    
    </script>
</table>
<table width="760"  border="1" style="position: absolute;font-weight: bold;font-size: 18PX; left: 89px; top: 1824px; height: 151px;">
  <tr>
    <th width="224" rowspan="4" scope="row"  style="font: bold 25px Times New Roman" ><p>Bottom</p></th>
    <td width="78" align="center">43</td>
    <td   style="font: bold 20px Times New Roman" width="231">Longitude</td>
    <td width="199"><input class="username" style="width:200px;" type="text"value="<?php echo $row->BottomLongitudes ?>" name="rear43" width ="70%"id="fe202" /></td>
  </tr>
 
  <tr>
    <td  align="center">44</td>
    <td style="font: bold 20px Times New Roman">Diagnol</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->BottomDiagonals ?>" name="rear44" width ="70%"id="fe203" /></td>
  </tr>
  <tr>
    <td  align="center">45</td>
    <td style="font: bold 20px Times New Roman">Saddle Beams</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->BottomSaddleBeams?>" name="rear45" width ="70%"id="fe204" /></td>
  </tr>
  <tr>
    <td   height="27" align="center">46</td>
    <td style="font: bold 20px Times New Roman">Center Beam</td>
    <td><input class="username" style="width:200px;" type="text"value="<?php echo $row->BottomCentreBeam?>" name="rear46" width ="70%"id="fe205" /></td>
  </tr>
   <script>
    
$("#fe202").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe202");

if(inp.val() === ""){
        $('#fe202').val('ok'); 
    }
    }
});
    
    </script> <script>
    
$("#fe203").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe203");

if(inp.val() === ""){
        $('#fe203').val('ok'); 
    }
    }
});
    
    </script>
  <script>
    
$("#fe204").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe204");

if(inp.val() === ""){
        $('#fe204').val('ok'); 
    }
    }
});
    
    </script>
    <script>
    
$("#fe205").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe205");

if(inp.val() === ""){
        $('#fe205').val('ok'); 
    }
    }
});
    
    </script>
</table>
<table width="990"  border="1" style="position: absolute; left: 89px; top: 1994px; height: 41px;">
  <tr>
    <th width="224" rowspan="1" scope="row"  style="font: bold 20px Times New Roman" >Inspected By:<input style="width:200px;height:25px;" type="text"value="<?php echo $row->InspectedBy ?>" name="rear47" width ="70%"id="fe16" /></th>
    <td width="78" align="center">Date:<input style="font: bold 20px Times New Roman;width:150px;" type="text" value="<?php echo $row->Datepage1 ?>"name="rear48" width ="70%"id="datepicker1" /></td>
  
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
           <button type ="submit" onclick="changetocolor22('yellow')" style="position:absolute;top:2050px;text-align: left;width:125px;left:600px;"id="btnimp"  name="save"  class="btn btn-danger">Submit</button>
               <button type ="submit" onclick="changetocolor22('red')" style="position:absolute;top:2050px;text-align: left;width:125px;left:730px;"id="btnssaimp"  name="sasave"  class="btn btn-danger">Finish</button>
                </div>
</form>
        </div>
    
    
    
    
    
    
    
    
    
    
   
    
       <div  class="tab-pane" id="tab_c">
          
 
         
             
<form id="form221" onkeypress="return event.keyCode !== 13;"  action="<?php echo site_url('isocontainer/isoinspectionrecord') ?>" method="POST">
   
    <input style="width:200px;" type="hidden" name="wid3" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id3" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id3" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man3" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id3" width ="70%"id="co64321" value="<?php echo $slotnumber?>" /><table width="751" border="1" style="position: absolute; left: 2%; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">

          <tr>
    <td width="232" height="40px"><img src="..\image\download.jpg"  width="200" height="67" alt="chem" /></td>
    <td style="background-color:lightseagreen;" width="199" height="61" align="center">
        <label style="font-weight:bold;font-size: 24px;">Issue:F02.23</label>
        
    </td>
    <td style="background-color:lightseagreen;"  width="141" height="61px" style="font-weight:bold;font-size: 24px;" align="center"> Page 1 of 2</td>
    <td style="background-color:lightseagreen;" width="180" height="61" align="center">
      <label style="font-weight:bold;font-size: 24px;">REVISION</label>
      </td>
  </tr>
  <tr>
    <td height="35" colspan="2" align="center" style="font-weight:bold;font-size: 24px;background-color:greenyellow;">14T/18T ISO Container Inspection Record</td>
    <td  style="background-color: greenyellow;" colspan="2" align="center">
      <label for="tx3"style="font-weight:bold;font-size: 24px;">Vessel ID: </label>
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
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:990px;" id="btn57" value="6" onclick="setColor('btn57','#fff200');" /> 
   
   
   
  
  
  
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:405px;top:545px;" id="btn58" value="52" onclick="setColor('btn58','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:500px;top:545px;" id="btn59" value="53" onclick="setColor('btn59','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:595px;top:545px;" id="btn60" value="54" onclick="setColor('btn60','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:695px;top:545px;" id="btn61" value="55" onclick="setColor('btn61','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:790px;top:545px;" id="btn62" value="52" onclick="setColor('btn62','yellow');" /> 
 
   
    
  <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:155px;top:310px;" id="btn63" value="59" onclick="setColor('btn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:355px;top:310px;" id="bktn57" value="57" onclick="setColor('bktn57','#fff200');" /> 
     <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:925px;top:310px;" id="btin64" value="64" onclick="setColor('btin64','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:865px;top:310px;" id="btin65" value="65" onclick="setColor('btin65','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:990px;top:310px;" id="bktn66" value="66" onclick="setColor('bktn66','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:270px;" id="bhtn63" value="63" onclick="setColor('bhtn63','yellow');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:270px;" id="btkn60" value="60" onclick="setColor('btkn60','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:555px;top:350px;" id="bttn58" value="62" onclick="setColor('bttn58','#fff200');" /> 
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:635px;top:350px;" id="btnr59" value="61" onclick="setColor('btnr59','#fff200');" /> 
  
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:195px;" id="btkp60" value="56" onclick="setColor('btkp60','#fff200');" /> 
   
   <input type="button" class="default span btn  btn-default btn-circle"style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;font-weight: bold;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:255px;top:426px;" id="botn58" value="58" onclick="setColor('botn58','#fff200');" /> 
   
   <input type="button"class="default span btn" style="width: 34px;z-index: 10;height: 34px;text-align: center;padding: 6px;font-size: 12px;background-color: yellow;position:absolute;z-index: 10;font-weight: bold;left:925px;top:230px;" id="btkp68" value="67" onclick="setColor('btkp68','#fff200');" /> 
   
   <input type="button"class="default span btn btn-default btn-circle" style="width: 28px;z-index: 10;height: 28px;text-align: center;padding: 6px;font-weight: bold;font-size: 12px;background-color: yellow;line-height: 1.42;border-radius: 15px;position:absolute;z-index: 10;left:925px;top:390px;" id="botn68" value="68" onclick="setColor('botn68','#fff200');" /> 
  
   
   
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
   
    <input class="username" type="text"value="<?php echo $row3->fill?>"  name="fill" id="tx4 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1130px;" />
  <input class="username"type="text"value="<?php echo $row3->vent ?>" name="vent" id="tx1 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1170px;" /> 
   
    <input  class="username"type="text"value="<?php echo $row3->air ?>" name="air/n2"  id="tx2 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1210px;" />
  <input class="username" type="text" value="<?php echo $row3->fusible ?>"name="fusible" id="tx3 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:575px;top:1250px;" />
       
    <input class="username" type="text" value="<?php echo $row3->batchno ?>" name="batchno" id="tx5 "style="width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:445px;top:1363px;" />
   <input class="username" type="text"value="<?php echo $row3->clean ?>" name="clean"  id="fe2040" style="width: 308px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;z-index: 10;left:465px;top:1610px;" />
   <input class="username" type="text" value="<?php echo $row3->date ?>" name="datepicker" id="fe2041" style="width:160px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:855px;top:1610px;" />
   
    <textarea   class="input-text"  cols="40" name="repairs" form="form221"  rows="5"    placeholder="" cols="30" style="width: 880px;height: 168px;top:1430px;z-index: 10;position: absolute;left:160px;"/><?php echo $row3->repairs ?></textarea>
     
    <input type="text" id="tb2" name ="hcells"style="display: none;"   class="input-xlarge">
   
   
    <img src="..\image\rings.jpg" style="position: absolute; left: 153px; top: 150px; height:310px; width: 900px;" />
    <label style="position: absolute; left: 50px; top: 820px;font-size: 35px" >Front</label>
    
     <label style="position: absolute; left: 1060px; top: 820px;font-size: 35px" >Rear</label>
         <img src="..\image\ajay.jpg" style="position: absolute; left: 150px; top: 700px; height:310px; width: 900px;" />
      <img src="..\image\zoom.jpg" style="position: absolute; left: 150px; top: 1350px; height:310px; width: 900px;" />
 <img src="..\image\pic2.jpg" style="position: absolute; left: 150px; top: 460px; height:200px; width: 900px;" />
 
 <img src="..\image\last.jpg" style="position: absolute; left: 150px; top: 1060px; height:250px; width: 900px;" />
<script>
    $('textarea').bind('keypress', function(e) {
    if ((e.keyCode || e.which) === 13) {
        e.preventDefault();

        //Just add this line to your code
        $(this).val($(this).val()+'\n');

        return false;
    }
});
</SCRIPT>
  
 <script>
    
$("#fe2040").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe2040");

if(inp.val() === ""){
      
        $('#fe2040').val('<?php echo $this->session->userdata('username');  ?>'); 
 
    }
    }
});
    
    </script>
    <script>
    
$("#fe2041").keyup(function (event) {
    
    if (event.keyCode === 13) {
       var inp = $("#fe2041");

if(inp.val() === ""){
      
      $('#fe2041').val('<?php echo date("Y/m/d"); ?>');
 
    }
    }
});
    
    </script>
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
                  
                    
                     <button type ="submit" style="position:absolute;top:1700px;text-align: left;width:125px;left:600px;"id="btnimp" value="save the form" onclick="getColor();" class="btn btn-danger">Submit</button>
                <button type ="submit" style="position:absolute;top:1700px;text-align: left;width:125px;left:730px;"id="btnimp1" name="finish" value="save the form" onclick="getColor();" class="btn btn-danger">Finish</button>
                 </div>
     
               
         </form>            
         
          
        </div>
    
    
    
    
    
    
    
     
    
    
    
       
        <div class="tab-pane" id="tab_d">
            <?php $row4 = $this->work_model->get_by_sec4($workorderid); ?> 
            <form id="form1" name="form1" onkeypress="return event.keyCode !== 13;" method="post" action="<?php echo site_url("workflow/update_frameinssection4") ?>">
                 <input style="width:200px;" type="hidden" name="wid9" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id9" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id9" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man9" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id9" width ="70%"id="co64321" value="<?php echo $slotnumber?>" /><table width="751" border="1" style="position: absolute; left: 2%; top:0px; width: 1000px; height: 138px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">

    <table width="989" border="1" style="position: absolute; left: 167px; top: 0px; width: 754px; height: 388px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
  
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
    <td height="35" colspan="3" align="center" style="background-color:greenyellow;">14T ISO Frame Inspection Record</td>
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
<input class="username" type="text" value="<?php echo $row4->Section1FrameRepairsAsSpecifiedOnPage1Complete?>" name="section1text" id="section1text" cols="55" rows="5"></input>

<p>&nbsp;</p>
<p>
<label>Signature</label>
<label for="section1staff"></label>
<input  type="text" value="<?php echo $row4->Section1Signature?>"name="section1staff" id="section1staff" />
<label for="datepicker111">Date</label>
  <input type="text" value="<?php echo $row4->section1Date?>"name="datepicker111" id="picker111" />
  </p>
<p>
  <label><strong>SECTION2</strong></label>
</p>
<p>Manlid Cover assembly - Repairs required:</p>
<p>
  <input type="text" class="username" value="<?php echo $row4->Section2ManlidCoverAssemblyRepairsRequired?>"name="section2text" id="section2text" cols="55" rows="5"></input>
 </p>
  <p>
      <label for="list1">Repairs Complete:</label>
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue44"  id="displayValue44"value="<?php echo $row4->Section2RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue44" id="idValue44" type="hidden">
</div>
  </p>
  <p>
  <label>Signature</label>
  <label for="section2staff"></label>
  <input type="text" value="<?php echo $row4->Section2Signature?>"name="section2staff" id="section2staff" />
  <label for="datepicker2">Date</label>
  <input type="text" value="<?php echo $row4->Section2Date?>" name="datepicker2" id="picker2" />
  </p>

<p>
  <label><strong>SECTION3</strong></label>
</p>
<p>Other Repairs required:</p>
<p>
  <input class="username" type="text" value="<?php echo $row4->Section3OtherRepairsRequired?>"name="section3text" id="section3text" cols="55" rows="5"></input>
  </p>
<p>
    <label for="list3">Repairs Complete:</label>
           <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue55"  id="displayValue55"value="<?php echo $row4->Section3RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue55" id="idValue55" type="hidden">
</div>
 </p>
<p>
  <label>Signature</label>
  <label for="section3staff"></label>
  <input type="text" value="<?php echo $row4->Section3Signature?>"name="section3staff" id="section3staff" />
  <label for="datepicker3">Date</label>
  <input type="text" value="<?php echo $row4->Section3Date?>"name="datepicker3" id="picker3" />
</p>
<p>
  <label><strong>SECTION4</strong></label>
</p>
<p>Paintwork &amp; Labels/Lettering - Repairs required::</p>
<p>
    <input class="username" type="text" value="<?php echo $row4->Section4PaintworkandlabelsorlatteringRepairsRequired ?>"name="section4text1" id="section4text1" cols="55" rows="5"></input>
  <label><br />
  </label>
</p>
<p>
<label for="list2">Repairs required:</label>
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue66"  id="displayValue66" value="<?php echo $row4->Section4RepairsComplete?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue66" id="idValue66" type="hidden">
</div>  
</p>

<p>
  <label>    Signature</label>
  <label for="section4staff"></label>
  <input type="text" value="<?php echo $row4->Section4Signature?>"name="section4staff" id="section4staff" />
  <label for="datepicker4">Date</label>
  <input type="text" value="<?php echo $row4->Section4Date?>"name="datepicker4" id="picker4" />
</p>
<p><strong>Frame fit for Service:</strong></p>
<p>
   <label>Signature</label>
  <label for="section5staff"></label>
  <input type="text" value="<?php echo $row4->FrameFitforServiceSignature?>" name="FrameFit1" id="section5staff" />
  <label for="datepicker5">Date</label>
  <input type="text" value="<?php echo $row4->FrameFitForServiceDate?>" name="FrameFit2" id="picker5" />
  
</p>
   <script > 
 function changetocolor(color){
   
  document.getElementById("redcolor").value = color;

}
  </script>
 <input type="hidden" name="redcolor" id="redcolor" />
 <button type="submit" onclick="changetocolor('yellow');" class="btn btn-danger" name="frameins_submit" id="frameins_submit" value="Submit" >submit</button>
<button type="submit" onclick="changetocolor('red');" name="finish" id="dsubmit" class="btn btn-danger" value="Submit" >finish</button>
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

   <script>
    
$("#section1text").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
        $('#section1staff').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#picker111').val('<?php echo date("Y/m/d"); ?>');
      
    }
});
    
    </script>
    <script>
    
$("#displayValue44").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
        $('#section2staff').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#picker2').val('<?php echo date("Y/m/d"); ?>');
      
    }
});
    
    </script>
    
     <script>
    
$("#displayValue55").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
        $('#section3staff').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#picker3').val('<?php echo date("Y/m/d"); ?>');
      
    }
});
    
    </script>
    
     <script>
    
$("#displayValue66").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
        $('#section4staff').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#picker4').val('<?php echo date("Y/m/d"); ?>');
        $('#section5staff').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#picker5').val('<?php echo date("Y/m/d"); ?>');
    }
});
    
    </script>
 
</table>
                 
</form>
            
    
 
</div>
    
  
    
    
        
        
        
    <div class="tab-pane" id="tab_e">
        <?php $row5 = $this->work_model->get_by_sec5($workorderid); ?> 
         <form id="form1rhrttb"  onkeypress="return event.keyCode !== 13;" name="form1hrtyrt" method="post" action="<?php echo site_url("workflow/update_section5") ?>"> 
       <table width="697" border="1" style="position: absolute; left: 207px; top: 23px; width: 711px; height: 1047px; font-weight: bold;">
       
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
    <td colspan="2"> <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue8').value=this.options[this.selectedIndex].text; document.getElementById('textfield30').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="FV31"  id="displayValue8" value = "<?php echo $row5->FillValve_RepairsorReplacements ?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="FV1" id="textfield30" value = "<?php echo $row5->FillValve_RepairsorReplacements ?>" type="hidden">
</div></td>
     <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d7').value=this.options[this.selectedIndex].text; document.getElementById('t7').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="FV31"  id="d7" value = "<?php echo $row5->FillValve_RepairNo?>"  style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="FV2" id="t7" value = "<?php echo $row5->FillValve_RepairNo?>"  type="hidden">
</div></td>
  </tr>
  <tr>
    <td align="left">Vent Valve</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue81').value=this.options[this.selectedIndex].text; document.getElementById('textfield311').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="FV321"  id="displayValue81" value = "<?php echo $row5->VentValve_RepairsorReplacements ?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="VV1" value="<?php echo $row5->VentValve_RepairsorReplacements ?>"  id="textfield311" type="hidden">
        </div></td>
     <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d5').value=this.options[this.selectedIndex].text; document.getElementById('t5').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F55"  id="d5" value = "<?php echo $row5->VentValve_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="VV2" value = "<?php echo $row5->VentValve_RepairNo?>"  id="t5" type="hidden">
        </div></td>
  </tr>
  <tr>
    <td>Air/N Valve</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue8188').value=this.options[this.selectedIndex].text; document.getElementById('textfield1131').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="FV3211"  id="displayValue8188" value = "<?php echo $row5->AirValve_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="AV1" value = "<?php echo $row5->AirValve_RepairsorReplacements?>"  id="textfield1131" type="hidden">
        </div></td>
    
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d8').value=this.options[this.selectedIndex].text; document.getElementById('t8').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F56"  id="d8" value = "<?php echo $row5->AirValve_RepairNo?>"style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="AV2" value = "<?php echo $row5->AirValve_RepairNo?>"  id="t8" type="hidden">
        </div></td>
    
  </tr>
  <tr>
    <td>Relief Valve</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d1').value=this.options[this.selectedIndex].text; document.getElementById('t1').value=this.options[this.selectedIndex].value;">
  <option ></option>
 <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="F"  id="d1" value = "<?php echo $row5->ReliefValve_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="RV1" value = "<?php echo $row5-> ReliefValve_RepairsorReplacements?>"  id="t1" type="hidden">
        </div>
 
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d9').value=this.options[this.selectedIndex].text; document.getElementById('t9').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F5"  id="d9" value = "<?php echo $row5-> ReliefValve_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="RV2" value = "<?php echo $row5-> ReliefValve_RepairNo?>"  id="t9" type="hidden">
        </div></td>
 
  </tr>
  <tr>
    <td>Bursting Disc</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d2').value=this.options[this.selectedIndex].text; document.getElementById('t2').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="F1"  id="d2" value = "<?php echo $row5-> BurstingDisc_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="BD1" value = "<?php echo $row5->BurstingDisc_RepairsorReplacements?>"  id="t2" type="hidden">
        </div></td>
    
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d10').value=this.options[this.selectedIndex].text; document.getElementById('t10').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F517"  id="d10" value = "<?php echo $row5-> BurstingDisc_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="BD2" value = "<?php echo $row5-> BurstingDisc_RepairNo?>" id="t10" type="hidden">
        </div> </td>
    
  </tr>
  <tr>
    <td>Tell-Tale Assembly-Gauge</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d3').value=this.options[this.selectedIndex].text; document.getElementById('t3').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="F2"  id="d3" value = "<?php echo $row5-> TellTaleAssemblyGauge_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="TT1" value = "<?php echo $row5-> TellTaleAssemblyGauge_RepairsorReplacements?>"  id="t3" type="hidden">
        </div></td>
   
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d11').value=this.options[this.selectedIndex].text; document.getElementById('t11').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F53"  id="d11" value = "<?php echo $row5->telltaleassemblygauagerepairno?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="TT2" value = "<?php echo $row5->telltaleassemblygauagerepairno?>" id="t11" type="hidden">
        </div></td>
   
  </tr>
  <tr>
    <td>Needle valve</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d4').value=this.options[this.selectedIndex].text; document.getElementById('t4').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="Re-Cert">Re-Cert</option>
   <option value="New">New</option>

</select>
<input name="F3"  id="d4" value = "<?php echo $row5->NeedleValve_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="NV1" value = "<?php echo $row5-> NeedleValve_RepairsorReplacements?>"  id="t4" type="hidden">
        </div></td>
    
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d12').value=this.options[this.selectedIndex].text; document.getElementById('t12').value=this.options[this.selectedIndex].value;">
  <option ></option>
 <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F59"  id="d12" value = "<?php echo $row5-> NeedleValve_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="NV2" value = "<?php echo $row5-> NeedleValve_RepairNo?>" id="t12" type="hidden">
        </div></td>
    
  </tr>







  <tr>
    <td>Dip Pipe</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('1d4').value=this.options[this.selectedIndex].text; document.getElementById('1t4').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="Ok">OK</option>
   <option value="N/A">N/A</option>

</select>
           
<input name="1F3"  id="1d4" value = "<?php echo $row5-> DipPipe_RepairsorReplacements?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="DP1" value = "<?php echo $row5-> NeedleValve_RepairsorReplacements?>"  id="1t4" type="hidden">
   
        </div></td>
    
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d121').value=this.options[this.selectedIndex].text; document.getElementById('t121').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="F159"  id="d121" value = "<?php echo $row5-> DipPipe_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="DP2" value = "<?php echo $row5-> DipPipe_RepairNo?>"id="t121" type="hidden">
        </div></td>
    
  </tr>
  <tr>
    <td>Special Studs</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('2d4').value=this.options[this.selectedIndex].text; document.getElementById('2t4').value=this.options[this.selectedIndex].value;">
   <option ></option>
    <option value="Ok">OK</option>
   <option value="N/A">N/A</option>

</select>
           
<input name="2F3"  id="2d4" value = "<?php echo $row5-> SpecialStuds_RepairsorReplacements?>" name="SS1" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="SS1" value = "<?php echo $row5-> SpecialStuds_RepairsorReplacements?>"  id="2t4" type="hidden">
   
       </DIV>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d54').value=this.options[this.selectedIndex].text; document.getElementById('t54').value=this.options[this.selectedIndex].value;">
  <option ></option>
 <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="FWQ"  id="d54" value = "<?php echo $row5-> SpecialStuds_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="SS2" value = "<?php echo $row5-> SpecialStuds_RepairNo?>" id="t54" type="hidden">
        </div> </td>
  
  </tr>
  <tr>
    <td>Manlid Bolts</td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('3d4').value=this.options[this.selectedIndex].text; document.getElementById('3t4').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="Ok">OK</option>
   <option value="N/A">N/A</option>

</select>
           
<input name="3F3"  id="3d4" value = "<?php echo $row5-> ManlidBolts_RepairsorReplacements?>" name="MB1"  style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="MB1" value = "<?php echo $row5-> ManlidBolts_RepairsorReplacements?>"   id="3t4" type="hidden">
   
     </div>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d514').value=this.options[this.selectedIndex].text; document.getElementById('t514').value=this.options[this.selectedIndex].value;">
  <option ></option>
 <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="FWQ"  id="d514" value = "<?php echo $row5-> ManlidBolts_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="MB2" value = "<?php echo $row5-> ManlidBolts_RepairNo?>" id="t514" type="hidden">
        </div>  </td>
   
  </tr>
  <tr>
    <td><p>Remarks</p></td>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('4d4').value=this.options[this.selectedIndex].text; document.getElementById('4t4').value=this.options[this.selectedIndex].value;">
  <option ></option>
    <option value="Ok">OK</option>
   <option value="N/A">N/A</option>

</select>
           
<input name="4F3"  id="4d4" value = "<?php echo $row5-> Remarks_RepairsorReplacements?>"  style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="R1" value = "<?php echo $row5-> Remarks_RepairsorReplacements?>"   id="4t4" type="hidden">
   
  </div>
    <td colspan="2"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('d5141').value=this.options[this.selectedIndex].text; document.getElementById('t5141').value=this.options[this.selectedIndex].value;">
  <option ></option>
  <option value="N/A">N/A</option>
   <option value="Attached">Attached</option>

</select>
<input name="FWQ1"  id="d5141" value = "<?php echo $row5-> Remarks_RepairNo?>" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="R2" value = "<?php echo $row5-> Remarks_RepairNo?>" id="t5141" type="hidden">
        </div> </td>
   
  </tr>

  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Hydraulic Test</label></br></br>
        <label>The vessel was Sastisfactorily tested to </label> 
        <input class="username" type="text" value = "<?php echo $row5-> Hydraulic_psig?>" name="HyPsig"   value="" />  
        <label>PSIG in the presence of</label></br>          
        <input class="username" type="text" value = "<?php echo $row5->Hydraulic_Presenceof ?>"name="HyPrese"   value="" />  
        <label>of</label> 
        <input class="username" type="text" value = "<?php echo $row5->Hydraulic_date ?>"name="HyOf" style="width: 60%;"  value="" />  
        <label>on</label> </br>
        <input class="username" type="text" value = "<?php echo $row5-> Hydraulic_of?>"name="HyDate" style="width: 80%;"  value="" />     <label>for GLS</label> 
    </div>
    
    </td>
  </tr>
  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Leakproof Test</label></br></br>
        <label>The vessel was satisfactorily tested to </label>
        <input  class="username"  type="text" value = "<?php echo $row5-> Leakproof_psig?>" name="LeakPsig"   value="" />  
        <label>PSIG in the presence of</label></br> 
        <input  class="username" type="text" value = "<?php echo $row5-> Leakproof_presenceof?>"name="LeakPrese"   value="" />  
        <label>of</label> 
        <input class="username" type="text" value = "<?php echo $row5-> LeakProof_date?>"name="LeakOf" style="width: 60%;"  />   <label>on</label> </br>
        <input class="username" type="text" value = "<?php echo $row5-> Leakproof_of?>"name="LeakDate" style="width: 80%;"  />     <label>for GLS</label> 
    </div>
    
    </td>
  </tr>
 <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">Dryness</label></br></br>
        <label>The internal atmosphere of vessel was tested for dryness with the following results: </label><br></br>
        <label>Date & Time</label>
       <input class="username" id="demo923" type="text"  name="DryDate1"  value=" <?php echo $row5->Dryness_Date1 ?> "  style="width:170px;"> <label>Pressure</label><input class="username" type="text"  style="width:100px;"  name="DryPressu1"   value="<?php echo $row5->Dryness_Pressure1?>" />  <label>Psig</label> <label> Dryness</label>
        <input class="username" type="text" value = "<?php echo $row5->Dryness_DryC1 ?>"name="DryC1"  style="width:100px;"   value="" /><label>C</label>   <br>
        <label>Date & Time</label>
       <input class="username" id="demo924" type="text"  name="DryDate2"  value=" <?php echo $row5->Dryness_Date2 ?> "  style="width:170px;"></a> <label>Pressure</label><input class="username" type="text"  style="width:100px;"  name="DryPressu2"   value="<?php echo $row5->Dryness_Pressure1?>" />  <label>Psig</label> <label> Dryness</label>
        <input class="username" type="text" value = "<?php echo $row5->Dryness_DryC2  ?>"name="DryC2"  style="width:100px;"   value="" /><label>C</label>   <br>
        <script>
    
$("#demo923").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo923').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
     
    }
});
    
    </script>
     <script>
    
$("#demo924").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo924').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
     
    }
});
    
    </script>
    
    </div>
    
    </td>
  </tr>
  <tr>
    <td height="176" colspan="4" >
     <div class="well">
    
        <label style="font-weight:bold;font-size:25px;vertical-align: top; ">This vessel is certified fit for bromine service</label></br></br>
        <label>The internal atmosphere of vessel was tested for dryness with the following results: </label><br></br>
        <label>Date & Time</label><input class="username" id="demo925" type="text" value = "<?php echo $row5->Certified_Date ?>"name="CertifiedDate" style="width:170px;">
        <script>
    
$("#demo925").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo925').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
     
    }
});
    
    </script>
        <label>By</label>
        <input class="username" type="text" id="ttech" value = "<?php echo $row5->Certified_By ?>"style="width:200px;"  name="CertifiedBy"   value="" /> 
      <script>
    
$("#ttech").keyup(function (event) {
    if (event.keyCode === 13) {
       
 
      $('#ttech').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>   <label>for GLS</label>  </br></br>
        <script > 
 function changetocolor55(color){
   
  document.getElementById("redcolorrr").value = color;

}
  </script>
 <input type="hidden" name="redcolorrr" id="redcolorrr" />
 <button type="submit" class="btn btn-danger" onclick="changetocolor55('yellow');" name="frSameins_submit" id="frameindds_submit" value="Submit" >submit</button>
<button type="submit" class="btn btn-danger" onclick="changetocolor55('red');" name="finiDsh" id="dsudfdbmit" value="Submit" >finish</button> <br>
        
            <br>
        
        
    </div>
    
    </td>
  </tr>
    
</table>

  </form>

        </div>
  
    
    
   
  
  
    
      
    <div class="tab-pane" id="tab_f">

          <?php $row6 = $this->work_model->get_by_bvpurging($workorderid); ?> 
        
<div align="left">
    <form id="form1uku" onkeypress="return event.keyCode !== 13;" name="form1vsdcdsc" method="post" action="<?php echo site_url("workflow/bvpurgingrecord") ?>">

    <input style="width:200px;" type="hidden" name="wid7" width ="70%"id="fe1453461" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="co1id7" width ="70%"id="c54o61" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eq1id7" width ="70%"id="co2461" value="<?php echo $equipmentid?>" />
      <input style="width:200px;" type="hidden" name="man7" width ="70%"id="co2461" value="<?php echo $manufacturer?>" />
      
    
    
      <input style="width:200px;" type="hidden" name="sl1id7" width ="70%" id="co64321" value="<?php echo $slotnumber?>" />
  <table width="792" height="865" border="1" style="position: absolute; left: 5%; top: 0%; font-weight: bold; width: 926px;">
    <tr>
      <td  height="63" colspan="2"><img src="..\image\download.jpg"  /></td>
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
        <input class="username" type="text" style="width:97%;"  value = "<?php echo $row6->CausticTankLevelData?>" name="rear1" id="textfield66" />
      </div></td>
       <td>
           <input id="demo146" readonly='readonly' value = "<?php echo $row6->CausticTankLevelTime?>"name="rear2" type="text" style="width:90%;"></td>
  
      <td>
             <input type="text"  style="width:97%;" readonly='radonly' value = "<?php echo $row6->CausticTankLevelTech?>"name="rear3" id="textfield286" /></td>
   
    
    </tr>
    <tr>
      <td>Caustic Flow</td>
      <td><div align="left">
          <input class="username" type="text" style="width:81%;" value = "<?php echo $row6->CausticFlowData?>"name="rear4"  id="textfield2k" />
      gpm</div></td>
     <td>
         <input id="demo13k"value = "<?php echo $row6->CausticFlowTime?>"name="rear5" readonly='readonly' type="text" style="width:90%;"></td>
  
      <td>
          <input type="text" readonly='readonly' style="width:97%;"value = "<?php echo $row6->CausticFlowTech?>"name="rear6"  id="textfield29k" /></td>
    </tr>
    <tr>
      <td height="26">Caustic Strength</td>
      <td><div align="left">
          <input class="username" type="text" style="width:77%;"value = "<?php echo $row6->CausticStrengthData?>" name="rear7" id="textfield3k" />
          %w/w      </div></td>
  <td>
      <input id="demo12k" readonly='readonly'type="text" value = "<?php echo $row6->CausticStrengthTime ?>" name="rear8"  style="width:90%;"></td>
  
      <td>
          <input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->CausticStrengthTech?>"name="rear9"  id="textfield30k" /></td>
    </tr>
    
    <tr>
      <td>Air Dewpoint</td>
      <td><div align="left">
          <input class="username" type="text" style="width:89%;"value = "<?php echo $row6->AirDewpointData?>"name="rear10"  id="textfield4k" />
      C</div></td>
      <td>
          <input id="demo11k"readonly='readonly' type="text"value = "<?php echo $row6->AirDewpointTime?>" name="rear11" style="width:90%;"></td>
  
      <td>
          <input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->adptech?>"name="rear12"  id="textfield31k" /></td>
    </tr>
    <tr>
      <td>Valves Connected &amp; Set</td>
      <td><div align="right">
        <input class="username" type="text" style="width:97%;"value = "<?php echo $row6->ValvesConnected_SetData?>"name="rear13"  id="textfield42k" />
      </div></td>
       <td><input id="demo10k"readonly='readonly' type="text"value = "<?php echo $row6->ValvesConnected_SetTime?>"name="rear14"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->ValvesConnected_SetTech?>"name="rear15"  id="textfield32k" /></td>
    </tr>
    <tr>
      <td>Air Pressure</td>
      <td><div align="left">
          <input class="username" type="text" style="width:81%;"value = "<?php echo $row6->AirPressureData?>"name="rear16"  id="textfieldk" />
        psig
      </div></td>
        <td><input id="demo9k"readonly='readonly' type="text"value = "<?php echo $row6->AirPressureTime?>"name="rear17"  style="width:90%;"> </td>
  
      <td><input type="text" readonly='readonly'style="width:97%;"value = "<?php echo $row6->AirPressureTech?>"name="rear18"  id="textfield33k" /></td>
    </tr>
    <tr>
      <td>Air Temperature</td>
      <td><div align="left">
          <input class="username" type="text" style="width:89%;"value = "<?php echo $row6->AirTemperatureData?>"name="rear19"  id="textfield5k" />
      F</div></td>
       <td><input id="demo8k"readonly='readonly' type="text"value = "<?php echo $row6->AirTemperatureTime?>"name="rear20"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->AirTemperatureTech?>"name="rear21"  id="textfield34k" /></td>
    </tr>
    <tr>
      <td>Venting Started</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->VentingStartedData?>" name="rear22" id="textfield7" /></td>
       <td><input id="demo7" readonly='readonly' type="text" value = "<?php echo $row6->VentingStartedTime?>" name="rear23"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->VentingStartedTech?>" name="rear24" id="textfield35" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Started</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashStartedData?>"name="rear25" id="textfield888" /></td>
       <td><input id="demo68" readonly='readonly'type="text"value = "<?php echo $row6->ThiosulphateWashStartedTime?>"name="rear26"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->ThiosulphateWashStartedTech?>"name="rear27"  id="textfield368" /></td>
    </tr>
    <tr>
      <td height="26">Thiosulphate Wash Complete</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->ThiosulphateWashCompletedData?>"name="rear28"  id="textfield9k" /></td>
        <td><input id="demo5k" readonly='readonly'value = "<?php echo $row6->ThiosulphateWashCompletedTime?>" name="rear29" type="text" style="width:90%;" </td>
  
      <td><input type="text" readonly='readonly'style="width:97%;"value = "<?php echo $row6->ThiosulphateWashCompletedTech?>"name="rear30"  id="textfield37k" /></td>
    </tr>
    <tr>
      <td>Vessel Clean</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->VesselCleanData?>"name="rear31"  id="textfield11k" /></td>
       <td><input id="demo4k"readonly='readonly' type="text"value = "<?php echo $row6->VesselCleanTime?>"name="rear32"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->VesselCleanTech?>"name="rear33"  id="textfield38k" /></td>
    </tr>
    <tr>
      <td height="26">Vessel Hydro</td>
      <td><div align="left">
        <input class="username" type="text" style="width:81%;"value = "<?php echo $row6->VesselHydroData?>"name="rear34"  id="textfield10k" />
      psig</div></td>
        <td><input id="demo3k"readonly='readonly' type="text"value = "<?php echo $row6->VesselHydroTime?>" name="rear35" style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->VesselHydroTech?>"name="rear36" id="textfield39k" /></td>
    </tr>
    <tr>
      <td>Vessel Dissembled</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->VesselDisassembledData?>"name="rear37" id="textfield12k" /></td>
      <td><input id="demo2k"readonly='readonly' type="text"value = "<?php echo $row6->VesselDisassembledTime?>"name="rear38"  style="width:90%;"></td>
  
      <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->VesselDisassembledTech?>"name="rear39"  id="textfield40k" /></td>
    </tr>
    <tr>
      <td>Confined Space Permit</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->ConfinedSpacePermitData?>"name="rear40"  id="textfield13k" /></td>
     
    <td><input id="demo1k"readonly='readonly' value = "<?php echo $row6->ConfinedSpacePermitTime?>"name="rear41"  type="text" style="width:90%;"></td>
  
    <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->ConfinedSpacePermitTech?>"name="rear42"  id="textfield15k" /></td>
    </tr></form>
    <tr>
      <td>Vessel Ready for inspection</td>
      <td><input class="username" type="text" style="width:97%;"value = "<?php echo $row6->VESSELREADYFORINSPECTIONdate?>"name="rear413"  id="textfield131k" /></td>
     
    <td><input id="demo21k" readonly='readonly'type="text"value = "<?php echo $row6->VESSELREADYFORINSPECTIONtime?>"name="rear43"  style="width:90%;"></td>
  
    <td><input type="text"readonly='readonly' style="width:97%;"value = "<?php echo $row6->VESSELREADYFORINSPECTIONtech?>"name="rear44"  id="textfield151k" /></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><p style="font-weight: bold;">Comments:</p>
        <p align="center">
            <input class="username" value = "<?php echo $row6->BROMINEVESSELPURGINGRECORDComments?>"name="rear45" cols="70" rows="7" style="width:400px;height:100px;" id="txb"></input>
          <div>
                  
                     <script > 
 function changetocolor66(color){
   
  document.getElementById("rer").value = color;

}
  </script>
   <script>
      var currentBoxNumber = 0;
$(".username").keyup(function (event) {
    if (event.keyCode === 13) {
        $('#textfield29').val('3');

        textboxes = $("input.username");
        currentBoxNumber = textboxes.index(this);
        console.log(textboxes.index(this));
        if (textboxes[currentBoxNumber + 1] !== null) {
            nextBox = textboxes[currentBoxNumber + 1];
            nextBox.focus();
            nextBox.select();
            event.preventDefault();
            return false;
        }
    }
});
    
    </script>
    
     <script>
    
$("#textfield888").keyup(function (event) {
    
    if (event.keyCode === 13) {
         <?php date_default_timezone_set('America/Mexico_City'); ?>
        $('#textfield368').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#demo68').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      
    }
});
    
    </script>
    <script>
    
$("#textfield7").keyup(function (event) {
    if (event.keyCode === 13) {
        $('#textfield35').val('<?php echo $this->session->userdata('username');  ?>'); 
 $('#demo7').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      
    }
});
    
    </script>
     <script>
    
$("#textfield66").keyup(function (event) {
    if (event.keyCode === 13) {
        $('#textfield286').val('<?php echo $this->session->userdata('username');  ?>');
 $('#demo146').val ('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      
    }
});
    
    </script>
     <script>
    
$("#textfield2k").keyup(function (event) {
    if (event.keyCode === 13) {
      
 $('#demo13k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield29k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield3k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo12k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield30k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield4k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo11k').val ('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield31k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield42k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo10k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield32k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
     <script>
    
$("#textfieldk").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo9k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield33k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
     <script>
    
$("#textfield5k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo8k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield34k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
     <script>
    
$("#textfield9k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo5k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield37k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
     <script>
    
$("#textfield11k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo4k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield38k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
     <script>
    
$("#textfield10k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo3k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield39k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield12k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo2k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield40k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield13k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo1k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield15k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
    <script>
    
$("#textfield131k").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#demo21k').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
      $('#textfield151k').val('<?php echo $this->session->userdata('username');  ?>'); 
    }
});
    
    </script>
 <input type="hidden" name="rer" id="rer" />
 <button type="submit" class="btn btn-danger" onclick="changetocolor66('yellow');" name="fmeins_submit" id="frameindds_submit" value="Submit" >submit</button>
<button type="submit" class="btn btn-danger" onclick="changetocolor66('red');" name="fsh" id="dsudfdbmit" value="Submit" >finish</button> <br>
    
    
    
    
                     
                </div>
      </td>
    </tr>
   
  </table>
     </form>
</div>
   
        
        </div>
    
      
    
    
    
    
    
    
    
      
      
   
    
    
    
    
    
    <div class="tab-pane" id="tab_g">
         <form id="form212" onkeypress="return event.keyCode !== 13;" action="<?php echo site_url('workflow/ercertificate') ?>" method="POST">
             <?php $row7 = $this->work_model->get_by_ercertificate($workorderid); ?>
              <input style="width:200px;" type="hidden" name="wid2" width ="70%"id="3261" value="<?php echo $workorderid ?>" />
     
      <input style="width:200px;" type="hidden" name="coid2" width ="70%"id="co67671" value="<?php echo $containersize ?>" />
      
      <input style="width:200px;" type="hidden" name="eqid2" width ="70%"id="656561" value="<?php echo $equipmentid?>" />
      
     <input style="width:200px;" type="hidden" name="slid2" width ="70%"id="5656561" value="<?php echo $slotnumber?>" />
<table width="991" border="1" style="position: absolute; left:5%; top: 18px;">
  <tr>
    <td  style="background-color:lightseagreen;" height="66" colspan="11"><img src="..\image\download.jpg"  /></td>
  </tr>
  <tr>
    <td  style="background-color:greenyellow;" height="39" colspan="11"> <div align="center" style="font-weight:bold;font-size:22px;">Equipment Release Certificate</div></td>
  </tr>
  <tr>
    <td height="57" colspan="5"style="font-weight:bold;font-size:16px;"><div align="right">
      <p align="center">Date Isuued:
        
<input id="kdemo23" class="username" type="text" name="textfield1" value="<?php echo $row7->DateIssued ?>"  style="width:170px;"></td>
  
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
    <td colspan="2"  style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield3"value="<?php echo $row7->ManlidInitialTorque?>" id="textfield"  />lbs</td>
    <td colspan="3" style="font-weight: bold;" ><input class="username"  type="number" style="width:88%;"name="textfield4"value="<?php echo $row7->ManlidFinalTorque?>" id="textfield11" />lbs</td>
    <td colspan="2">
          <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input class="username"  name="displayValue" value="<?php echo $row7->ManlidTighteningRequired?>" id="1displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div></td>
    <td colspan="2"><input   type="text" value="<?php echo $row7->ManlidTech?>" style="width:195px;"name="textfield5" id="1textfield15" /></td>
  <script>
    
$("#1displayValue").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue");

if(inp.val() === ""){
        $('#1displayValue').val('no'); 
    }
        $('#1textfield15').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  </tr>
  <tr>
    <td height="25" colspan="2">Fill Valve-Yellow</td>
    <td colspan="2" style="font-weight:bold"><input type="number" class="username" style="width:88%;"name="textfield6" id="textfield5"value="<?php echo $row7->FillValveYellowInitialTorque?>" />lbs</td>
    <td colspan="3" style="font-weight:bold"><input type="number" class="username" style="width:88%;"name="textfield7" id="textfield3"value="<?php echo $row7->FillValveYellowFinalTorque?>" />lbs</td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input name="displayValue1" class="username"  id="1displayValue1" value="<?php echo $row7->FillValveYellowTighteningRequired?>"style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue1" id="idValue1" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;"name="textfield8" id="1textfield19"value="<?php echo $row7->FillValveYellowTech?>" /></td>
 <script>
    
$("#1displayValue1").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue1");

if(inp.val() === ""){
        $('#1displayValue1').val('no'); 
    }
        $('#1textfield19').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green  </td>
    <td colspan="2" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield9" id="textfield6"value="<?php echo $row7->PressureValveGreenInitialTorque?>" />lbs</td>
    <td colspan="3" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield10" id="textfield4"value="<?php echo $row7->PressureValveGreenFinalTorque?>" />lbs</td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input name="displayValue2" class="username"  id="1displayValue2"value="<?php echo $row7->PressureValveGreenTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:90%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue2" id="idValue2" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;"name="textfield11" id="1textfield20" value="<?php echo $row7->PressureValveGreenTech?>" /></td>
<script>
    
$("#1displayValue2").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue2");

if(inp.val() === ""){
        $('#1displayValue2').val('no'); 
    }
        $('#1textfield20').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  </tr>
  <tr>
    <td height="26" colspan="2">Vent Valve-Red</td>
    <td colspan="2" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield12" id="textfield7"value="<?php echo $row7->VentvalveRedInitialTorque?>" />lbs</td>
    <td colspan="3" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield13" id="textfield10"value="<?php echo $row7->VentvalveRedFinalTorque?>" />lbs</td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input name="3displayValue3" class="username"  id="222displayValue3" value="<?php echo $row7->VentvalveRedTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input  id="idValue3" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;" name="textfield14" id="1textfield21" value="<?php echo $row7->VentvalveRedTech?>" /></td>
<script>
    
$("#222displayValue3").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#222displayValue3");

if(inp.val() === ""){
        $('#222displayValue3').val('no'); 
    }
        $('#1textfield21').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  </tr>
  <tr>
    <td height="25" colspan="2">Relief Valve</td>
    <td colspan="2" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield15" id="textfield8"value="<?php echo $row7->ReliefValveInitialTorque?>" />lbs</td>
    <td colspan="3"cstyle="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield16" id="textfield12" value="<?php echo $row7->ReliefValveFinalTorque?>"/>lbs</td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input name="4displayValue41" class="username"  id="2displayValue41"value="<?php echo $row7->ReliefValveTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue41" id="idValue41" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;" name="textfield17" id="1textfield22" value="<?php echo $row7->ReliefValveTech?>" /></td>
 <script>
    
$("#2displayValue41").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#2displayValue41");

if(inp.val() === ""){
        $('#2displayValue41').val('no'); 
    }
        $('#1textfield22').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  </tr>
  <tr>
    <td height="25" colspan="2">Fusible Element/Blank</td>
    <td colspan="2" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield18" id="textfield9"value="<?php echo $row7->FusibleElementorBlankInitialTorque?>" />lbs</td>
    <td colspan="3" style="font-weight: bold;" ><input class="username" type="number" style="width:88%;"name="textfield19" id="textfield13"value="<?php echo $row7->FusibleElementorBlankFinalTorque?>" />lbs</td>
    <td colspan="2"><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">

<input name="displayValue51" class="username"  id="1displayValue51"value="<?php echo $row7->FusibleElementorBlankTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue51" id="idValue51" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;"name="textfield20" id="1textfield23"value="<?php echo $row7->FusibleElementorBlankTech?>" /></td>
<script>
    
$("#1displayValue51").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue51");

if(inp.val() === ""){
        $('#1displayValue51').val('no'); 
    }
        $('#1textfield23').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>



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
    <td style="font-weight: bold;" colspan="2"><input class="username" type="number" style="width:88%;"name="textfield21" id="textfield2"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowInitialTorque?>" />lbs</td>
    <td  style="font-weight: bold;" colspan="3"><input class="username" type="number" style="width:88%;"name="textfield22" id="textfield14"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowFinalTorque?>" />lbs</td>
    <td>  <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue16" id="displayValue16"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue6" id="idValue6" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username"  name="11displayValue7"  id="displayValue7" value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowSpringWashers?>" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue7" value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowSpringWashers?>" id="idValue7" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;" name="textfield23" id="11textfield32"value="<?php echo $row7->ValveBonnetTorqueSettingsFillValveYellowTech?>" /></td>
 <script>
    
$("#displayValue16").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#displayValue16");

if(inp.val() === ""){
        $('#displayValue16').val('no'); 
    }
       
      
    }
});
    
    </script>
    <script>
    
$("#displayValue7").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#displayValue7");

if(inp.val() === ""){
        $('#displayValue7').val('no'); 
    }
        $('#11textfield32').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  </tr>
  <tr>
    <td height="25" colspan="2">Pressure Valve-Green</td>
    <td style="font-weight: bold;" colspan="2"><input class="username" type="number" style="width:88%;"name="textfield24" id="textfield38"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenInitialTorque?>" />lbs</td>
    <td style="font-weight: bold;" colspan="3"><input class="username" type="number" style="width:88%;"name="textfield25" id="textfield16"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenFinalTorque?>" />lbs</td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue8"  id="1displayValue8" value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired?>" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue8" value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenTighteningRequired?>" id="1idValue8" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="displayValue9"  id="displayValue9"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenSpringWashers?>" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue9" value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenSpringWashers?>" id="idValue9" type="hidden">
</div></td>
    <td  colspan="2"><input class="username" type="text" style="width:195px;"name="textfield26" id="22textfield33"value="<?php echo $row7->ValveBonnetTorqueSettingsPressureValveGreenTech ?> "</td>
  <script>
    
$("#1displayValue8").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue8");

if(inp.val() === ""){
        $('#1displayValue8').val('no'); 
    }
       
      
    }
});
    
    </script>
    <script>
    
$("#displayValue9").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#displayValue9");

if(inp.val() === ""){
        $('#displayValue9').val('no'); 
    }
        $('#22textfield33').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  
  </tr>
  <tr>
    <td height="25" colspan="2">Vent valve Red</td>
    <td style="font-weight:bold;" colspan="2"><input class="username"  type="number" style="width:88%;"name="textfield27" id="textfield39"value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedInitialTorque?>" />lbs</td>
    <td style="font-weight:bold" colspan="3"><input class="username" type="number" style="width:88%;"name="textfield28" id="textfield17"value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedFinalTorque?>" />lbs</td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="1displayValue10" value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedTighteningRequired?>" id="displayValue10" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue10" value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedTighteningRequired?>" id="idValue10" type="hidden">
</div></td>
    <td><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">

<input class="username" name="1displayValue11"  value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedSpringWashers?>"id="displayValue11" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue11" value="<?php echo $row7->ValveBonnetTorqueSettingsVentValveRedSpringWashers?>" id="idValue11" type="hidden">
</div></td>
    <td colspan="2"><input class="username" type="text" style="width:195px;"name="textfield29" id="44textfield34" value="<?php echo $row7->ValveBonnetTorqueSettingsTech?>" /></td>
  <script>
    
$("#displayValue10").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#1displayValue10");

if(inp.val() === ""){
        $('#displayValue10').val('no'); 
    }
       
      
    }
});
    
    </script>
    <script>
    
$("#displayValue11").keyup(function (event) {
    
    if (event.keyCode === 13) {
          var inp = $("#displayValue11");

if(inp.val() === ""){
        $('#displayValue11').val('no'); 
    }
        $('#44textfield34').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
  
  </tr>
 <script>
    
$("#textfield34").keyup(function (event) {
    
    if (event.keyCode === 13) {
      
        $('#textfield34').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
    <script>
    
$("#textfield33").keyup(function (event) {
    
    if (event.keyCode === 13) {
      
        $('#textfield33').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
    
     <script>
    
$("#textfield32").keyup(function (event) {
    
    if (event.keyCode === 13) {
      
        $('#textfield32').val('<?php echo $this->session->userdata('username');  ?>'); 
 
      
    }
});
    
    </script>
 
  <tr>
    <td height="24" colspan="11"><strong>Leak ProofnessTest @
    <input class="username" style="width:120px;" type="text" name="textfield30" id="tx28"value="<?php echo $row7->Leakproofnesstestpsig?>" /> 
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
    <td height="25"><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('11displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('11idValue3').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>
</select>
<input class="username" name="displayValue3"  id="11displayValue3" value="<?php echo $row7->Leakproofnesstestmanlid?>"  style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="textfield31" value="<?php echo $row7->Leakproofnesstestmanlid?>" id="11idValue3" type="hidden">
</div></td>

    <td height="25"><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('11displayValue41').value=this.options[this.selectedIndex].text; document.getElementById('11idValue41').value=this.options[this.selectedIndex].value;">
    <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>
</select>
<input name="displayValue41" class="username"  id="11displayValue41" value="<?php echo $row7->LeakproofnesstestFillValve?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="textfield32" value="<?php echo $row7->LeakproofnesstestFillValve?>" id="11idValue41" type="hidden">
</div></td>
    <td><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('1displayValue10').value=this.options[this.selectedIndex].text; document.getElementById('1idValue10').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue10"  value="<?php echo $row7->LeakproofnesstestPressureValve?>" id="1displayValue10" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="textfield33" value="<?php echo $row7->LeakproofnesstestPressureValve?>" id="1idValue10" type="hidden">
</div></td>
    <td><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('1displayValue11').value=this.options[this.selectedIndex].text; document.getElementById('1idValue11').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue11"  value="<?php echo $row7->LeakproofnesstestVentValve?>" id="1displayValue11" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="textfield34" value="<?php echo $row7->LeakproofnesstestVentValve?>" id="1idValue11" type="hidden">
</div></td>
    <td colspan="2"><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('1displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('1idValue7').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue71"  id="1displayValue7" value="<?php echo $row7->LeakproofnesstestReliefValve?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="textfield35" id="1idValue7" value="<?php echo $row7->LeakproofnesstestReliefValve?>" type="hidden">
</div></td>
    <td><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('22displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('22idValue7').value=this.options[this.selectedIndex].value;">
    <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValu1e7"  id="22displayValue7" value="<?php echo $row7->LeakproofnesstestFusibleorBlank?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestFusibleorBlank?>"` name="textfield36" id="22idValue7" type="hidden">
</div></td>
    <td><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('33displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('33idValue7').value=this.options[this.selectedIndex].value;">
    <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue7"  id="33displayValue7" value="<?php echo $row7->LeakproofnesstestFillBonnet?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestFillBonnet?>" name="textfield37" id="33idValue7" type="hidden">
</div></td>
    <td><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('4displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('4idValue7').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue7"  id="4displayValue7" value="<?php echo $row7->LeakproofnesstestPressureBonnet?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestPressureBonnet?>" name="textfield38" id="4idValue7" type="hidden">
</div></td>
    <td colspan="2"><div style="position:relative;width:80px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:75px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('5displayValue7').value=this.options[this.selectedIndex].text; document.getElementById('5idValue7').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue7"  id="5displayValue7" value="<?php echo $row7->LeakproofnesstestVentBonnet?>"  style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestVentBonnet?>"  name="textfield39" id="5idValue7" type="hidden">
</div></td>
  </tr>
  <tr>
    <td colspan="8"><strong>Record Sheets Checked </strong></td>
    <td width="101"><div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue12').value=this.options[this.selectedIndex].text; document.getElementById('idValue12').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue12"  id="displayValue12"value="<?php echo $row7->LeakproofnesstestRecordSheetscheckedYesorNo?>" style="position:absolute;top:0px;left:0px;width:65%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestRecordSheetscheckedYesorNo?>" name="idValue12" id="idValue12" type="hidden">
</div></td>
    <td width="195" colspan="2"><div align="left"><strong>Initials:</strong>
      <input class="username" style="width:50px;" type="text" name="textfield40" id="tx32"value="<?php echo $row7->LeakproofnesstestRecordSheetscheckedInitials?>" />
    </div></td>
  </tr>
  <tr>
    <td height="83" colspan="2"><p align="left"><strong>Dome Cover Secured:</strong><strong>
      <div style="position:relative;width:100%;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100%; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue13').value=this.options[this.selectedIndex].text; document.getElementById('idValue13').value=this.options[this.selectedIndex].value;">
   <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue13" value="<?php echo $row7->LeakproofnesstestDomeCoversecuredyesorno?>" id="displayValue13" style="position:absolute;top:0px;left:0px;width:75%;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input value="<?php echo $row7->LeakproofnesstestDomeCoversecuredyesorno?>" name="idValue13" id="idValue13" type="hidden">
</div>
    </strong></p>
    <p>&nbsp;</p></td>
    <td colspan="3"><strong>Seal Number:
      <input class="username" style="width:100px;" type="text" name="textfield41" id="tx40"value="<?php echo $row7->LeakproofnesstestDomeCoverSecuredSealNumber?>" />
    </strong></td>
    <td colspan="3"><strong>Hazard Sign Covered:</strong>
      <div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue14').value=this.options[this.selectedIndex].text; document.getElementById('idValue14').value=this.options[this.selectedIndex].value;">
  <option ></option>
   <option value="ok">ok</option>
   <option value="Not ok">Not ok</option>
    <option value="N/A">N/A</option>

</select>
<input class="username" name="displayValue14" value="<?php echo $row7->LeakproofnesstestHazardSignscovered?>" id="displayValue14" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;width:180px;height:100%;border:1px solid #556;" onfocus="this.select()" type="text">
<input  value="<?php echo $row7->LeakproofnesstestHazardSignscovered?>" name="idValue14" id="idValue14" type="hidden">
</div>
    </strong></td>
    <td colspan="3"><strong>Intials:
    </strong>      <input class="username" style="width:120px;" type="text" name="textfield42" id="tx36" value="<?php echo $row7->LeakproofnesstestDomeCoverSecuredInitials?>"/></td>
  </tr>
  <tr>
    <td height="46" colspan="11"><strong>The Vessel contains dry Air/Nitrogen @ 
      <input class="username" style="width:50px;" type="text" name="textfield43" id="tx44"value="<?php echo $row7->LeakproofnesstestThevesselcontainsdryairnitrogen?>" /> 
      C. Dew point at the pressure of 
      <input class="username" style="width:50px;" type="text" name="textfield44" id="tx48" value="<?php echo $row7->LeakproofnesstestDewpointatapressureof?>"/> 
      psig.
    </strong></td>
  </tr>
  <tr>
    <td height="53" colspan="11"><div align="left"><strong>Released to 
      <input class="username" style="width:100px;" type="text" name="textfield45" id="tx49"value="<?php echo $row7->LeakproofnesstestReleasedTo?>" />
      (haulier):
  <input class="username" style="width:100px;" type="text" name="textfield46" id="tx50"value="<?php echo $row7->LeakproofnesstestHaulier?>"/>
     vehicle registration number:
     <input class="username" style="width:100px;" type="text" name="textfield47" id="tx51"value="<?php echo $row7->LeakproofnesstestVehicleRegNo?>" />
    </strong><strong></strong></div></td>
  </tr>
  <tr>
    <td height="83" colspan="11"><strong>For GLS 
      <input class="username" style="width:120px;" type="text" name="textfield48" id="tx52"value="<?php echo $row7->LeakproofnesstestforGLS?>" /> 

 date & Time:
<input class="username" id="1demo22" type="text"name="textfield49" value="<?php echo $row7->LeakproofnesstestDateTime?>" style="width:170px;"></a>
 <script > 
 function changetocolor67(color){
   
  document.getElementById("rer1").value = color;

}
  </script>
  <script>
    
$("#1demo22").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#1demo22').val('<?php echo date("Y/m/d"); echo "---"; echo date("h:i:sa"); ?>');
     
    }
});
    
    </script>
     <script>
    
$("#kdemo23").keyup(function (event) {
    if (event.keyCode === 13) {
       
 $('#kdemo23').val('<?php echo date("Y/m/d"); ?>');
     
    }
});
    
    </script>
 <input type="hidden" name="rer1" id="rer1" />
 <button type="submit" class="btn btn-danger" onclick="changetocolor67('yellow');" name="fm66eins_submit" id="frams_submit" value="Submit" >submit</button>
<button type="submit" class="btn btn-danger" onclick="changetocolor67('red');" name="f66sh" id="dsudfdbmit" value="Submit" >finish</button> <br>
    
                     
    </strong></td>
  </tr>
</table>
</form>
        </div> 
    
    
    <script>
      var currentBoxNumber = 0;
$(".username").keyup(function (event) {
    if (event.keyCode === 13) {
       

        textboxes = $("input.username");
        currentBoxNumber = textboxes.index(this);
        console.log(textboxes.index(this));
        if (textboxes[currentBoxNumber + 1] !== null) {
            nextBox = textboxes[currentBoxNumber + 1];
            nextBox.focus();
            nextBox.select();
            event.preventDefault();
            return false;
        }
    }
});
    
    </script>
    
    
    
 
    
    
    
    
    
 
    
  </div>
</body>
    
    
    
    
     
    
   