<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=book_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $place=$_POST['place'];
    $guest=$_POST['guest'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];

    $requette = "INSERT INTO `book-from`(`name`, `email`, `phone`, `address`, `location`, `guest`, `arrival`, `leaving`) VALUES ('".$name."','".$email."','".$phone."','".$address."','".$place."','".$guest."','".$arrivals."','".$leaving."')";
    $resultat = $conn->query($requette);
    if($resultat){
        header('location:book.php?msg=ok');
    }else{
        header('location:book.php?error=no');
    }
}











?>