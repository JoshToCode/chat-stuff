<?php 
require_once('head.php');
function cht(){
 global $connects;
//getting info from frontend;
$data=json_decode(file_get_contents('php://input'),true);



$content=$data['content'];
$reciever=$data['reciever_Id'];

$first_user=$_SESSION['user']['id'];
$insert="INSERT INTO chats (user1_id,user2_id,content) VALUES ('$first_user','$reciever','$content' )";
mysqli_query($connects,$insert);


$select="SELECT * FROM chats WHERE user1_id='$first_user' AND user2_id='$reciever'";
$val=mysqli_query($connects,$select);

$row=mysqli_num_rows($val);

$chats=[];

while ($row=mysqli_fetch_assoc($val)) {
  array_push($chats,$row);
}

echo  json_encode($chats);

}
cht();

function timer(){
global $connects;
$select="SELECT * FROM chats  ";
}
timer()
?>