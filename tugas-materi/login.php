<?php 

  // cek apakah tombol login sudah di tekan atau belum
  if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek apakah username dan password sudah di isi atau belum
    // if(empty($username) || empty($password)){
    //   $pesan_error = "Username dan Password harus di isi";
    // }
    
    if($username === "admin" && $password === "admin123"){

      header("Location: index.php");

      exit;

    }else if($username !== "admin" && $password !== "admin123"){
     
      $usernamePass_eror = true;

    }else if($password !== "admin123"){

      $password_eror = true;

    }else if($username !== "admin"){

      $username_eror = true;

    }

  }
 ?>
<?php 

  include "functions.php";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Besar Materi Mata Kuliah Pemrogrman Web</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      form button {
        width: 90%;
      } 
    </style>
  </head>
  <body class="bg-body-secondary">
    
    <div class="container mt-5">
      <div class="col-md-4 m-auto bg-white p-4 rounded-3 shadow">
        <h2 class="text-center">Login Aplikasi</h2>

        <!-- cek validasi username dan password -->
        <?php if(isset($username_eror)) : ?>
          
          <div class="alert alert-danger m-auto mt-2 text-center" role="alert" style="width: 250px">
            <span>Username salah, perikasa kembali username Anda.</span>
          </div>

        <?php elseif(isset($password_eror)) : ?>
          
          <div class="alert alert-danger m-auto mt-2 text-center" role="alert" style="width: 250px">
            <span>Password salah, perikasa kembali password Anda.</span>
          </div>

        <?php elseif(isset($usernamePass_eror)) : ?>

          <div class="alert alert-danger m-auto mt-2 text-center" role="alert" style="width: 250px">
            <span>Username dan Password salah, perikasa kembali username dan password Anda.</span>
          </div>

        <?php endif ?>

        <form action="" method="post" class="p-2">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Masukkan username..." required autofocus />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
            placeholder="Masukkan password..." required />
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary rounded-pill" name="login">LOGIN</button>
          </div>
        </form>
      </div>
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>