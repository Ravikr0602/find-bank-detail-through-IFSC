<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find IFSC detail</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="contanier">
    <div class="title">
        <h1>Find Bank Details by IFSC Code</h1>
    </div>
    <div class="form_box">
        <form action="" autocomplete="off" method="post">
            <label id="displays">ENTER IFSC CODE</label>
            <input type="text" name="ifsc" id="ifsc" autocomplete="new-password"  placeholder="Enter IFSC Code"><br>
            <input type="button" value="Search" id="submit" onclick="findIFSC()">
            
        </form>
          
        <div id="get_result">

        </div>
            

    </div>


<script>
function findIFSC(){
	var ifsc=jQuery('#ifsc').val();
	jQuery.ajax({
		url:'find_link.php',
		data:'ifsc='+ifsc,
		type:'post',
		success:function(result){
			jQuery("#get_result").html(result);
		}
	});
}
</script>

</body>
</html>