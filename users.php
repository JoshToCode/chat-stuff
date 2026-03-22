<?php 
require_once('head.php');
require_once('controller.php');
 require_once('test.php');
if (!isset($_SESSION['user'])) {
   header('location:http://localhost/chat-stuff/chat-stuff/login.php') ;
}
$te=sel();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body class="bg">

<div class="header">
<p class="hop">Users</p>
<div class="jojo">
   <p class="pop">Security score</p>
<p class="pop">User type</p>
<p class="pop">Mulitifactor</p>
 
<p class="logout"><a href="logout.php">logout</a></p>
</div>

</div>

<div>

<?php foreach ($te as $t) { ?>
<div class="all">
   
  <div class="imgs">
      <a href="index.php?id=<?php echo $t['id'] ?>">
            
               <div class="daz">   
                  <div>
                     <p class="img"><?php echo $t['name'][0]  ?></p>
                  </div>
                  <div class="box">
                     <p class="friends"><?php echo $t['name'] ?></p>
                     <p class="fri"><?php echo $t['email'] ?></p>
                  </div>
               </div>

       </a>
   </div>    

      <div class="shi">
         <p class="shis">Very Weak</p>
         <p class="shis">Admin</p>
         <p class="shis">RSA Securityid</p>
      </div>
   
</div>

<?php } ?>

</div>


</body>
</html>