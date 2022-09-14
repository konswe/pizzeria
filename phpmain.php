<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bazapizzerii";

$con = mysqli_connect($servername, $username, $password, $dbname);

$Imie = $_POST['Imie'];
$Mail = $_POST['Mail'];
$Telefon = $_POST['Telefon'];
$Wiadomosc = $_POST['Wiadomosc'];
$Pizza = $_POST['Pizza'];


$sql = "INSERT INTO `tabelapizza` (`Imie`, `Mail`, `Telefon`, `Wiadomosc`,`Pizza`) VALUES ('$Imie', '$Mail', '$Telefon', '$Wiadomosc', '$Pizza')";

$rs = mysqli_query($con, $sql);

if($rs)header("Location: main.html");

?>