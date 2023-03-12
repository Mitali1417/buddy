<?php

$server = "buddywebapp.mysql.polardb.ap-south-1.rds.aliyuncs.com:3306";
$username = "mitalidb1";
$password = "Mitali@1234";
$database = "mitalidb1";


$con = mysqli_connect($server, $username, $password,$database);

if($con){
    echo "Connection Successful";
}

else{
    "Not Connected";
}   


if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    
    
    
    
    $query = "INSERT INTO mitalidb1 (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment' ); ";
    

    if(mysqli_query($con, $query)){
        echo "inserted";    
    }
    else{
        echo "not inserted";
    }
    
    
    // header('location:index.php');
}
else{
    echo "error";
}




?>