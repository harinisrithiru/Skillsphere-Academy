<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ss";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Form values
$l = $_POST['l'];      // location
$n = $_POST['n'];      // name
$dob = $_POST['dob'];  // date of birth
$g = $_POST['g'];      // gender
$y = $_POST['y'];      // year of study
$e = $_POST['e'];      // email
$p = $_POST['p'];      // phone
$c = $_POST['c'];      // college
$pe = $_POST['pe'];    // previous experience
$cn = $_POST['cn'];    // course name
$du = $_POST['du'];    // duration
$pm = $_POST['pm'];    // payment mode



// SQL insert
$sql = "INSERT INTO register 
(l, n, dob, g, y, e, p, c, pe, cn, du, pm)
VALUES 
('$l', '$n', '$dob', '$g', '$y', '$e', '$p', '$c', '$pe', '$cn', '$du', '$pm')";

if (mysqli_query($conn, $sql)) {
    echo "Registration completed successfully ";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>