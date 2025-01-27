<?php 

include 'auth.php';

$timenow = time();

$username = $_POST['username'];
$password = $_POST['password'];
$uuid = $_POST['uuid'];
//$expire = $_POST['expire'];

$login = mysqli_query($conn,"select * from register where username='$username'");
$cek = mysqli_num_rows($login);

if($cek > 0){

$data = mysqli_fetch_assoc($login);

if (isset($_POST["oneday"])) {
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 days", $timenow));
}elseif (isset($_POST["oneweek"])) { 
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 week", $timenow));
}elseif (isset($_POST["onemonth"])) { 
$EXPDAY = date("Y-m-d H:i:s", strtotime("+1 month", $timenow));
}else{
$EXPDAY = ($data["expire"]);
}

$sql_update=mysqli_query($conn,"UPDATE register SET password='$password',expire='$EXPDAY',uuid='$uuid' WHERE username='$username'");
echo "update is done";
}else{
	echo "update is not in list";
}

?>