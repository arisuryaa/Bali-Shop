<?php 

include "database.php";

// READ
function select($query) {
    global $db;
  
      $results = mysqli_query($db,$query);
      $rows = [];
      while($row = mysqli_fetch_assoc($results)) {
          $rows[] = $row;
      }
    return $rows;
  
  }
  

  function hapusBarang($get) {
    global $db;

    $idBarang = $get;

    $query = "DELETE FROM barang WHERE id_barang = $idBarang";

    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
  }

  function addBarang($post) {
    global $db;

    $nama = $post["namaBarang"];
    $harga = $post["hargaBarang"];
    $foto = uploadFile();
    $stock = $post["stokBarang"];
    $deskripsi = $post["deskripsiBarang"];
    $kategori = $post["kategori"];

    $query = "INSERT INTO barang VALUES (null, '$nama', '$harga', '$foto', '$stock', '$deskripsi', '$kategori')";

    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
  }

  function uploadFile() {
    $namaFile = $_FILES['foto_barang'] ['name'];
    $ukuranFile = $_FILES['foto_barang'] ['size'];
    $error = $_FILES['foto_barang'] ['error'];
    $tmpName = $_FILES['foto_barang'] ['tmp_name'];
  
    // Check File
    $extensiFileValid = ['jpg','png','jpeg'];
    $extensiFile = explode('.',$namaFile);
    $extensiFile = strtolower(end($extensiFile));
  
    // Check Extensi File
    if(!in_array($extensiFile,$extensiFileValid)) {
      echo "
      <script>
        alert('format file tidak sesuai');
        document.location.href = 'edit-barang.php';
      </script>
      ";
      die();
    } 
  
    // Check File Size (2MB)
    if($ukuranFile > 2048000) {
      echo "
        <script>
          alert('ukuran file terlalu besar, maximal 2MB')
          document.location.href = 'index.php';
        </script>
      ";
      die();
    }
  
    // Mengacak Nama File 
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $extensiFile;
  
    // pindahkan ke folder local untuk ditampilkan
    move_uploaded_file($tmpName,'assets/img/'.$namaFileBaru);  
    return $namaFileBaru;
  
  }

  function editBarang($post) {
    global $db;
    
    $id = $post["id_barang"];
    $nama = $post["nama_barang"];
    $harga = $post["harga_barang"];
    $fotoLama = $post["foto_barang"];
    $stock = $post["stock_barang"];
    $deskripsi = $post["deskripsi_barang"];
    $kategori = $post["kategori_barang"];

    if($_FILES['foto_barang']['error'] == 4) {
      $foto = $fotoLama;
    } else {
      $foto = uploadFile();
    }
  
    $query = "UPDATE barang SET 
    nama_barang = '$nama',
    harga_barang = '$harga',
    foto_barang = '$foto',
    stock_barang = '$stock',
    deskripsi_barang = '$deskripsi',
    kategori_barang = '$kategori'
    WHERE id_barang = '$id' ";
  
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

  }

?>