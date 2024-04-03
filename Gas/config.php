<?php

$conn = mysqli_connect('localhost:3306', 'root', '', 'gas') or die('connection failed');


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($conn) {
        $query = "insert into userss( username,password) VALUES ('$username','$password')";
        $save = mysqli_query($conn, $query);
        if ($save) {
            header('location:dashboard.php');
        } else {
            echo "fail";
        }
    } else {
        echo "Fail";
    }
}
