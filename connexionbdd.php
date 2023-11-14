<?php

// Serveur connexion
$serverName = 'localhost';
$user = 'root';
$password = 'root'; // mac user

$connexion = mysqli_connect($serverName, $user, $password);
if(!$connexion){
    die('Failled to connect'.mysqli_connect_error());
};

// Database connexion
$databaseName = 'online_cv';

$cnx = mysqli_connect($serverName, $user, $password, $databaseName);
if(!$cnx){
    die('Failled to connect'.mysqli_connect_error());
};

// form data 
$lastName = $_POST['nom'];
$firstName = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$message = $_POST['textarea'];

// SQL request
$sql = "INSERT INTO visitor (LastName, FirstName, email, phone, message) VALUES ('$lastName', '$firstName', '$email', '$phone', '$message')";
if(!mysqli_query($cnx, $sql)){
   echo 'Error : '.mysqli_error($cnx);
};

// close the connexion
mysqli_close($cnx);
?>