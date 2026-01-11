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
    $select="SELECT * FROM chats WHERE user1_id='$id' AND user2_id='$user2_id'";
   return  mysqli_query($connect,$select);
}