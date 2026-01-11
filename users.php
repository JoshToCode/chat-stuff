<?php 
require_once('head.php');
require_once('controller.php');
 require_once('test.php');
if (!isset($_SESSION['user'])) {
   header('location:http://localhost/chat-stuff/login.php') ;
}
$te=sel();
var_dump($te);


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

</div>

</div>

<div>

<?php foreach ($te as $t) { ?>
<div class="all">
   
  <div class="imgs">
      <a href="chat.php?id=<?php echo $t['id'] ?>">
            
               <div class="daz">   
                  <div>
                     <img src="download.jpg" alt="" srcset="" class="img">
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