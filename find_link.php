
<?php
if(isset($_POST['ifsc'])){
	$ifsc=$_POST['ifsc'];
	$json=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
	$arr=json_decode($json);
	if(isset($arr->BRANCH))
	{
		echo "<h2 id='find_result'> Bank :- ".$arr->BANK."</h2><br>";
		echo "<h2 id='find_result'> Branch :- ".$arr->BRANCH."</h2><br>";
		echo "<h2 id='find_result'> Address :- ".$arr->ADDRESS."</h2><br>";
		echo "<h2 id='find_result'> City :- ".$arr->CITY."</h2><br>";
		echo "<h2 id='find_result'> District :- ".$arr->DISTRICT."</h2><br>";
		echo "<h2 id='find_result'> State :- ".$arr->STATE."</h2><br>";
	}else{
		echo " <h2 id='find_result'> Invalid IFSC Code. </h2> ";
	}
}
?>
