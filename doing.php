<?php 
$error=['name'=>'','email'=>'','password'=>''];
$name;
$email;
$password;
function signup()  {
    global $connects,$error,$name,$email,$password;
    if (isset($_POST['signups'])) {
    if (strlen($_POST['name']) <5) {
        $error['name']='name must be greater than 5 letters';
        return false;
    }else {
        $name=strip_tags(stripslashes($_POST['name']));
    }
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $error['email']='email must be validated';
        return false;
    }if (empty($_POST['email'])) {
        $error['email']='email must not be empty';
        return false;
    }else{
        $email=strip_tags(stripslashes($_POST['email']));
    }
    if (strlen($_POST['password'])< 8) {
        $error['passwoord']='password must be greater than 8 letters';
        return false;
    }else {
        $password=md5($_POST['password']);
    }
    $select="SELECT * FROM users WHERE email='$email'";
    $qc=mysqli_query($connects,$select);
    $rows=mysqli_num_rows($qc);
    if ($rows===0) {
        $insert="INSERT INTO users(name,email,password,image) VALUE ('$name','$email','$password','')" ;
         mysqli_query($connects,$insert);
    }else{
        echo 'email has been taken';
        
    }
    
   
}
}
signup();

 //echo 'hello world';


 //$et="hsholo dooloes";
 //$so=['orange','kill'];
 //$do=18869864859620;
 //var_dump( explode('-',$et))
 //echo chr(10101101)
 //echo 'hello','theworld';
  //echo chunk_split($et,1,'/')
 // echo md5($et)
 //echo implode('',$so);
 //echo strlen($et);
 // echo number_format($do)
 //echo soundex($et)
 //echo str_replace('hsholo','hello',$et)
// echo ucwords($et,' ')
?>