<?php
    include "../include/lib.php";


    if(!empty($_POST["user_id"])) {
        $user_id = $_POST["user_id"];
        $user_id = mysqli_real_escape_string($connect, $user_id);
        $query = "select * from user_table where user_id ='$user_id'";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($result);
        if(!$data['user_idx']) {
            echo "true";
        }else{
            echo "false";
        }
    }

?>