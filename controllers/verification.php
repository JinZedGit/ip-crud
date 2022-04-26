<?php 

//verfiy() returns true of false, false is usually empty
function verify($name, $ip, $mac, $state){
    global $conn;

    $regex = "/^([U])(1|2)(-)(R)([0-9]{3})(-)([0-9]{2}|[L][0-9]{2})$/";
    
    $valid_name = preg_match($regex, $name);
    $valid_ip = filter_var($ip, FILTER_VALIDATE_IP);
    $valid_mac = filter_var($mac, FILTER_VALIDATE_MAC);

    if($state == "create"){
        $check_exist = mysqli_query($conn,"SELECT * from list where name='$name' or ip='$ip' or mac='$mac'");
        $check_rows = mysqli_num_rows($check_exist);

        if($valid_name && $valid_ip && $valid_mac && $check_rows==0){
            return true;
        }else{
            return false;
        }
    }else{
        $check_exist = mysqli_query($conn,"SELECT * from list where (name='$name' or ip='$ip' or mac='$mac') and id!='$state'");
        $check_rows = mysqli_num_rows($check_exist);

        if($valid_name && $valid_ip && $valid_mac && $check_rows==0){
            return true;
        }else{
            return false;
        }
    }
}


