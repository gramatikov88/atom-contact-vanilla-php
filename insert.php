<?php
$link = mysqli_connect("localhost", "root", "", "laravel");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

$sql = "INSERT INTO crud (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if (mysqli_query($link, $sql)) {
    echo "Records added";
} else {
    echo "Error" . mysqli_error($link);
}

mysqli_close($link);
