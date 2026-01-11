<?php 
$connect=mysqli_connect('localhost','root','','chat');
//$connects=mysqli_connect('localhost','root','','joshgame');

if (!$connect) {
    echo 'something went wroung';
}



session_start()
?>