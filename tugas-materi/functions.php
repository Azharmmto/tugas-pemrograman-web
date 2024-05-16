<?php 

  // menghubungkan file php dengan database
  $host_name = "localhost";
  $username = "root";
  $password = "";
  $db_name = "tugas_materi";

  $conn = mysqli_connect($host_name, $username, $password, $db_name);

// functions untuk menampilkan data
  function query($query){

    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while($row = mysqli_fetch_array($result)){

      $rows[] = $row;

    }

    return $rows;

  }


  // funtions tambah produk
  function tambah($post){

    global $conn;

    // ambil tiap-tiap data pada form
    $nama = htmlspecialchars($post["nama"]);
    $kategori = htmlspecialchars($post["kategori"]);
    $harga = htmlspecialchars($post["harga"]);
    $stok = htmlspecialchars($post["stok"]);
    $deskripsi = htmlspecialchars($post["deskripsi"]);
    $supplier = htmlspecialchars($post["supplier"]);

    // query insert
    $query_insert = "INSERT INTO barang(nama, kategori, harga, stok, deskripsi, supplier)
                     VALUES ('$nama', '$kategori', $harga, $stok, '$deskripsi', '$supplier')";

    mysqli_query($conn, $query_insert);

    return mysqli_affected_rows($conn);

  }


  // functions hapus
  function hapus($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);

  }


  // functions update
  function update($post){

    global $conn;

    // ambil tiap-tiap data pada form
    $id = $post["id"];
    $nama = htmlspecialchars($post["nama"]);
    $kategori = htmlspecialchars($post["kategori"]);
    $harga = htmlspecialchars($post["harga"]);
    $stok = htmlspecialchars($post["stok"]);
    $deskripsi = htmlspecialchars($post["deskripsi"]);
    $supplier = htmlspecialchars($post["supplier"]);

    // query update
    $query_update = "UPDATE barang 
                    SET nama = '$nama', kategori = '$kategori', harga = $harga, stok = $stok,
                    deskripsi = '$deskripsi', supplier = '$supplier' 
                    WHERE id = $id";

    mysqli_query($conn, $query_update);

    return mysqli_affected_rows($conn); 


  }

?>