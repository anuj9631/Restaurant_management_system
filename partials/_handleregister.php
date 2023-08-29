<?php
session_start();
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['regemail'];
    $pass=$_POST['regpassword'];
    $cpass=$_POST['regcpassword'];
    //check whether this email exists
    $existSql="select * from `users` where user_email='$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
    $showerror="Email already exists";
        header("Location:/Isoeh_project/index.php?signupsuccess=false&showerror=Email already exists");
    }
    else{
        if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="insert into `users` (`user_email`,`user_password`,`date`) values('$user_email','$hash',current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
                $showalert=true;
                header("Location:/Isoeh_project/index.php?signupsuccess=true");
                exit;
            }

        }
        else{
            $showerror="passwords do no match";
            header("Location:/Isoeh_project/index.php?signupsuccess=false&showerror=passwords do no match");
        }
    }
   
}
?>