
<html>
    <head>

 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    

     

  


</head>
<body>
<form>
   <?php $row = $this->work_model->geteqid($id); ?>  
    <?php 
    $path=$row->path;
   echo $path;
    if($path=='no'){
    
    
    $message = " No certificate uploaded!..Please upload certificate";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
    echo "<script type='text/javascript'> window.close();</script>";}
       else{
    
    ?>
   <?php 
   $file='c://xampp/htdocs'.$path;
//   header('Content-Length: '.filesize('../ims/pic')); 
header("Content-type: application/pdf"); 
header("Content-disposition: inline; filename='certificate.pdf'"); 
readfile($file); ?>


       <?php } ?>

</form>


</body>

    
