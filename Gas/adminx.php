<?php
$connection = mysqli_connect("localhost:3306", "root", "", "gas");
if (!$connection) {
    echo 'not connected';
} else {
    //echo 'connected';
}

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['word'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if ($connection) {
        $query = "insert into gas_adminn(username,password) VALUES ('$username','$hashed_password')";
        $save = mysqli_query($connection, $query);
        if ($save) {
            header('location:admin.php');
        } else {
            echo "fail";
        }
    } else {
        echo "Fail";
    }
}

if (isset($_POST['order'])) {
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $shop = $_POST['shop'];
    $brand = $_POST['brand'];
    $size = $_POST['size'];
    if ($connection) {
        $query = "insert into orderss(phone,location,shop,brand,size) VALUES ('$phone','$location','$shop','$brand','$size')";
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
