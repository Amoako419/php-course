<?php require "config.php";?> 
<?php

if(isset($_POST['submit'])){
    if($_POST['email']=='' || $_POST['password']==''){
    echo "some inputs are empty";}
   else{
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $insert = $conn->prepare("INSERT INTO users (email, mypassword)
    VALUES (:email, :mypassword)");
  
    $insert->execute(
      [
        ':email' => $email,
        'mypassword'=>password_hash($password, PASSWORD_DEFAULT),
      ]
      );
    }
}  
?>


<head>

<style>
    label{
        font-family: 'Gill Sans', 'Gill Sans MT', Impact,'Arial Narrow Bold', sans-serif, 'Trebuchet MS', sans-serif !important;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
 crossorigin="anonymous"></script>
</head>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="register.php">
   
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput text-success">Email address</label>
    </div>

    <!-- <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput text-success">Username</label>
    </div> -->

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword text-success">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-success" type="submit">register</button>
    <h6 class="mt-3">Aleardy have an account?  <a href="login.php">Login</a></h6>

  </form>
</main>