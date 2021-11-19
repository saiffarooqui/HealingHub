<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    if(isset($_SESSION['t_id'])&&$_SESSION['t_id']) $t = "false";
    else $t = "true";
    
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} and istherapist='".$t."' ORDER BY user_id DESC";
    //echo $sql;
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>