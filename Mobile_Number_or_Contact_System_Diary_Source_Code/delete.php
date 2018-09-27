<?php
include "./db_con.php";
$id = $_REQUEST['id'];


echo "<script>alert('Record not deleted')</script>";
	if(isset($_GET['id'])){
		$sql = "DELETE FROM contact WHERE contact_ID = '".$_GET['id']."'";

	$result = mysqli_query($connection, $sql);

if(!$result){

}else{
echo ("<script>alert('Record deleted successfully')</script>"); 
}
	}
	else{
		echo 'Select member to delete first';
	}
header("location: add.php");
?>

















?>