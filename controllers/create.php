<?php 
    require_once('verification.php');
    require_once('dbconn.php');
    
    $name = $_POST['inputName'];
    $ip = $_POST['inputIp'];
    $mac = $_POST['inputMac'];

    $sql = "INSERT INTO list VALUES ('','$name','$ip','$mac')";

    if(verify($name, $ip, $mac, "create")){
        echo "True";
        mysqli_query($conn, $sql);
    }else{
        echo "False";
    }
    
    mysqli_close($conn);
    header('Location: ../');
?>



