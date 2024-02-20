<?php
$connect=mysqli_connect('localhost','root','root','HTTP-5225');
if(!$connect){
    die("Connection failed:".mysqli_connect_error());
}
?>