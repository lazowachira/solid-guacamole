<?php
session_start();
require "index.php";
$email = "";
$name = "";
$errors = array();
?>
<!DOCTYPE html>
<html>

<head>
  <title> SMART GAS</title>
  <script src="https://kit.fontawesome.com/8ebc7a45f6.js" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-image: url(5.jpg);
    background-repeat: no-repeat;
    background-size: 1366px 768px;

  }

  .logo {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: white;
    height: 400px;
    width: 500px;
    font-size: x-large;
  }

  .h2 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 900;
    color: rgb(219, 199, 199);
    height: 100px;
    text-align: center;
    font-size: x-large;
    left: 400px;
    color: white;
  }

  .form {
    width: 250px;
    height: 200px;
    background: linear-gradient(to top, rgba(175, 152, 152, 0.8)50%, rgba(175, 159, 159, 0.8)50%);
    position: absolute;
    top: 200px;
    left: 870px;
    border-radius: 10px;
    padding: 25px;
  }

  .form h1 {
    font-size: x-large;
    font-weight: bold;
    height: 30px;
    margin-top: 20px;
  }

  .form input {
    width: 240px;
    height: 35 px;
    background: transparent;
    border-bottom: 1px solid orange;
    border-top: none;
    border-right: none;
    border-left: none;
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
  }

  .btnn {
    background-color: gray;
    border: 1px white;
    border-radius: 30px;
    text-decoration: none;
    padding: 10px 28px;
    color: white;
    margin-top: 10px;
    display: inline-block;
  }

  .bg-modal {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
  }

  .modal-content {
    width: 300px;
    height: 400px;
    background: darkslategray;
    border-radius: 4px;
    text-align: center;
    padding: 10px;
    position: relative;
  }

  .par {
    color: white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

  }

  form .txt_field {
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;

  }

  .txt_field input {
    width: 100%;

    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    ;

  }

  .pass {
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
  }

  .pass:hover {
    text-decoration: underline;
  }

  .login {
    background-color: grey;
    cursor: pointer;
    font-weight: bolder;
    border: 1px solid white;
    border-radius: 30px;
    text-decoration: none;
    padding: 10px 28px;
    color: white;
    display: inline-block;
    margin-right: 80px;
    margin-bottom: 50px;
  }

  .login:hover {
    border-color: #2691d9;
    transition: .5s;
  }

  .signup_link {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }

  .signup_link a {
    color: #2691d9;
    text-decoration: none;
  }

  .signup_link a:hover {
    text-decoration: underline;
  }

  .bg-modal .modal-content i {
    position: absolute;
    right: 25px;
    color: #ccc;
    margin-top: 20px;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .modal-content .eye i {
    position: absolute;
    right: 20px;
    color: #ccc;

    margin-top: -95px;
    cursor: pointer;
  }

  .modal-content i.active::before {
    color: #333;
    content: "\f070";
  }

  .txt_field .form-control {
    color: black;
    width: 300px;
  }
</style>

<body style="background-color: rgb(192, 108, 108);">
  <div class="main">
    <div class="navbar">
      <div class="icon">
        <h2 class="logo">SMART GAS</h2>
        <div class="form">
          <h2>Login Here</h2>

          <a href="adminlogin.php"> <button type="submit" class="btnn" name="admin" value="Login">ADMIN</button> </a>
          <a href="userlogin.php"><button type="submit" class="btnn" name="user" value="Login">USER</button></a>
          <p>don't have an account? <a href="#" id="button" class="button">register now</a></p>
        </div>

        <h2 class="h2">ONLINE GAS VENDOR SYSTEM</h2>
      </div>

      <div class="content">
        <p class="par">We strive to meet and exceed our customers expectations and deliveryservices
          <br> We are a well organised and comfortable place to shop and buy gases at affordable prices
        </p>
      </div>
      <div class="bg-modal">
        <div class="modal-content">
          <form action="index.php" method="post">
            <div class="center">
              <h1>Register</h1>
              <div class="txt_field">

                <input class="form-control" type="email" name="username" placeholder="Email Address" required>
              </div>
              <div class="txt_field">
                <input class="form-control" type="password" name="password" placeholder="Password" required minlength="8" maxlength="12">
              </div>
              <i class="fas fa-eye"></i>
              <div class="txt_field">
                <div class="eye">
                  <input class="form-control" type="password" name="repeat_password" placeholder="Confirm password" required minlength="8" maxlength="12">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
              <button class="login" name="login">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      document.getElementById('button').addEventListener("click",
        function() {
          document.querySelector('.bg-modal').style.display = "flex";
        })
      var bgModal = document.getElementsByClassName("bg-modal")[0];
      var modalContent = document.getElementsByClassName("modal-content")[0];


      close.onclick = function() {
        bgModal.style.display = "none";
      }

      window.onclick = function(e) {
        if (e.target == bgModal) {
          bgModal.style.display = "none";
        }
      }
      const pswrdField = document.querySelector(".txt_field input[type='password']"),
        toggleBtn = document.querySelector(".txt_field i");

      toggleBtn.onclick = () => {
        if (pswrdField.type == "password") {
          pswrdField.type = "text";
          toggleBtn.classList.add("active");
        } else {
          pswrdField.type = "password";
          toggleBtn.classList.remove("active");
        }
      }
    </script>
</body>

</html>