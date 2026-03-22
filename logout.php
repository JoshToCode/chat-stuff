<?php 

session_start();

session_unset();

session_destroy();


header("location:http://localhost/chat-stuff/chat-stuff/login.php");