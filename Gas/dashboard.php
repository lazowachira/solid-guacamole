<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ecommerce Dashboard</title>
  <script src="https://kit.fontawesome.com/8ebc7a45f6.js" crossorigin="anonymous"></script>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    transition: 0.5s all;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    list-style: none;
  }

  html,
  body {
    width: 100%;
    height: 100%;
  }

  body {
    font-family: "MuseoModerno";
    display: flex;
    overflow: hidden;
  }

  .button {
    color: #fff;
    background-color: #5443c3;
    margin-left: 30px;
  }

  button {
    cursor: pointer;
  }

  .sidebar {
    width: 250px;
    background: #5443c3;
    border-radius: 0 30px 30px 0;
    padding: 30px;
  }

  #mobile-menu {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    z-index: -8888;
  }

  #mobile-menu:checked+.sidebar {
    transform: translate(280px);
    z-index: 1;
  }

  #mobile-menu:checked+.sidebar+#mmenu {
    transform: translate(50px);
    color: #fff;
  }

  #mobile-menu:checked+.sidebar+#mmenu i:first-child {
    visibility: hidden;
    position: absolute;
    opacity: 0;
    top: -50%;
  }

  #mobile-menu:checked+.sidebar+#mmenu i:last-child {
    position: absolute;
    visibility: visible;
    opacity: 1;
    top: unset;
  }

  #mmenu i:last-child {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    top: -50%;
  }

  #mmenu {
    padding: 15px;
    opacity: 0;
    position: absolute;
    font-size: 22px;
  }

  .sidebar .logo {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
  }

  .sidebar .logo i,
  .sidebar .logo h2 {
    font-size: 24px;
    padding: 4px;
  }

  .sidebar .menu {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 70px 0;
  }

  .sidebar .menu ul li {
    padding: 13px 15px;
    padding-right: 30px;
    letter-spacing: 0.05px;
    margin: 15px 0;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
  }

  .sidebar .menu ul li:first-child,
  .sidebar .menu ul li:hover:not(:last-child) {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
  }

  .sidebar .menu ul li:last-child {
    position: absolute;
    bottom: 0;
  }

  .sidebar .menu ul li i {
    margin-right: 25px;
  }

  .content {
    flex: 1;
    padding: 35px 45px;
    overflow-x: overlay;
  }

  .content .top {
    display: flex;
    justify-content: space-between;
  }

  .content .top .search {
    position: relative;
  }

  .content .top .search input {
    background: #ddd9f2;
    padding: 10px 150px;
    border-radius: 6px;
    font-weight: 600;
    padding-left: 15px;
  }

  .content .top .search i {
    position: absolute;
    right: 10px;
    top: 25%;
    color: #5443c3;
    cursor: pointer;
  }

  .content .top .user i {
    padding: 0 10px;
    color: #5443c3;
    font-size: 20px;
    cursor: pointer;
  }

  .content .categories {
    width: 100%;
    display: flex;
  }

  .content #heading {
    padding-top: 30px;
    color: #5443c3;
  }

  .content .categories .category {
    width: 33.3%;
    color: #fff;
    background: #5443c3;
    margin-right: 15px;
    border-radius: 10px;
    padding: 14px;
  }

  .bg-modal {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0px;
    justify-content: center;
    align-items: center;
    display: none;
    left: 250px;
  }

  .modal-content {
    width: 100%;
    height: 100%;
    border-radius: 15px;
    text-align: center;
    padding: 10px;
    position: relative;
    display: flex;
  }

  .content .categories .category img {
    padding: 5px 15px;
    float: right;
    padding-bottom: 0;
    opacity: 0.6;
  }

  .content .all-products {
    width: 100%;
  }

  .content .all-products .title {
    padding: 15px 0;
    color: #5443c3;
  }

  .content .products {
    width: 100%;
    display: flex;
  }

  .content .product {
    width: 33.3%;
    position: relative;
    margin: 5px 5px;
    padding: 15px;
    background: #f6f5fb;
    text-align: center;
  }

  .content .product:hover::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(255, 255, 255, 0.6);
  }

  .content .product:hover .addbutton {
    visibility: visible;
    opacity: 1;
    bottom: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.5s;
    left: 50%;
  }

  .addbutton {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    transition: all 0.5s;
  }

  .addbutton button {
    padding: 5px 25px;
    color: #fff;
    border-radius: 5px;
    background: #5453c3;
  }

  .content .product img {
    padding: 10px;
    width: 100px;
    height: 130px;
  }

  .h1 {

    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    margin-right: 600px;
  }

  .content .product i {
    float: right;
    color: #b5b4ba;
  }

  .content .product .subtitle {
    display: flex;
    justify-content: space-between;
  }

  .content .product .price h1 {
    font-size: 20px;
  }

  /* Responsive */

  @media (max-width: 768px) {
    .sidebar {
      margin-left: -295px;
    }

    .content {
      width: 100%;
      margin: 5px;
    }

    .sidebar+#mmenu {
      transform: translate(50px);
    }

    .content .top {
      flex-direction: column;
    }

    .content .search {
      padding-bottom: 25px;
    }

    #mmenu {
      opacity: 1;
      visibility: visible;
      z-index: 2;
      color: #000;
      position: relative;
    }

    .content .products {
      display: block;
    }

    .content .product {
      width: 100%;
    }

    .content .top .search input {
      padding: 10px 45px;
    }

    .content .top .search i {
      top: 16%;
    }

    .content .categories {
      display: block;
    }

    .content .categories .category {
      width: 100%;
      margin-top: 5px;
    }

    .content .categories .category img {
      display: none;
    }

    .user {
      display: flex;
    }
  }

  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 1px solid #f1f1f1;
    z-index: 9;
    background: #333;
  }

  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: none;
    opacity: 0.7;
  }

  .form-container input[type=text],
  .form-container input[name=shop] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  .form-container input[name=brand] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  .form-container select[name=size] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  .form-container input[type=text]:focus,
  .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  .form-container .order {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
  }

  .form-container .cancel {
    background-color: red;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
  }

  .form-container .order:hover,
  .open-button:hover {
    opacity: 1;
  }







  :root {
    --blue: #3498db;
    --dark-blue: #2980b9;
    --red: #e74c3c;
    --dark-red: #c0392b;
    --black: #333;
    --white: #fff;
    --light-bg: #eee;
    --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
  }


  *::-webkit-scrollbar {
    width: 10px;
  }

  *::-webkit-scrollbar-track {
    background-color: transparent;
  }

  *::-webkit-scrollbar-thumb {
    background-color: var(--blue);
  }

  .btn,
  .delete-btn {
    width: 100%;
    border-radius: 5px;
    padding: 10px 30px;
    color: var(--white);
    display: block;
    text-align: center;
    cursor: pointer;
    font-size: 20px;
    margin-top: 10px;
  }

  .btn {
    background-color: var(--blue);
  }

  .btn:hover {
    background-color: var(--dark-blue);
  }

  .delete-btn {
    background-color: var(--red);
  }

  .delete-btn:hover {
    background-color: var(--dark-red);
  }

  .message {
    margin: 10px 0;
    width: 100%;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    background-color: var(--red);
    color: var(--white);
    font-size: 20px;
  }



  .container {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    padding: 20px;
    left: 1px;
  }

  .container .profile {
    padding: 20px;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    text-align: center;
    width: 400px;
    border-radius: 5px;
    margin-right: 100px;
  }

  .container .profile img {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 5px;
  }

  .container .profile h3 {
    margin: 5px 0;
    font-size: 20px;
    color: var(--black);
  }

  .container .profile p {
    margin-top: 20px;
    color: var(--black);
    font-size: 20px;
  }

  .container .profile p a {
    color: var(--red);
  }

  .container .profile p a:hover {
    text-decoration: underline;
  }

  .update-profile {
    min-height: 100vh;
    background-color: var(--light-bg);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .update-profile form {
    padding: 20px;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    text-align: center;
    width: 700px;
    text-align: center;
    border-radius: 5px;
  }

  .update-profile form img {
    height: 200px;
    width: 200p;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 5px;
  }

  .update-profile form .flex {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    gap: 15px;
  }

  .update-profile form .flex .inputBox {
    width: 49%;
  }

  .update-profile form .flex .inputBox span {
    text-align: left;
    display: block;
    margin-top: 15px;
    font-size: 17px;
    color: var(--black);
  }

  .update-profile form .flex .inputBox .box {
    width: 100%;
    border-radius: 5px;
    background-color: var(--light-bg);
    padding: 12px 14px;
    font-size: 17px;
    color: var(--black);
    margin-top: 10px;
  }

  @media (max-width:650px) {
    .update-profile form .flex {
      flex-wrap: wrap;
      gap: 0;
    }

    .update-profile form .flex .inputBox {
      width: 100%;
    }
  }

  .x {
    font-weight: bolder;
    position: relative;
    left: 1000px;
    height: 20px;
    width: 20px;
    top: 25px;
  }

  .h2 {
    font-size: 15px;
    color: white;
  }
</style>

<body>
  <input type="checkbox" id="mobile-menu" />

  <div class="sidebar">
    <div class="logo">
      <i class="fa fa-shopping-bag"></i>
      <h2>SMART GAS</h2>
    </div>
    <div class="menu">
      <ul>
        <li><i class="fa fa-home"></i> Home</li>
        <li><i class="fa-solid fa-location-dot"></i><button class="button" id="button1"> Maps</button></li>

        <li onclick="openForm()"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Order</li>
        <a href="login.php">
          <li><i class="fa fa-sign-out-alt"></i> Sign Out</li>
        </a>
      </ul>
    </div>
  </div>


  <div class="content">
    <div class="top">
      <div class="search">
      </div>
      <div class="user">

        </label>

        <h1 class="h1">Online Gas vendor system</h1>

      </div>
    </div>

    <div class="all-products">
      <div class="title">
        <h2>All Products</h2>
      </div>

      <h2>6kg</h2>

      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="12.jpg" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>TOTAL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.1,250</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="14.jpg" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>K-GAS</h5>
            </div>
            <div class="price">
              <h1>Ksh.1,150</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="21.JPG" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>PRO GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.1,000</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="23.jpg" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SEA GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.1000 </h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="20.jpg" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>AFRI-GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.1200</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="25.jpg" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SHELL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.1000</h1>
            </div>
          </div>
        </div>
      </div>

      <h3> 13 kg</h3>

      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.1jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>TOTAL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2900</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.2jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>K-GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2800</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.3jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>PRO GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2600</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.4jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SEA GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2500</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.5jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>AFRI GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2400</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="13.6.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SHELL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.2300</h1>
            </div>
          </div>
        </div>
      </div>

      <h3> 50kg </h3>

      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.1jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>TOTAL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.11,150</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.,2jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>K-GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.11,050</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.3jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>PRO GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.11,050</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="products">
        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.4jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SEA GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.10,400</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.5jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>AFRI GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.10,300</h1>
            </div>
          </div>
        </div>

        <div class="product">
          <i class="fa fa-shopping-cart"></i>
          <img src="50.6jpg.jfif" alt="" />
          <div class="subtitle">
            <div class="name">
              <h5>SHELL GAS</h5>
            </div>
            <div class="price">
              <h1>ksh.11,110</h1>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="form-popup" id="myForm">
      <form action="adminx.php" method="post" class="form-container">

        <h2 class="h2">To place payment,send money to 0793710788</h2>
        <label for="phone" style="color: white;"><b>Phone number</b></label>
        <input type="text" placeholder="Enter phone number" name="phone" id="phone" required>

        <label for="location" style="color: white;"><b>Enter your location</b></label>
        <input type="text" placeholder="Enter building Name" name="location" id="location" required>
        <div>
          <label for="shop" style="color: white;"><b>shop </b></label><br>
          <input name="shop" list="shop" placeholder="Choose shop " id="shop" required>
          <datalist>
            <option value="Juja Containers authorised gas ">
            <option value="ZTE Gas juja branch">
            <option value="Amex Gas Suppliers">
        </div>
        <div>
          <label for="brand" style="color: white;"><b>Brand</b></label><br>
          <input name="brand" list="brand" placeholder="Choose Brand" id="brand" required>
          <datalist>
            <option value="Total Gas">
            <option value="K- Gas">
            <option value="Shell Gas">

        </div>

        <div>
          <select name="size" id="size" placeholder="Choose gas size">
            <option>6kg</option>
            <option>13kg</option>
            <option>50kg</option>
          </select>

        </div>

        <button type="submit" class="order" name="order" onclick="passvalues()">Order</button>
        <button type="button" class="cancel" onclick="closeForm()">Close</button>
      </form>
    </div>
    <div class="bg-modal">

      <div class="modal-content">
        <a href="dashboard.php" class="x"><i class="fa-solid fa-x"></i></a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31912.592951841765!2d36.979088087912054!3d-1.1066570408714964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f461fa134a18d%3A0xca186f398d4798eb!2sJuja%20Containers.%20Authorised%20Gas%20Suppliers!5e0!3m2!1sen!2ske!4v1687775493092!5m2!1sen!2ske" width="400" height="900" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38614.070225093434!2d36.973252947148474!3d-1.1045960944000721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f463ea9435473%3A0x61b376163532696e!2sZTE%20Gas%20Juja%20Branch!5e0!3m2!1sen!2ske!4v1687776544722!5m2!1sen!2ske" width="400" height="900" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31912.592026946102!2d36.97908811083984!3d-1.1067429999999914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f47d1eac458d1%3A0xb3663cdcd373ac8d!2sAmex%20Gas%20Suppliers!5e0!3m2!1sen!2ske!4v1688984592766!5m2!1sen!2ske" width="400" height="900" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <script>
      document.getElementById('button1').addEventListener("click",
        function() {
          document.querySelector('.bg-modal').style.display = "flex";
        })
      var bgModal = document.getElementsByClassName("bg-modal")[0];
      var modalContent = document.getElementsByClassName("modal-content")[0];


      close.onclick = function() {
        bgModal.style.display = "none";
      }

      window.onclick = function(e) {
        if (e.target == modalContent) {
          bgModal.style.display = "none";
        }
      }

      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }

      function passvalues() {
        var phone = document.getElementById("phone").value;
        localStorage.setItem("phonevalue", phone);

        var location = document.getElementById("location").value;
        localStorage.setItem("locationvalue", location);

        var shop = document.getElementById("shop").value;
        localStorage.setItem("shopvalue", shop);

        var brand = document.getElementById("brand").value;
        localStorage.setItem("brandvalue", brand);

        var size = document.getElementById("size").value;
        localStorage.setItem("sizevalue", size);
        return false;

      }
    </script>
</body>

</html>