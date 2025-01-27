<?php 

include 'auth.php';

$username= $_POST['username'];
$password= $_POST['password'];
$uuid= $_POST['uuid'];

$EXPIRE = date('Y-m-d H:i:s');

$login = mysqli_query($conn,"select * from register where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
$data = mysqli_fetch_assoc($login);
if($EXPIRE > $data["expire"]){
echo "login is expired";
}else{
if($data["uuid"] == NULL){
$query = $conn->query("UPDATE register SET uuid= '$uuid', expire= '".$data["expire"]."' WHERE username='$username' and password = '$password'");
echo "login is done";
echo "\n";
echo "【username】";
echo ($data["username"]);
echo "【username】";
echo "\n";
echo ";";
echo ($data["expire"]);
echo ";";
}elseif ($data["uuid"] !== $uuid){
echo "login is not registered";
}else{
echo "login is done";
echo "\n";
echo "【username】";
echo ($data["username"]);
echo "【username】";
echo "\n";
echo ";";
echo ($data["expire"]);
echo ";";
}
}
}else{
	echo "login is not in list";
}
?>