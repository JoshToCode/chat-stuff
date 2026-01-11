<?php
require_once('head.php');
require_once('controller.php');
if (isset($_SESSION['user'])) {
   header('location:http://localhost/chat-stuff/users.php') ;
}
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
 <form action="" method="post">
 <div class="login">
<p class="ll">Login</p>
<input type="text" placeholder="Email" class="name" name="email">
<p><?php echo $error['email'] ?></p>
<input type="text" placeholder="Password" class="name" name="password">
<p><?php echo $error['password'] ?></p>
<p class="FP">Forgot passord ?</p>
<button class="logb" name="login">login</button>
<p class="nam">Not a Member? <a href="signup.php">sign up</a></p>
</div>
</form>  



</body>
</html>