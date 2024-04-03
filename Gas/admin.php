<?php

require_once('adminx.php');
$query = "select * from orderss";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <script src="https://kit.fontawesome.com/8ebc7a45f6.js" crossorigin="anonymous"></script>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

  }

  body {
    background: rgb(233, 233, 233);
  }

  .container {
    display: flex;
    width: 1200px;
    margin: auto;

  }

  nav {
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 280px;
    height: 110vh;
    background: beige;

  }

  .navbar {
    width: 80%;
    margin: 0 auto;

  }

  .logo {
    margin: 2rem 0 1rem 0;
    padding-bottom: 3rem;
    display: flex;
    align-items: center;
  }

  .logo img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .logo h1 {
    margin-left: 1rem;
    text-transform: uppercase;
  }

  ul {
    margin: 0 auto;
  }

  li {
    padding-bottom: 2rem;
  }

  li a {
    font-size: 16px;
    color: rgb(85, 83, 83);
  }

  nav i {
    width: 50px;
    font-size: 18px;
    text-align: center;
  }

  .logout {
    position: absolute;
    bottom: 20px;
  }

  /* Main Section */
  .main {
    width: 100%;
  }

  .main-top {
    width: 100%;
    background: #fff;
    padding: 10px;
    text-align: center;
    font-size: 18px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgb(43, 43, 43);
  }

  .main-body {
    padding: 10px 10px 10px 20px;
  }

  h1 {
    margin: 20px 10px;
  }

  .container {
    width: auto;

  }

  .container table {
    width: 100%;
    margin: auto;
    border-collapse: collapse;
    font-size: 21px;

  }

  .container table th {
    background: transparent;
    color: black;
  }

  .container table td {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  select {
    width: 200px;
    padding: 0.5rem 0;
    font-size: 17px;
  }

  .exp {
    height: 40px;
    width: 90px;
    margin-left: 1000px;
    background-color: black;
    border: 2px white;
    border-radius: 30px;
    padding: 10px 20px;
    color: white;
  }
</style>

<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="6.jpg" alt="">
          <h1>SMART GAS</h1>
        </div>

        <ul>
          <li><a href="#">
              <i class="fas fa-user"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li><a href="#">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Orders</span>
          </li>
          <li><a href="#">
              <i class="fab fa-dochub"></i>
              <span class="nav-item">Location</span>
            </a>
          </li>
          <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a>
          </li>
          <li><a href="#">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a>
          </li>
          <li><a href="login.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        YOU ORDER, WE DELIVER.
      </div>
      <div class="main-body">
        <table bgcolor="transparent" width="700px">
          <tr>
            <th>Phone number</th>
            <th>Location</th>
            <th>shop</th>
            <th>brand</th>
            <th>Size</th>

          </tr>
          <tr bgcolor="transparent">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['location']; ?></td>
              <td><?php echo $row['shop']; ?></td>
              <td><?php echo $row['brand']; ?></td>
              <td><?php echo $row['size']; ?></td>


          </tr>
        <?php
            }
        ?>
        </tr>
        </table>
        <a href="excel.php"><button class="exp">Export</button></a>
      </div>

      </form>

      <script>
        document.getElementById("phon").innerHTML = localStorage.getItem("phonevalue");
        document.getElementById("loc").innerHTML = localStorage.getItem("locationvalue");
        document.getElementById("sho").innerHTML = localStorage.getItem("shopvalue");
        document.getElementById("bran").innerHTML = localStorage.getItem("brandvalue");
        document.getElementById("siz").innerHTML = localStorage.getItem("sizevalue");
      </script>

</body>

</html>
<?php

if (isset($_POST["submit"])) {


  // Authorisation details.
  $username = "your username";
  $hash = "your api hash key";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $_POST["Code"] . $_POST["num"]; // A single number or a comma-seperated list of numbers
  $message = $_POST["message"];
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);

  if (!$result) {
?>
    <script>
      alert('message not sent!')
    </script>
  <?php
  } else {
    #print the final result
    echo $result;
  ?>
    <script>
      alert('message sent!')
    </script>
<?php
  }
}
?>