<!DOCTYPE html>

<head>

    <title>Login</title>
    <script src="https://kit.fontawesome.com/8ebc7a45f6.js" crossorigin="anonymous"></script>
</head>
<style>
    * {
        font-family: 'poppins', sans-serif;
    }

    body {
        background-image: url("6.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;

    }

    .box {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }

    .container {
        width: 350px;
        display: flex;
        flex-direction: column;
        padding: 0 15px 0 15px;

    }

    span {
        color: white;
        font-size: small;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        font-weight: bolder;
    }

    header {
        color: white;
        font-size: 38px;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        font-weight: bolder;
    }

    .input-field .input {
        height: 45px;
        width: 87%;
        border: none;
        border-radius: 30px;
        color: white;
        font-size: 15px;
        padding: 0 0 0 45px;
        background: rgba(255, 255, 255, 0.1);
        outline: none;
    }

    i {
        position: relative;
        top: -33px;
        left: 17px;
        color: #fff;
    }

    ::-webkit-input-placeholder {
        color: #fff;
    }

    .submit {
        border: none;
        border-radius: 30px;
        font-size: 15px;
        height: 45px;
        outline: none;
        width: 100%;
        color: black;
        background: rgba(255, 255, 255, 0.7);
        cursor: pointer;
        transition: .3s;
    }

    .submit:hover {
        box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    }

    .two-col {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        color: #fff;
        font-size: small;
        margin-top: 10px;
    }

    .one {
        display: flex;
    }

    label a {
        text-decoration: none;
        color: #fff;
    }

    .container .input-field i {
        position: absolute;
        right: 15px;
        color: #ccc;
        top: 300px;
        margin-left: 800px;
        cursor: pointer;
    }

    .container .input-field i.active::before {
        color: #333;
        content: "\f070";
    }
</style>

<body>
    <div class="box">
        <div class="container">
            <form action="usersx.php" method="post">
                <div class="top">
                    <header>Login</header>
                </div>

                <div class="input-field">
                    <input required type="text" class="input" name="username" placeholder="Username" id="">
                </div>

                <div class="input-field">
                    <input required type="Password" class="input" name="password" placeholder="Password" id="" minlength="8" maxlength="12">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="input-field">
                    <button class="submit" name="login">LOGIN</button>
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" name="" id="check">
                    <label for="check"> Remember Me</label>
                </div>

            </div>
        </div>
    </div>
    <script>
        const pswrdField = document.querySelector(".container input[type='password']"),
            toggleBtn = document.querySelector(".container i");

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