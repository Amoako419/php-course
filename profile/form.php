
<?php require "config.php";?> 

<!-- <?php

// if(isset($_POST['submit'])){
    // if($_POST['fname']=='' || $_POST['inumber']=='' || $_POST['dob']=='' ||$_POST['gender']=='' ){
    // echo "Some inputs are empty";}

    // else{
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $tel = $_POST['tel'];
    //     $tele = $_POST['tele'];
        // $inumber = $_POST['inumber'];
        // $email = $_POST['email'];
        // $gender = $_POST['gender'];
        // $dob = $_POST['dob'];

        // $insert = $conn->prepare("INSERT INTO users(fname,lname,tel,tele,inumber,email,gender,dob)
        // VALUES (:fname, :lname, :tel, :tele, :inumber, :email, :gender, :dob)");

        // $insert->execute(
        //     [
        //         ':fname' => $fname,
        //         ':lname' => $lname,
        //         ':tel' => $tel,
        //         ':tele' => $tele,
        //         ':inumber' => $inumber,
        //         'email' => $email,
        //         ':gender' => $gender,
        //         ':dob' => $dob,
        //     ]
//             );
//     }
// }

?> -->

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


<!--Javascript CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
 crossorigin="anonymous"></script>
</head>
<body>
    <div class="text-success text-center">
    <h1 class="display-4">Fill this out</h1>
    </div>

    <!-- Horizontal Rules-->
    <hr class="border border-success border-2 opacity-50 ">


    <!-- FORMS -->
    <div class="Container">
    <form method="POST" action="profile.php">  
    <div class="Form">
    <div class="row">
    <div class="col">
    <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name " required>
    </div>
     <div class="col">
    <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
     </div>
     </div>
      <br><br>


     <div class="row"> 
  <div class="col">
    <!-- <input type="tel" class="form-control" placeholder="Contact 1" aria-label="Contact" pattern="[0-9]{10}" required> -->
    <input type="tel" name="tel" class="form-control" placeholder="Contact 1" id="phone" name="phone" pattern="[0-9]{10}" required>
  </div>
  <div class="col">
    <!-- <input type="tel" class="form-control" placeholder="Contact 2" aria-label="Contact"> -->
    <input type="tel" name="tele" class="form-control" placeholder="Contact 2" id="phone" name="phone" pattern="[0-9]{10}" required>
  </div>
</div>

        <br><br>

        <div class="row">
    <div class="col">
    <input type="text" name="inumber" class="form-control" placeholder="Index Number" aria-label="Index number" required>
    </div>
     <div class="col">
    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" required>
     </div>
     </div>

     <br><br>

     <div class="form-group">
    <label for="gender">Gender:</label>
    <select class="form-control" id="gender" name="gender" required>
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
  </div>
  <br><br>
  <div class="form-group">
    <label for="dob">Date of Birth:</label>
    <input type="date" class="form-control" id="dob" name="dob" required>
  </div>
  <br><br>
  <div class="col-12 text-center">
   <a href="profile.php"> <button name="submit" class="btn btn-success" type="submit">Submit</button></a>
  </div>    

        </div>
    </form>
    </div>
</body>