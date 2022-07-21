<?php
session_start();
require '../../controller/controller.php';



if (isset($_POST["login"])) {

    $username = $_POST["nama"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE nama ='$username'");
    //cek username
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        //var_dump($row);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"]= true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearKu Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Inter:wght@800&display=swap"
          rel="stylesheet">
    <!-- css  -->
    <link rel="stylesheet" href="../admin/assets/css/login.css">
</head>

<body class="" style="background-color: #22283E;">

<div class="blur">
    <div class="container p-5 kotak">
        <div class=" bg-light overflow-hidden rounded-3 ">
            <div class="row">

                <div class="col-lg-5 d-flex justify-content-center align-items-center"
                     style="background-color: #C10000;">
                    <h1 style="color:white ; font-family: 'Caveat Brush', cursive;">GearKu.</h1>
                </div>

                <div class="col-lg-7 p-5">
                    <h5 class="mb-5" style="font-family: 'Inter', sans-serif; font-weight: 800;">
                        <?php
                        //ubah timezone menjadi jakarta
                        date_default_timezone_set("Asia/Jakarta");

                        //ambil jam dan menit
                        $jam = date('H:i');


                        //atur salam menggunakan IF
                        if ($jam > '05:30' && $jam < '11:00') {
                            $waktu = 'Pagi';
                            echo "<span class='auto-input'></span>";
                        } elseif ($jam >= '11:00' && $jam < '15:00') {
                            $waktu = 'Siang';
                            echo "<span class='auto-input'></span>";
                        } elseif ($jam < '18:00') {
                            $waktu = 'Sore';
                            echo "<span class='auto-input'></span>";
                        } else {
                            $waktu = 'Malam';
                            echo "<span class='auto-input'></span>";
                        }
                        ?>
                    </h5>
                    <?php if (isset($error)) : ?>

                        <p style="color: red;"> Username / Password Salah</p>

                    <?php endif; ?>
                    <form action="" method="POST" class="row g-3">
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Ingat saya?
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-dark">Masuk</button>
                            <a href="../../" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-danger">Kembali</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Selamat <?= $waktu?>", "GearKu Adalah GearMu"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });

    </script>


</body>

</html>