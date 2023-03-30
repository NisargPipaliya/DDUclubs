<?php
$host="localhost";
$uname="root";
$pwd="";
$dbn="signin";
$conn= mysqli_connect($host, $uname,$pwd,$dbn);
if(!$conn){
    echo "error  : ".mysqli_connect_error();
}
else
// echo "done";

?>