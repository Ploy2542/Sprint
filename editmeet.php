<?php
	include('conn.php');
	
	$id=$_GET['id'];
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$remark=$_POST['remark'];
	$meetfile=$_POST['meetfile'];
	
	mysqli_query($conn,"update events set title='$title', head='$head', numattend='$numattend', 
				roomid='$roomid', start='$start',end='$end',addequipment='$addequipment',remark='$remark',
				meetfile='$meetfile' where id='$id'");
	header('location:addmeet.php');

?>