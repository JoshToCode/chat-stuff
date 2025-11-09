<?php 
require_once('head.php');
require_once('controller.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    
<div class="login">
<p class="ll">Signup</p>
<form method="post">
<input type="text" placeholder="Username" class="name" name='name'>
<p><?php $error['name'] ?></p>
<input type="text" placeholder="Email" class="name" name="email" >
<p><?php $error['email'] ?></p>
<input type="text" placeholder="Password" class="name" name="password" >
<p><?php $error['password'] ?></p>
<button class="logb" name='signup'>Register</button>
<p class="nam">Not a Member? <a href="login.php">login</a></p>
</div>
</form> 
</body>
</html>