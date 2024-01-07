<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="assets/styles/pages/main.css">

    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
        <?php include_once("inc/header.php");?>


        
       
        <div class="container">
           
        <a href="dashboard/addMajor.php" type="button" class="btn btn-primary mt-5" >Add a Major</a>


            <table class="table mt-5">
                <thead>
                  <tr>
                    
                    <th scope="col">Major Name</th>
                    <th scope="col">id</th>
                    <th scope="col">Actions</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    session_start();
                    $conn = mysqli_connect("localhost","root","","clinic");
                    $tableSql="SELECT * FROM major";
                    $exec=mysqli_query($conn,$tableSql);


                    while($row=$exec->fetch_assoc()){
                        echo "<tr>

                    <td>" . $row['title'] ."</td>
                   
                    <td> ". $row['id'] ."</td>
                   

                    <td>
                    <a href='dashboard/editMajor.php?id=" . $row['id'] . "' type='button' class='btn btn-warning'>Edit</a>
                        <a href='' type='button' class='btn btn-danger'>delete</a>
                    </td>
                    
                    
                    </tr>";

                    }
                    
                    
                    
                    

                  
                  ?>
                </tbody>
              </table>






        </div>
        <?php include_once("inc/footer.php");?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>