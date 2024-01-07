<?php
session_start();
include("../functions/validations.php");


if(isset($_POST['submit'])){
    

    $name=strip_tags($_POST['name']);//strip tags to avoid any scripts confirmed by user
    $email=strip_tags($_POST['email']);
    $phone=strip_tags($_POST['phone']);
    $password=strip_tags($_POST['password']);
    $confirmPassword=strip_tags($_POST['confirmpassword']);
    $errors=[];    
}
else{
    echo "submit first ";
}


$errors['name']= validateName($name);
$errors['email']=validateEmail($email);
$errors['phone']=validatePhone($phone);
$errors['password']=validatePassword($password);
$errors['confirmpassword']=validateConfirmPassword($password, $confirmPassword);


if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}









?>