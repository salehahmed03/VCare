<?php session_start();?>


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

    <link rel="stylesheet" href="../assets/styles/pages/main.css">

<?php include_once("inc/header.php");?>

<form class="form" method="POST" action="../controllers/createmajor.php">
<div class="container col-6">
<div class="row ">
  <label for="colFormLabelLg ml-4" class="col-form-label-lg ">Major Name</label>
  <div class="col-sm-6">
    <input name="majorName" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Place The Name of The Major Here">
    <button name="submit"  type="submit" class="btn btn-success mt-5">Submit</button>  
  </div>
</div>
</div>

<?php if(isset($_SESSION['success'])){ ?>
    <div class="alert alert-success" role="alert">
       <?php echo $_SESSION['success'] ; ?>
    </div>
    <?php } elseif(isset($_SESSION['method_error'])){ ?>
    <div class="alert alert-danger mt-5" role="alert">
       <?php echo $_SESSION['method_error']; ?>
    </div>
<?php } ?>

<?php unset($_SESSION['success']);?>
<?php unset($_SESSION['method_error']);?>






<?php ?>
</form>












<?php include_once("inc/footer.php");?> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/scripts/home.js"></script>