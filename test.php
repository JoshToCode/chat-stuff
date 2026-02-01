<?php 
require_once('head.php');
require_once('controller.php');
function sel()  {
    global $connect;
    $id=$_SESSION['user']['id'];
    $select="SELECT id,name,email FROM user WHERE id != '$id' ";
    return mysqli_query($connect,$select);
     
};
function chat_selector($user2_id) {
    global $connect;
    $id=$_SESSION['user']['id'];
    $select="SELECT * FROM chats WHERE (user1_id='$id' AND user2_id='$user2_id') OR (user2_id='$id' AND user1_id='$user2_id')";
   return  mysqli_query($connect,$select);
};

function chat_names($user2_id)  {
    global $connect;

    $select="SELECT name FROM user WHERE id='$user2_id'  LIMIT 1";
    $query= mysqli_query($connect,$select);
     $row=mysqli_num_rows($query);
    if ($row===0) {
        
    }else{
         return mysqli_fetch_assoc($query);
    }
}