<?php
$showError = "false";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail']; 
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
       $row = mysqli_fetch_assoc($result);
    //    if(password_verify($pass,$row['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            // echo "welcome". $email;
           
    //    }
       header ("Location: /project/index.php");
    
       }
    }
?>