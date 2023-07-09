<?php
    include ('database.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    //$query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $tarray = array();
        $tarray["status"] = "success";
        $tarray['name'] = $row['name'];
        $tarray['email'] = $row['email'];
        $tarray['mobileno'] = $row['mobileno'];
    }else{
        $tarray = array();
        $tarray["status"] = "fail";
    }
    header('Content-Type:application/json');
    echo json_encode($tarray);  
?>