<?php 
$error=['name'=>'','email'=>'','password'=>''];
$name;
$email;
$password;
function signup()  {
    global $connect,$error,$name,$email,$password;
  if (isset($_POST['signup'])) {
   if (strlen($_POST['name']) <5) {
    $error['name']='name must be greater than 5 letters';
    return false;
   } else{
   $name=$_POST['name'];
   }
   if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
     $error['email']='email must be validated';
     return false;
   }if (empty($_POST['email'])) {
    $error['email']='email must not be empty';
    return false;
   } else{
    $email=$_POST['email'];
   }
   if (strlen($_POST['password'])<8) {
       $error['password'] ='password must be more than 8 letters';
       return false;
   }else {
    $password=md5($_POST['password']);
   }
   $select="SELECT * FROM user WHERE email='$email'";
   $cf=mysqli_query($connect,$select);
   $row= mysqli_num_rows($cf);
   if ($row===0) {
$insert="INSERT INTO user (name,email,password) VALUES ( '$name','$email','$password' )";
 $q=mysqli_query($connect,$insert);
 $last_id=mysqli_insert_id($connect);

 $_SESSION['user']=ses($last_id);
   }else{
    echo 'email has been used';
   }
   

   
}  
}
signup();

function ses($id)  {
  global $connect;
  $select="SELECT * FROM user WHERE id='$id'";
  $sesa=mysqli_query($connect,$select);
  return false;
}


function login()  {
     global $connect,$error,$email,$password;
  if (isset($_POST['login'])) {

   if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
     $error['email']='email must be validated';
     return false;
   }if (empty($_POST['email'])) {
    $error['email']='email must not be empty';
    return false;
   } else{
    $email=$_POST['email'];
   }
   if ($_POST['password'] <8) {
       $error['password'] ='password must be more than 8 letters';
       return false;
   }else {
    $password=md5($_POST['password']);
   }
   $select="SELECT * FROM user WHERE email='$email' AND password='$password'";
   $cf=mysqli_query($connect,$select);
   $row=mysqli_num_rows($cf);


echo $row;

   if ($row === 0) {
     echo'this input is not found';
     return false;
   }
}}
login();
?>