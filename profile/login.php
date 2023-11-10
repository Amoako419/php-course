<?php
if(isset($_POST['submit'])){
    if($_POST['email']== '' OR $_POST['password']== '' ){
      echo"some inputs are empty";
    }else{

      $email = $_POST['email'];
      $password = $_POST['password'];

      $login = $conn->query("SELECT * FROM users WHERE email = '$email'");
      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);

       

      if($login->rowCount()>0){
      //  echo $login->rowCount();
      if(password_verify($password, $data['mypassword'])){
       
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];

        header("location: index.php");
      }else{
        echo "email is password is wrong";
      }

      }else{
        echo "email is password is wrong";
      }
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
  <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center text-success">Please login</h1>

    <div class="form-floating">
      <input name="email" type="email"  class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput text-success">Email address</label>
    </div>
    <!-- <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="user.name">
      <label for="floatingInput">Username</label>
    </div> -->
    <div class="form-floating">
      <input name="password" type="password"  class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword text-success">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>