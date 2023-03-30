<?php
include('config.php');
$name="";
$pwd="";
if(isset($_POST['signin']))
{
    // echo "donesignin";
$name=$_POST['username'];
$pwd=$_POST['password'];
}
//creating query
$sql="SELECT username,pwd FROM signin WHERE username='$name' and pwd='$pwd' ";

$result=mysqli_query($conn,$sql);
$nrow=mysqli_num_rows($result);
// $sinfo=mysqli_fetch_all($result,MYSQLI_ASSOC);
// $name=$sinfo['first_name'];

// ---------------------------------------------------------
$login=false;
$showerror=false;
// ---------------------------------------------------------

if($nrow!=0)
{
$login=true;
setcookie('na',$name,time() + 86400);
setcookie('loggedin',true,time() + 86400);
header('Location:index.php');
}

else
{
    // echo "Incorrect username or password";
    $showerror=true;
}

// $sinfo=mysqli_fetch_all($result,MYSQLI_ASSOC);
// // print_r($sinfo);
// mysqli_free_result($result);

// mysqli_close($conn);
// $c=0;
// foreach($sinfo as $si)
// {
//     if($si['u_name']==$uname)
//     {
//         if($si['p_wd']==$pwd)
//         {
//             $c=1;
//         }
//     }
// }
// // print_r($sinfo);
// if($c)
// {
//     setcookie('name',$_POST['username'],time() + 86400);
//     header('Location:afterlogin.php');
// }
?>