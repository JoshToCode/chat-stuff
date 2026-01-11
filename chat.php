<?php 
require_once('head.php');
require_once('controller.php');
require_once('test.php');
if (!isset($_SESSION['user'])) {
   header('location:http://localhost/chat-stuff/login.php') ;
}
$user2_id=$_REQUEST['id'];
 $chats=chat_selector($user2_id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat.css">
    <script src="https://kit.fontawesome.com/d3d2e1bd1e.js" crossorigin="anonymous"></script>
    <script src="chat.js" defer></script>
    <title>Document</title>
</head>
<body>


    <div class="tog">
       <p class="ech"><?php echo $_REQUEST['id'];?></p>


        
    <div class="chatnames">
        <div class="dsa">
        <div class="da">
          <div>
             <h2>Chat</h2>  
             </div>
       <div class="saqz">
         <div>
         <a href="users.php"> <p class="wda"><i class="fa-solid fa-user"></i></p></a>
         </div>
         <div class="bdn">
         <p class="wdasz"><i class="fa-solid fa-gear"></i></p>
          </div>
         <div class="bdn">
         <p class="wdasz"><i class="fa-solid fa-earth-americas"></i></p>  
         </div>
       
       </div>
        </div>
           
       <div>
       <p class="search"><i class="fa-solid fa-magnifying-glass yoy"></i><input type="text" placeholder="Search" class="yo"></p>
       </div>
       </div>
<div class="dad">
       <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>
     <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

         <div class="people">
        <img src="images/images.jpg" alt="" class="pop">
        <div class="ch">
        <p class="stuf">Alexzander Joe</p>
        <p class="jo">yo,what up?</p>
        </div>
        <p class="time">10:32am</p>
       </div>

    
    

</div>

    </div>
    




    <div class="bomb">
        
<div class="chats  bl">
    <p class="dude"><?php echo $_SESSION['user']['name'] ?></p>
    <p class="fs"><a href="logout.php">logout</a></p>
</div>


<div class="chat_container">

<?php foreach ($chats as $t) {?>
  <?php if ($t['user1_id']==$_SESSION['user']['id']) {?>
 <div class="chatR">


      <div class="hot">
        <p class="ones">oh ok ,Anyways i've finsh further maths assignment</p>
      <p class="t">10:40am</p>
      </div>
    </div>

  <?php }else{?>
    
      <div class="chatL">
      <p class="one">Yo bro ,i'v you done the assignment yet</p>
      <p class="t">10:33am</p>
    </div>
 <?php  } ?>
<?php } ?>
  

   



    </div>


</div>

<div class="replys">
    <input type="text"  placeholder="Reply massage" class="rp">
    <p class="az"><i class="fa-solid fa-paper-plane"></i></p>
</div>
    </div>
</div>


    
</body>
</html>