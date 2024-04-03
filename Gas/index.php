<?php


$connection = mysqli_connect("localhost:3306", "root", "", "gas");
if (!$connection) {
    echo 'not connected';
} else {
    //echo 'connected';
}

if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];
    if ($connection) {
        $query = "insert into register( email,password,repeat_password) VALUES ('$username','$password','$passwordRepeat')";
        $save = mysqli_query($connection, $query);
        if ($save) {
            header('location:userlogin.php');
        } else {
            echo "fail";
        }
    } else {
        echo "Fail";
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['repeat_password']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM register WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO register ( email, password, code, status)
                        values('$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }
}
