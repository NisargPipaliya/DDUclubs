<?php
include 'config.php';
// $showalert="";
$showerror = "";
$fname=$lname=$uname=$pwd=$cpwd=$mno=$email=$dob=$gender="";
if (isset($_POST['sigup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
    $mno = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    //check if username exist or not

    $check = "SELECT * FROM signin WHERE username='$uname' ";
    $result = mysqli_query($conn, $check);

    $nrow = mysqli_num_rows($result);

    if ($nrow > 0) {
        echo "Username already exist";
    } 
    else {
        if ($cpwd != $pwd) {
            $showerror = "Passwords are not matching.";
        } else {
            $sql = "INSERT INTO signin(first_name,lname,username,pwd,mno,email,dob,gender) VALUES('$fname','$lname','$uname','$pwd','$mno','$email','$dob','$gender')";
            
            if (mysqli_query($conn, $sql)) {
                setcookie('loggedin',true,time() + 86400);
                header('Location:index.php');
            }
            else
                echo "ERROR" ;
        }
    }
}

?>
