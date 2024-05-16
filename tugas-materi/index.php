<?php 

  include "functions.php";

  $barang = query("SELECT * FROM barang"); 

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Pemrogrman Web Materi | Azhar</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      table tbody tr td:nth-last-child(1) img{
        cursor: pointer;
      }

      a{
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <nav class="navbar bg-info-subtle">
      <div class="container-fluid">
        <div class="col d-flex align-items-center">
          <img src="img/logo-admin.png" alt="Logo Administrator" style="width: 25px;" class="me-1 ms-2"/>
          <a class="navbar-brand fs-6" href="#">Administrator</a>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <h1 class="fs-4">Daftar barang yang tersedia</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-body-tertiary mt-3 p-3">
      <div class="container">
        <a href="tambah.php">
          <button class="btn btn-success mb-3 d-flex align-items-center p-2">
            <img src="img/tambah-logo-white.png" alt="Logo Tambah" width="20px" class="me-1" />
            Tambah Produk
          </button>
        </a>

        <table class="table table-bordered table-hover">
          <thead class="table-primary text-center">
            <tr class="align-middle">
              <th>No</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Deskripsi</th>
              <th>Supplier</th>
              <th>Tanggal Ditambahkan</th>
              <th>Action</th>
            </tr>
          </thead>

          <?php $i = 1; ?>
          <tbody>

            <?php foreach($barang as $barangs) : ?>
              <tr class="text-center align-middle">
                <td><?= $i; ?></td>
                <td><?= $barangs["nama"]; ?></td>
                <td><?= $barangs["kategori"]; ?></td>
                <td><?= $barangs["harga"]; ?></td>
                <td><?= $barangs["stok"]; ?></td>
                <td><?= $barangs["deskripsi"]; ?></td>
                <td><?= $barangs["supplier"]; ?></td>
                <td><?= $barangs["tanggal_ditambahkan"]; ?></td>

                <td style="width: 100px;">
                  <a href="update.php?id=<?= $barangs["id"] ?>">
                    <img src="img/logo-pen.png" alt="Logo edit barang" title="Edit barang" width="30px" style="margin-right: 10px;" />
                  </a>

                  <a href="hapus.php?id=<?= $barangs["id"]; ?>" 
                  onclick="return confirm('Yakin ingin menghapus?') ">
                    <img src="img/logo-delete.png" alt="Logo hapus barang" title="Hapus barang" width="30px"/>
                  </a>
                </td>

              <?php $i++ ?>
            <?php endforeach ?>
          </tbody>

        </table>
      </div>
    </div>



    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
