<?php
$showalert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpassword'];
    $sql="select * from `users` where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1){
        //$showerror="Email already exists";
        //header("Location:/forum/index.php?signupsuccess=false&error=$showerror");
        $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['user_password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_email']=$email;
                //echo "logged in";
                header("Location:/Isoeh_project/index.php?loginsuccess=true");
                exit;
            }
            else{
                //echo "unable to log in";
                $showalert="passwords do no match";
                header("Location:/Isoeh_project/index.php?signupsuccess=false&showalert=passwords do no match");
            }
        }
        else{
            $showalert="please sign in first";
            header("Location:/Isoeh_project/index.php?signupsuccess=false&showalert=please sign in first");
        }
    }


?>