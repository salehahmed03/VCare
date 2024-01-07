<?php 
session_start();


include("../functions/validations.php");


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

    $id=trim(htmlspecialchars($_POST['id']));
    $title=trim(htmlspecialchars($_POST['title']));

        $conn = mysqli_connect("localhost","root","","clinic");
        $majorUpdateSql="UPDATE `major` SET `title`='$title' WHERE `id`='$id'";
        $exec=mysqli_query($conn,$majorUpdateSql);

        $_SESSION['success_update']="Major updated";

        header("location:../dashboard/editMajor.php?id=".$_POST['id']);
        die();
       
}else{
     $_SESSION['method_error']="INVALID INPUT";
    header("location:../dashboard/editMajor.php?id=".$_REQUEST['id']);
     die();
}
?>

