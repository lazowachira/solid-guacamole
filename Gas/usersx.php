<?php
$connection = mysqli_connect("localhost:3306", "root", "", "gas");
if (!$connection) {
    echo 'not connected';
} else {
    //echo 'connected';
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if ($connection) {
        $query = "insert into gas_userss(username,password) VALUES ('$username','$hashed_password')";
        $save = mysqli_query($connection, $query);
        if ($save) {
            header('location:dashboard.php');
        } else {
            echo "fail";
        }
    } else {
        echo "Fail";
    }
}
