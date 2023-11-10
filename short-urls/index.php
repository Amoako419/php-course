<?php require "config.php";?>

<?php

$select = $conn->query('SELECT * FROM urls');
$select->execute();

$rows = $select->fetchAll(PDO::FETCH_OBJ);



?>

<?php
    if(isset($_POST['submit'])){
        if($_POST['url'] == ' '){
            echo "the input is empty";
        }else{
            $url=$_POST['url'];

            $insert = $conn ->prepare("INSERT INTO urls (url) VALUES (:url)");
            $insert->execute([
                ':url'=> $url
            ]);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <style>
        input{
          height:"1000px" !important; 
          width:"400px" !important;
        }
      </style>
    </head> 
    <Body>
        <div class="nav-container">
            <div class="nav-row">
            <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <div class="text-center">
    <form class="d-flex" role="search" method="POST" action="index.php">
      <input class="form-control mt-5 p-1 ms-5 "  name="url" id="url" type="search" placeholder="Your url" aria-label="Search">
      <button class="btn btn-outline-success mt-5 ms-5" name="submit" id="submit" type="submit">Submit</button>
    </form></div>
  </div>
</nav>
            </div>
        </div>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">url</th>
      <th scope="col">short url</th>
      
    </tr>
  </thead>
  <tbody>

    <?php foreach($rows as $row) : ?>
     <tr>
      <th scope="row"><?php echo $row->url;?></th>
      <td><a href="http://localhost/short-urls/u/index.php?id=<?php echo $row->id;?>"target="_blank">short-urls/<?php echo $row->id; ?></a></td>
      <td><?php echo $row->clicks;?></td> 
    
    </tr> 
    <?php endforeach;?>

    <?php 
        if(isset($_POST['submit'])){
        if($url = ''){
           $insert=$conn->prepare("DELETE FROM urls (url) VALUES (:url)"); 
        }
        else{
            // echo "There is a link";
        }
    }
    ?>

    <!-- <script type="text/javascript">
   // Get the button element by its ID
var button = document.getElementById("submit");
var url =document.getElementById("url").value;
// Add onclick event handler
button.onclick = function() {
  if(url== " "){
    document.write("input your link");
  }else{
  // Reload the page
  location.reload();}
}; -->

    </script>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td> -->
      <!-- <th scope="row">3</th>
      <td>Larry</td>
      <td>The Bird</td>
      <td>@twitter</td>
    </tr>  -->
  </tbody>
</table>
    </Body>



</html>
