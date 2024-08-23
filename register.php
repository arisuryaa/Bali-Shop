<?php 


include 'admin/config/app.php';
session_start();
if(isset($_COOKIE["login"])) {
    if($_COOKIE["login"] == "sukarya") {
    $_SESSION["Login"] = true;
      echo "
      <script>
        document.location.href = 'index.php';
      </script>
    ";
    }
}

if (isset($_POST["submit"])) {
    if (registerUser($_POST) > 0) {
        echo "
        <script>
        alert('akun berhasil dibuat');
          document.location.href = 'login.php';
        </script>
      ";
    } else {
        echo "
        <script>
        alert('akun gagal dibuat');
          document.location.href = 'register.php';
        </script>
      ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="stylelogin.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Register</title>
    <!-- 
    @media(max-width: 480px) {

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

        .foto {
            display: none;
        }

        .forme {
            border: none;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 50px;
            margin-left: 50px;
        }

        .form-isi1 h1 {
            font-size: 27px;
        }

        #karya {
            border: 1px solid #fafafa;
            background-color: #ebefef;
        }

    }  -->
    </style>
</head>

<body>
    <div class="containerRegister">
        <img src="asset/img/bg2.jpg" alt="">
        <form action="" method="POST">
            <div class="content">
                <div class="title">
                    <h1>Register Your Account</h1>
                    <p>Please NEfajdnfajdnfajdnfajdfn</p>
                </div>

                <div class="input">
                    <input type="email" placeholder="masukkan email" name="email">
                    <input type="text" placeholder="masukkan nama" name="nama">
                    <input type="password" placeholder="masukkan password" name="password">
                    <input type="password" placeholder="konfirmasi password" name="password2">
                </div>
                <button type="submit" name="submit"> Submit</button>
                <div class="regist">
                    <span>
                        Already have an account?
                        <a href="login.php">Login</a>
                    </span>
                </div>
            </div>
        </form>
    </div>
</body>

<?php include "admin/layout/footer.php"; ?>

</html>