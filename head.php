<?php 
$connect=mysqli_connect('localhost','root','','signup_login');
$connects=mysqli_connect('localhost','root','','bookstore');
if (!$connect) {
    echo 'something went wroung';
}
session_start()
?>