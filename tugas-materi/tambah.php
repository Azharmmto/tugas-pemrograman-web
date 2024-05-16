<?php

  require "functions.php";

  // cek apakah tombol submit sudah di click
  if(isset($_POST["tambah"])){

    // ternary operator
    tambah($_POST) > 0 ? $data_ditambahkan = true : $data_gagalDitambahkan = true;

  }

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>

  <!-- css bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
    a{
      text-decoration: none;
    }
  </style>
<body class="bg-body-secondary">

  <div class="container mt-3 pb-4 position-relative">

    <?php if(isset($data_ditambahkan)) : ?>

      <div class="alert alert-success text-center mx-auto mt-5 p-4 position-absolute top-0 start-50 translate-middle" role="alert" style="width: 350px;" id="alert-berhasil">
        <h1 class="fs-5">Produk BERHASIL ditambahkan!</h1>

        <div class="text-end">
          <button class="btn btn-info" id="tambah-data-lagi">Tambah data lagi</button>
          <a href="index.php">
            <button type="button" class="btn btn-success">OK</button>
          </a>
        </div>
      </div>

      
    <?php elseif(isset($data_gagalDitambahkan)) : ?>

      <div class="alert alert-danger mx-auto mt-5 p-2 position-absolute top-0 start-50 translate-middle" role="alert" style="width: 350px;" id="alertGagal">
        <h1 class="fs-5 text-center">Data GAGAL ditambahkan!</h1>
        <p>Periksa kembali produk yang anda tambahkan.</p>

        <div class="text-end">
          <button class="btn btn-warning" id="btnGagal">OK</button>
        </div>
      </div>

    <?php endif ?>

    <div class="col-md-7 mx-auto p-3 bg-white rounded-3 shadow">
      <h1 class="fs-3">Tambah Produk</h1>

      <form action="" method="post">
        <div class="mb-3">
          <!-- nama barang -->
          <label for="nama-produk" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama-produk" placeholder="Masukkan nama produk..." required name="nama">
        </div>

        <!-- kategori -->
        <div class="mb-3">
          <label for="kategori-produk" class="form-label">Kategori Produk</label>
          <select class="form-select" aria-label="Default select example" id="kategori-produk" name="kategori">
            <option selected>Pilih Kategori...</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Buku">Buku</option>
            <option value="Alat Tulis">Alat Tulis</option>
            <option value="Pakaian dan Aksesoris">Pakaian dan Aksesoris</option>
          </select>
        </div>

        <!-- harga barang -->
        <div class="mb-3">
          <label for="harga-produk" class="form-label">Harga Produk</label>
          <input type="number" class="form-control" id="harga-produk" placeholder="Masukkan harga produk..." required name="harga" />
        </div>

        <!-- stok barang -->
        <div class="mb-3">
          <label for="stok-produk" class="form-label">Stok Produk</label>
          <input type="number" class="form-control" id="stok-produk" placeholder="Masukkan stok produk..." required name="stok" />
        </div>

        <div class="form-floating">
          <textarea class="form-control" placeholder="Masukan deskripsi Produk" id="deskripsi-produk" style="height: 100px" name="deskripsi"></textarea>
          <label for="deskripsi-produk">Deskripsi Produk</label>
        </div>

        <div class="mb-3 mt-3">
          <label for="supplier-barang" class="form-label">Supplier</label>
          <input type="text" class="form-control" id="supplier-barang" placeholder="Masukkan supplier produk..." name="supplier">
        </div>

        <div class="d-flex justify-content-between">
          <a href="index.php" class="text-start">
            <button type="button" class="btn btn-secondary">Kembali</button>
          </a>
          <div>
            <button type="reset" class="btn btn-info me-1">Batal</button>
            <button type="submit" class="btn btn-success" name="tambah">Tambah Produk</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- my js -->
  <script>

    let tambahDataLagi = document.getElementById("tambah-data-lagi");
    let alertBerhasil = document.getElementById("alert-berhasil");

    let btnGagal = document.getElementById("btnGagal");
    let alertGagal = document.getElementById("alertGagal");

    // jika button alert tambah daa di klik
    tambahDataLagi.addEventListener("click", function(){
      alertBerhasil.style.display = "none";
    });

    // jika button alert gagal di klik
    btnGagal.addEventListener("click", function(){
      alertGagal.style.display = "none";
    });

  </script>
</body>
</html>