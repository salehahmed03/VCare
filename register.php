<?php

include("functions/validations.php");


if(isset($_POST['submit'])){
    

    $name=strip_tags($_POST['name']);//strip tags to avoid any scripts confirmed by user
    $email=strip_tags($_POST['email']);
    $phone=strip_tags($_POST['phone']);
    $password=strip_tags($_POST['password']);
    $confirmPassword=strip_tags($_POST['confirmpassword']);
    $errors=[];   
    
    
$errors['name']= validateName($name);
$errors['email']=validateEmail($email);
$errors['phone']=validatePhone($phone);
$errors['password']=validatePassword($password);
$errors['confirmpassword']=validateConfirmPassword($password, $confirmPassword);

if (empty(array_filter($errors))) {
    $conn = mysqli_connect("localhost","root","","clinic");
    $UserSql="INSERT INTO `users`( `name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";
    $exec=mysqli_query($conn,$UserSql);

    
}
    


}







?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="./assets/styles/pages/main.css">

    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
    <?php include_once("inc/header.php");?>
        
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">login</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form" method="POST" action="register.php">
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" >
                            <?php if(isset($errors['name']) && ! empty($errors['name'])) {  ?>
                            <p class="text-danger"><?php echo $errors['name'];?></p>
                        <?php }?>       
                        </div>
                        <div class="mb-3">
                            <label class="form-label -label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone"  name="phone">
                            <?php if(isset($errors['phone']) && ! empty($errors['phone'])) {  ?>
                            <p class="text-danger"><?php echo $errors['phone'];?></p>
                        <?php }?>       
                        </div>
                        <div class="mb-3">
                            <label class="form-label -label" for="email">Email</label>
                            <input type="email" class="form-control" id="email"  name="email">
                            <?php if(isset($errors['email']) && ! empty($errors['email'])) {  ?>
                            <p class="text-danger"><?php echo $errors['email'];?></p>
                        <?php }?>       
                        </div>
                        <div class="mb-3">
                            <label class="form-label -label" for="password">password</label>
                            <input type="password" class="form-control" id="password"  name="password">
                            <?php if(isset($errors['password']) && ! empty($errors['password'])) {  ?>
                            <p class="text-danger"><?php echo $errors['password'];?></p>
                        <?php }?>       
                        </div>
                        <div class="mb-3">
                            <label class="form-label -label" for="password">Confirm password</label>
                            <input type="password" class="form-control" id="ConfirmPassword"  name="confirmpassword">
                            <?php if(isset($errors['confirmpassword']) && ! empty($errors['confirmpassword'])) {  ?>
                            <p class="text-danger"><?php echo $errors['confirmpassword'];?></p>
                        <?php }?>       
                        </div>
                    </div>
                    <?php if (empty(array_filter($errors))) { ?>
                        <div class="alert alert-success" role="alert">
                            User is added successfully
                        </div>
                    <?php }?>
                    <button type="submit" class="btn btn-primary" name="submit">Create account</button>
                </form>
                
                      
                
                
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="./login.html"> login</a>
                </div>
            </div>

        </div>
    </div>

    <?php include_once("inc/footer.php");?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>