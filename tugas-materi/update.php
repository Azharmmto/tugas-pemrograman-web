  <?php

  require "functions.php";

  // ambil dproduk berdasarkan id
  $id = $_GET["id"];

  $result = query("SELECT * FROM barang WHERE id = $id")[0];


  // cek apakah tombol update sudah di click
  if(isset($_POST["update"])){

    // cek apakah data berhasil di update
    update($_POST) > 0 ? $produkDiUpdate = true : $produkDiUpdate = false;

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

    <?php if(isset($produkDiUpdate)) : ?>

      <div class="alert alert-success text-center mx-auto mt-5 p-4 position-absolute top-0 start-50 translate-middle" role="alert" style="width: 350px;" id="alert-berhasil">
        <h1 class="fs-5">Produk BERHASIL diupdate!</h1>

        <div class="text-end">
          <a href="index.php">
            <button type="button" class="btn btn-success">OK</button>
          </a>
        </div>
      </div>

    <?php endif ?>

    <div class="col-md-7 mx-auto p-3 bg-white rounded-3 shadow">
      <h1 class="fs-3">Update Produk</h1>

      <form action="" method="post">

        <!-- ambil id -->
        <input type="hidden" name="id" value="<?= $result["id"] ?>" />

        <div class="mb-3">
          <!-- nama barang -->
          <label for="nama-produk" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama-produk" placeholder="Masukkan nama produk..." required name="nama" value="<?= $result["nama"] ?>" />
        </div>

        <!-- kategori -->
        <div class="mb-3">
          <label for="kategori-produk" class="form-label">Kategori Produk</label>
          <select class="form-select" aria-label="Default select example" id="kategori-produk" name="kategori" >
            <option selected>Pilih Kategori...</option>

            <option value="Elektronik" <?= $result["kategori"] === "Elektronik" ? "selected" : "" ?>>Elektronik</option>

            <option value="Buku" <?= $result["kategori"] === "Buku" ? "selected" : "" ?>>Buku</option>

            <option value="Alat Tulis" <?= $result["kategori"] === "Alat Tulis" ? "selected" : "" ?>>Alat Tulis</option>

            <option value="Pakaian dan Aksesoris" <?= $result["kategori"] === "Pakaian dan Aksesoris" ? "selected" : "" ?>>Pakaian dan Aksesoris</option>
          </select>
        </div>

        <!-- harga barang -->
        <div class="mb-3">
          <label for="harga-produk" class="form-label">Harga Produk</label>
          <input type="number" class="form-control" id="harga-produk" placeholder="Masukkan harga produk..." required name="harga" value="<?= $result["harga"] ?>" />
        </div>

        <!-- stok barang -->
        <div class="mb-3">
          <label for="stok-produk" class="form-label">Stok Produk</label>
          <input type="number" class="form-control" id="stok-produk" placeholder="Masukkan stok produk..." required name="stok" value="<?= $result["stok"] ?>" />
        </div>

        <div class="form-floating">
          <textarea class="form-control" placeholder="Masukan deskripsi Produk" id="deskripsi-produk" style="height: 100px" name="deskripsi"><?= $result["deskripsi"] ?></textarea>
          <label for="deskripsi-produk">Deskripsi Produk</label>
        </div>

        <div class="mb-3 mt-3">
          <label for="supplier-barang" class="form-label">Supplier</label>
          <input type="text" class="form-control" id="supplier-barang" placeholder="Masukkan supplier produk..." name="supplier" value="<?= $result["supplier"] ?>" />
        </div>

        <div class="d-flex justify-content-between">
          <a href="index.php" class="text-start">
            <button type="button" class="btn btn-secondary">Kembali</button>
          </a>
          <div>
            <button type="submit" class="btn btn-success" name="update">Update Produk</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>