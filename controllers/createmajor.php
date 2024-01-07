<?php 
session_start();


include("../functions/validations.php");


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

    $majorName=trim(htmlspecialchars($_POST['majorName']));

    $validMajorName=validateName($majorName);

    if($validMajorName==null){

        //establish connection to db

        $conn = mysqli_connect("localhost","root","","clinic");
        $majorSql="INSERT INTO `major`(`title`) VALUES ('$majorName')";
        $exec=mysqli_query($conn,$majorSql);

        $_SESSION['success']="Major Added";

        header("location:../dashboard/addMajor.php");
        die();
       
    }else{
     $_SESSION['method_error']="INVALID INPUT";
     header("location:../dashboard/addMajor.php");
     die();
    }

}else{
    $_SESSION['method_error']="INVALID";
    header("location:../dashboard/addMajor.php");
    die();
}





?>