<?php require "config.php";?> 

<?php

if(isset($_POST['submit'])){
    if($_POST['fname']=='' || $_POST['inumber']=='' || $_POST['dob']=='' ||$_POST['gender']=='' ){
    echo "Some inputs are empty";}

    else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $tel = $_POST['tel'];
        $tele = $_POST['tele'];
        $inumber = $_POST['inumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $insert = $conn->prepare("INSERT INTO users(fname,lname,tel,tele,inumber,email,gender,dob)
        VALUES (:fname, :lname, :tel, :tele, :inumber, :email, :gender, :dob)");

        $insert->execute(
            [
                ':fname' => $fname,
                ':lname' => $lname,
                ':tel' => $tel,
                ':tele' => $tele,
                ':inumber' => $inumber,
                'email' => $email,
                ':gender' => $gender,
                ':dob' => $dob,
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
<body>
    <nav>
        <!-- As a link -->
     <nav class="navbar bg-body-tertiary">
     <div class="container-fluid">
    <a class="navbar-brand" href="<button class="btn btn-primary type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
     aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-menu-up" viewBox="0 0 16 16">
  <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
</svg></button></a>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <img class="offcanvas-title" id="offcanvasWithBothOptionsLabel">

        <div class="img-thumbnail"> <img src="" alt=""></div></img>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="badge bg-success">
        <a href="" class="">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="info" class="bi bi-house-add" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
</svg></a></div>
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
 <div class="badge bg-sucess">
    <a href="">
 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="info" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
</svg></a>
 </div>
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <div class="badge bg-sucess">
    <a href="">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="info" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
</svg></a></div>
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
  </div>
</div>
  </div>
   </nav>

<!-- As a heading -->
<!-- <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav> -->
    </nav>
    <hr class="border border-success border-2 opacity-50">
    <div class="container">
        <div class="img">
         
            <div class="text-center">
          <img src="IMG_7082.png" class="rounded w-25" height="400px" alt="...">
          <div class="text-display">
           <?php echo $_POST['fname'.' '.'lname'] ?>
          </div>
          </div>
          <div class="text-center">
            <a href="#" class="text-success">Edit </a>
          </div>
        </div>
    </div>

    <div class="alertalert-success" role="alert">
  
</div>

        <form method="POST" action="" class="form-control alert-heading alert-success">
  <fieldset disabled>
    <legend class="text-success">Profile</legend>
    <div class="mb-3">
     <label for="disabledTextInput" class="form-label text-success ">First Name</label>
      <input type="text" id="disabledTextInput" class="form-control text-body-secondary"  placeholder="<?php echo $_POST['fname'] ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Last name</label>
      <input type="text" id="disabledTextInput" class="form-control text-body-secondary" placeholder="<?php echo $_POST['lname'] ?>">
    </div>


    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Contact 1</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['tel'] ?>">
    </div>


    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Contact 2</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['tele'] ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['email'] ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Index Number</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['inumber'] ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">Gender</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['gender'] ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label text-success">DOB</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST['dob'] ?>">
    </div>

    
    <!-- <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div> -->
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  </fieldset>
</form>
       
   
</body>
