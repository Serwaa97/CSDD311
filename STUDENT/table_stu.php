<?php


$conn= mysqli_connect("localhost", "root", "","STUDENT");

if(mysqli_connect_errno()){
    echo"failed to connect".mysqli_connect_errno();
}

?>