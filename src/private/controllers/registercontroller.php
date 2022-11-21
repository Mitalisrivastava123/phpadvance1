<?php
include  "../config/config.php";
// taking values from form 
$name= $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
// checking if form fields are empty then it will remain in registration page
if($password == $cpassword)
{
$user = User::create(array('name' => $name, 'email' => $email , 'password'=>$password));
}
else
{
    echo "<script>alert('Your password not match');window.location.href='../Views/userregisterform.php'</script>";
}


?>