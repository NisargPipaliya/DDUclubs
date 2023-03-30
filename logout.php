<?php
if (isset($_COOKIE['loggedin'])) {
    setcookie('loggedin',false,time()+8600); 
}
header('Location:index.php');
?>