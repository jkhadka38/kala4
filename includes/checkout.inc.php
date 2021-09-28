<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_REQUEST['firstname'] ?? "";
    $lastname = $_REQUEST['secondname'] ?? "";
    $email = $_REQUEST['email'] ?? "";
    $address = $_REQUEST['address'] ?? "";
    $city = $_REQUEST['city'] ?? "";
    $state = $_REQUEST['state'] ?? "";
    $zip = $_REQUEST['zip'] ?? "";
}

$conn = new mysqli("localhost", "root", "root", "php") or die("Couldn't connect");
$sql = "CREATE TABLE IF NOT EXISTS checkout(
    firstname varchar(64) NOT NULL,
    lastname varchar(64) NOT NULL,
    email varchar(64) NOT NULL,
    `address` varchar(64) NOT NULL,
    city varchar(64) NOT NULL,
    `state` varchar(64) NOT NULL,
    zip varchar(64) NOT NULL
)";

if ($conn->query($sql)) {
    echo "creation successful" . "<br>";
} else {
    echo $conn->error . "<br>";
}

$sql = "INSERT INTO checkout(firstname, lastname, email, `address`, city, `state`, zip)
 VALUES ('$firstname', '$lastname', '$email', '$address', '$city', '$state', '$zip')";
if ($conn->query($sql)) {
    echo "insertion successful" . "<br>";
} else {
    echo $conn->error . "<br>";
}