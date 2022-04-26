<?php

//session_start();
    
require_once('verification.php');
require_once('dbconn.php');

$load_id = $_GET['id'];

$name = $_POST['inputName'];
$ip = $_POST['inputIp'];
$mac = $_POST['inputMac'];

$sql = "UPDATE list SET name='$name', ip='$ip', mac='$mac' WHERE id=$load_id";

if(verify($name, $ip, $mac, $load_id)){
    //echo "True";
    mysqli_query($conn, $sql);
    //unset($_SESSION['status']);
}else{
    //echo "False";
    //$_SESSION['status'] = '<span class=" style=\"color: red;\">Не бяха направени промени.</span>';
}


mysqli_close($conn);
header('Location: ../');

?>