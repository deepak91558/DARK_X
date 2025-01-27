<?php 

include 'auth.php';

$username = $_POST['username'];
// $password = $_POST['password'];

$login = mysqli_query($conn,"select * from register where username='$username'"); // and password='$password'
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	
    echo "login is done";
    echo "\n";
    echo "【username】";
    echo ($data["username"]);
    echo "【username】";
    echo "\n";
    echo "【password】";
    echo ($data["password"]);
    echo "【password】";
    echo "\n";
    echo "【uuid】";
    echo ($data["uuid"]);
    echo "【uuid】";
    echo "\n";
    echo "【createdate】";
    echo ($data["createdate"]);
    echo "【createdate】";
    echo "\n";
    echo "【expire】";
    echo ($data["expire"]);
    echo "【expire】";

}else{
	echo "login is not in list";
}

?>