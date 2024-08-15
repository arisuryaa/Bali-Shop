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


    $query = "INSERT INTO barang VALUES (null, '$nama', '$harga', '$foto[0]','$foto[1]','$foto[2]','$foto[3]','$foto[4]', '$stock', '$deskripsi', '$kategori')";

    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
  }

  function uploadFile() {
    $namaFile = $_FILES['foto_barang']['name'];
    $totalFiles = count($namaFile);
    $fileFoto = [];

    if ($totalFiles == 5) {
        for($i = 0; $i < $totalFiles; $i++) {
            $ukuranFile = $_FILES['foto_barang']['size'][$i];
            $nama = $_FILES['foto_barang']['name'][$i];
            $error = $_FILES['foto_barang']['error'][$i];
            $tmpName = $_FILES['foto_barang']['tmp_name'][$i];

            $extensiFileValid = ['jpg', 'png', 'jpeg'];
            $extensiFile = explode('.', $nama);
            $extensiFile = strtolower(end($extensiFile));

            if (!in_array($extensiFile, $extensiFileValid)) {
                echo "
                <script>
                    alert('Format file tidak sesuai');
                    document.location.href = 'index.php';
                </script>
                ";
                die();
            }

            // Check File Size (2MB)
            if ($ukuranFile > 2048000) {
                echo "
                <script>
                    alert('Ukuran file terlalu besar, maksimal 2MB');
                    document.location.href = 'index.php';
                </script>
                ";
                die();
            }

            $namaFileBaru = uniqid();
            $namaFileBaru .= ".";
            $namaFileBaru .= $extensiFile;

            // Pindahkan ke folder local untuk ditampilkan
            move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
            array_push($fileFoto, $namaFileBaru);
        }


    } else {
        echo "
        <script>
            alert('Foto harus tepat 5!');
            document.location.href = 'index.php';
        </script>
        ";
        die();
    }

    return $fileFoto;
}


  function editBarang($post) {
    global $db;
    
    $id = $post["id_barang"];
    $nama = $post["nama_barang"];
    $harga = $post["harga_barang"];
    $jsonArray = $_POST['foto_barang_lama'];
    $fotoBarangLama = json_decode($jsonArray, true);
    $stock = $post["stock_barang"];
    $deskripsi = $post["deskripsi_barang"];
    $kategori = $post["kategori_barang"];

    // var_dump($fotoBarangLama);
    // var_dump($jsonArray);
    
    if($_FILES['foto_barang']['error'][0] == 4) {
      $foto = $fotoBarangLama;
    } else {
      $foto = uploadFile();
    }

    $query = "UPDATE barang SET 
    nama_barang = '$nama',
    harga_barang = '$harga',
    foto_barang = '$foto[0]',
    foto_barang2 = '$foto[1]',
    foto_barang3 = '$foto[2]',
    foto_barang4 = '$foto[3]',
    foto_barang5 = '$foto[4]',
    stock_barang = '$stock',
    deskripsi_barang = '$deskripsi',
    kategori_barang = '$kategori'
    WHERE id_barang = '$id' ";
  
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

  }

  function register($post) {
    global $db;

    $username = $post["username"];
    $password = $post["password"];
    $password2 = $post["password2"];

    $usernameSama = select("SELECT username FROM akun WHERE username = '$username' ");
    if ($usernameSama) {
      echo "<script>alert('username sudah terdaftar!');
      document.location.href = 'register.php';
    </script>";
    die();
    }

    if ($password != $password2) {
      echo "<script>alert('konfirmasi password anda tidak sesuai!');
        document.location.href = 'register.php';
      </script>";
      die();
    } 

   $hashPassword = password_hash($password,PASSWORD_DEFAULT);


    $query = "INSERT INTO akun VALUES(null, '$username', '$hashPassword')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function login($post) {
  global $db;
  $username = $post["username"];
  $password = $post["password"];

  // echo $post["remember"];
  $data = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username' ");

  if(mysqli_num_rows($data) === 1) {
      $row = mysqli_fetch_assoc($data);
      if (password_verify($password,  $row["password"])) {
             $_SESSION["Login"] = true;
             $_SESSION["username"] = $username;
             
             if(isset($post["remember"]) == "on") {
            setcookie("username",$username, time() + 60 * 60 * 24 * 7);
            setcookie("login","admin", time() + 60 * 60 * 24 * 7);
          }
          echo "<script>
          document.location.href = 'index.php';
      </script>";
      }  
  } else {
    echo "<script>alert('Password/Username Salah');
    document.location.href = 'login.php';
  </script>";
  }  


}

function searchBarang($keyword) {
  global $db;

  $query = "SELECT * FROM barang WHERE nama_barang LIKE ? OR deskripsi_barang LIKE ? OR kategori_barang LIKE ?";
  
  $stmt = $db->prepare($query);
  
  $keywordParam = "%$keyword%";
  
  $stmt->bind_param("sss", $keywordParam, $keywordParam, $keywordParam);
  
  $stmt->execute();
  
  $result = $stmt->get_result();
  
  $rows = [];
  while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
  }
  
  $stmt->close();
  
  return $rows;
  
}

function pesanan($post) {
  global $db;

  // var_dump(count($post["catatan"]));

  $namaPemesan = $post["nama"];
  $nomorTelpon = $post["telpon"];
  $catatan = $post["catatan"] ;
  $namaBarang = $post["namaBarang"];
  $quantity = $post["quantityBarang"];
  $hargaBarang = $post["hargaBarang"];
  $subtotal = $post["subtotal"];


  $query = "INSERT INTO pesanan VALUES (null, '$namaPemesan', '$nomorTelpon', '$catatan','$namaBarang','$quantity','$hargaBarang','$subtotal','Diproses')";

  mysqli_query($db,$query);
  return mysqli_affected_rows($db);
}

function registerUser($post) {
  global $db;

  $email = $post["email"];
  $nama = $post["nama"];
  $password = $post["password"];
  $password2 = $post["password2"];

  $emailSama = select("SELECT email FROM user WHERE email = '$email' ");
  if ($emailSama) {
    echo "<script>alert('email sudah terdaftar!');
    document.location.href = 'register.php';
  </script>";
  die();
  }

  if ($password != $password2) {
    echo "<script>alert('konfirmasi password anda tidak sesuai!');
      document.location.href = 'register.php';
    </script>";
    die();
  } 

 $hashPassword = password_hash($password,PASSWORD_DEFAULT);


  $query = "INSERT INTO user VALUES(null, '$email', '$nama', '$hashPassword')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function loginUser($post) {
  global $db;
  $email = $post["email"];
  $password = $post["password"];

  // echo $post["remember"];
  $data = mysqli_query($db, "SELECT * FROM user WHERE email = '$email' ");

  if(mysqli_num_rows($data) === 1) {
      $row = mysqli_fetch_assoc($data);
      if (password_verify($password,  $row["password"])) {
             $_SESSION["loginUser"] = true;
             
             if(isset($post["remember"]) == "on") {
            setcookie("cokie","ok", time() + 60 * 60 * 24 * 7);
          }
          echo "<script>
          document.location.href = 'index.php';
      </script>";
      }  
  } else {
    echo "<script>alert('Password/Username Salah');
    document.location.href = 'login.php';
  </script>";
  }  


}

?>