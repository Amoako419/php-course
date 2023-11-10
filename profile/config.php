<?php
//host
$host ="localhost";

//dbname
$dbname= "profile";

//user
$user="root";

//pass
$pass = "";

$conn = new PDO ("mysql:host=$host;dbname=$dbname;",$user,$pass);

// if($conn == true){
//     echo "it's working fine";
// }else{
//     echo "error";
// }