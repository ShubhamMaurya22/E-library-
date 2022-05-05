<?php
$showError = "false";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST["signupemail"];
    $pass = $_POST["signupPassword"];
    $cpass = $_POST["signupcPassword"];
   
    //check wheather this email ecxits
    $existsql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn , $existsql);
    $numRows = mysqli_num_rows($result);
    
  if($numRows > 0){
        $showError ="Email-already-exits";
        // echo $numRows;
    }else{
        if($pass == $cpass && strlen($pass)>8){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `user_email`, `password`) VALUES ('$user_email', '$hash')";
            $result = mysqli_query($conn, $sql);  
            if($result){
                $showError= true;
                header ("Location: /project/index.php?signupsuccess=true");
                exit();
            }
        }elseif (strlen($pass) < 8){
        
            $showError = "Password-must-have-8-characters";
        }
        else{
                $showError ="Password-do-not-match" ;
         
        }
    }
        header ("Location: /project/index.php?signupsuccess=false&error=$showError");

}
?>