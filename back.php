<?php
$comment=isset($_GET['comment']) ;

$conn=mysqli_connect('localhost','root','','coder');
if($conn->connect_error)
{
	die('connection failed : ' .$conn->connect_error);

}
else if
{
	$stmt= $conn->prepare("insert into comment(comment) values(?)");
$stmt= $conn->prepare("insert into comment(comment) values(?)");
	
	$stmt->bind_param_connect('s',$comment);
	$comment= $_GET['comment'];

	$stmt->execute();
	
	echo "comment sent successfully";
	
	$stmt->close();
	$conn->close();
}
else
{
	$stmt= $conn->prepare("insert into comment(comment) values(?)");
$stmt= $conn->prepare("insert into comment(comment) values(?)");
	
	$stmt->bind_param_connect('s',$comment);
	$comment= $_GET['comment'];

	$stmt->execute();
	
	echo "comment sent successfully";
	
	$stmt->close();
	$conn->close();
}





?>
