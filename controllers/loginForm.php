<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = array("wrong inputs");
    
    if (empty($email) || empty($password)) {
        
        
    } else { 
        $conn = mysqli_connect("localhost","root","","clinic");;
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Create an SQL query to check if the email and password match a user in the database
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $query);

        // Check if a user was found
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['success']="Login Successfull";
        } else {
            
            $_SESSION['errors'] = $errors;
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>