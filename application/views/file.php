<form action="<?php echo site_url('workflow/upload') ?>" enctype="multipart/form-data" method="post">
    <input id="ra" type="hidden" value="<?php echo $id?>" name="id"  >
<script>
	document.write(my_special_setting); 
        document.getElementById('ra').value=my_special_setting;
	</script>
        
	<input name="image" type="file"><br>
        <br><br><br>
        <input name="Upload" type="submit" value="Upload Certificate">
	
	 	 
	
	 
	</form>