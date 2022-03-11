
<?php
	include('conn.php');
	
	$meetid=$_POST['meetid'];
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$remark=$_POST['remark'];
	$meetfile=$_POST['meetfile'];

	
	mysqli_query($conn,"insert into meeting (meetid,title,head,numattend,listname,roomid,start
	,end,addequipment,remark,meetfile) 
	values ('$meetid','$title','$head','$numattend','$listname','$roomid','$start'
	,'$end','$addequipment','$remark','$meetfile')");
	header('location:addmeet.php');


?>