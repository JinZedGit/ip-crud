<?php
    require_once('verification.php');
    require_once('dbconn.php');

    $bulk_string = $_POST['bulkInput'];
    $split_line = explode(PHP_EOL, $bulk_string);

    for($i=0 ; $i < (count($split_line)-1) ; $i++){
        $split_comma = explode(',', $split_line[$i]);

        $name = $split_comma[0];
        $ip = $split_comma[1];
        $mac = $split_comma[2];

        $sql = "INSERT INTO list VALUES ('','$name','$ip','$mac')";

        if(verify($name, $ip, $mac, "")){
            mysqli_query($conn, $sql);
            echo "True";
        }else{
            echo "False";
        }
    }
mysqli_close($conn);
header('Location: ../');

?>