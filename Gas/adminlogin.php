<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <title>Login Form | CodingLab</title>

</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    background-image: url("6.jpg");
    background-repeat: no-repeat;
    background-size: 1366px 768px;
  }

  .container {
    max-width: 440px;
    padding: 0 20px;
    margin: 170px auto;

  }

  .wrapper {
    width: 100%;
    background: linear-gradient(to top, rgba(175, 152, 152, 0.8)50%, rgba(175, 159, 159, 0.8)50%);
    border-radius: 5px;
    box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
  }

  .wrapper .title {
    height: 90px;
    background: #16a085;
    border-radius: 5px 5px 0 0;
    color: #fff;
    font-size: 30px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .wrapper form {
    padding: 30px 25px 25px 25px;
  }

  .wrapper form .row {
    height: 45px;
    margin-bottom: 15px;
    position: relative;
  }

  .wrapper form .row input {
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 60px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  form .row input:focus {
    border-color: #16a085;
    box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
  }

  form .row input::placeholder {
    color: #999;
  }

  .wrapper form .row i {
    position: absolute;
    width: 47px;
    height: 100%;
    color: #fff;
    font-size: 18px;
    background: #16a085;
    border: 1px solid #16a085;
    border-radius: 5px 0 0 5px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .wrapper form .pass {
    margin: -8px 0 20px 0;
  }

  .wrapper form .pass a {
    color: #141414;
    font-size: 17px;
    text-decoration: none;
  }

  .wrapper form .pass a:hover {
    text-decoration: underline;
  }

  .wrapper form .button input {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding-left: 0px;
    background: #16a085;
    border: 1px solid #16a085;
    cursor: pointer;
  }

  form .button input:hover {
    background: #12876f;
  }

  .btnn {
    background-color: #12876f;
    border: 1px white;
    border-radius: 30px;
    text-decoration: none;
    padding: 10px 28px;
    color: white;
    margin-top: 10px;
    display: inline-block;
  }
</style>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Login</span></div>
      <form action="adminx.php" method="post">
        <div class="row">
          <i class="fas fa-user"></i>
          <input name="user" type="text" placeholder="Username" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="word" type="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btnn" name="login" value="Login">Login</button>
    </div>
    </form>
  </div>
  </div>

</body>

</html>