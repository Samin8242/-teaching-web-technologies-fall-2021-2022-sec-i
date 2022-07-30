<?php 

    require_once('db.php');

function login( $name, $password){
    $conn = getConnection();
	$sql = "select * from users where username='{$name}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count >0 ){
        return true;
    }else{
        return false;
    }
}

function signup($user){
    $conn = getConnection();
	$sql = "insert into users values('', '{$user['name']}, '{$user['password']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
?>