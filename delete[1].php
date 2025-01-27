<?php 
include 'auth.php';

$username=$_POST['username'];

$query=mysqli_query($conn,"select * from register where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){

if($username == "" ){
	echo "Nothing can be empty!";
	}elseif($username <>""){
$delete=mysqli_query($conn,"DELETE FROM register
WHERE username = '$username'");
	if ($delete){
 	echo "Delete Success";
 }else{
echo "Delete Failed"; 
 }
	}
}else{
echo "Username is not in the list!";
}

?>