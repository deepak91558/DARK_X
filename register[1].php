<?php 

include 'auth.php';

$timenow = time();

$username = $_POST['username'];
$password = $_POST['password'];
$createdate = $_POST['createdate'];
//$expire = $_POST['expire'];

$query=mysqli_query($conn,"select * from register where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo "Already Registered";
}else{

if (isset($_POST["oneday"])) {
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 days", $timenow));
}elseif (isset($_POST["oneweek"])) { 
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 week", $timenow));
}elseif (isset($_POST["onemonth"])) { 
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 month", $timenow));
}

if($username == ""){
	echo "Username empty";
	}elseif($username <>""){

$sql_simpan=mysqli_query($conn,"insert into register values('$username','$password','$createdate','$EXPDAY','')");
if($sql_simpan){
    echo "Register Success";
}else{
    echo "Register Failed";
 }
 
 }
 
}

?>