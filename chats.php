<?php
require_once('head.php');

function insert_chat(){
global $connect;
$data=json_decode( file_get_contents('php://input'),true);
$id1= $data['id1'];
$id2= $data['id2'];
$content= $data['text'];
$ftg=$data['write'];

if($ftg){

$query="INSERT INTO chats(user1_id,user2_id,content) VALUE('$id1','$id2','$content')";
mysqli_query($connect,$query);
echo json_encode($data);
}


};
insert_chat();



function select_chat(){
global $connect;


$data=json_decode(file_get_contents('php://input'),true);
$id1=$data['id1'];
$id2= $data['id2'];
$select_query="SELECT * FROM chats WHERE user1_id = '$id1' AND user2_id = '$id2'";

$query=mysqli_query($connect,$select_query);

$row=mysqli_num_rows($query);

$chats=[];

while ($row=mysqli_fetch_assoc($query)) {
  array_push($chats,$row);
}

echo  json_encode($chats);

};
select_chat();