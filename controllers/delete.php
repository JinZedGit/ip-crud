<?php
    $delete_id = $_GET['id'];

    function delete($del_id){
        require_once('dbconn.php');
        $sql = "DELETE FROM list WHERE id=$del_id";
        mysqli_query($conn, $sql);
        $conn->close();
    }
    
    delete($delete_id);

    header('Location: ../');
?>