<?php
$link = mysqli_connect("localhost", "root", "", "laravel");

if ($link === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO crud (name, emial, phone, message ) VALUES ('Peter', 'Parker', 'male', 'New York', 'spider@man.bg')";
if (mysqli_query($link, $sql)) {
    echo "Record inserted succesfully.";
} else {
    echo "ERORR: Could not able to execute $sql" . mysqli_error($link);
}

mysqli_close($link);
