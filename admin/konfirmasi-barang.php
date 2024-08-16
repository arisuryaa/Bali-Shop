<?php 

include "layout/header.php";
include 'config/app.php';
$id_pesanan =(int)$_GET["id_pesanan"];

$detailPesanan = select("SELECT * FROM pesanan WHERE id_pesanan = $id_pesanan")[0];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'rambobuatemail228@gmail.com';                     //SMTP username
$mail->Password   = 'qdri bmtm tvvd asus';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;    

if(isset($_POST["submit"])) {
    $mail->setFrom('rambobuatemail228@gmail.com', 'Bali-Shop');
    $mail->addAddress($_POST["emailPenerima"]);     //Add a recipient
    $mail->addAddress('rambobuatemail228@gmail.com', 'Bali-Shop');    
    
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["pesan"];

    if ($mail->send()) {
        konfirmasiPesanan($detailPesanan);
        echo "<script>
                 alert('Pesanan Berhasil di Konfirmasi!');
                 document.location.href = 'pesanan.php';
                </script>";
    } else {
        echo "<script>
        alert('Pesanan gagal di Konfirmasi!');
        document.location.href = 'pesanan.php';
       </script>";
    }
}

// if (konfirmasiPesanan($detailPesanan) > 0) {
//         echo "<script>
//         alert('Status Pesanan Berhasil Diubah');
//         document.location.href = 'pesanan.php';
//         </script>";
//     } else {
//         echo "<script>
//         alert('Status pesanan gagal Diubah');
//         document.location.href = 'pesanan.php';
//         </script>";
//     }



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Konfirmasi Pesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Orderan</a></li>
                        <li class="breadcrumb-item active">Konfirmasi Pesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Email Penerima</label>
                    <input required type="text" class="form-control" id="nama" value="<?= $detailPesanan["email"] ?>"
                        name="emailPenerima">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input required type="text" class="form-control" id="subject" placeholder="Tulis Subject"
                        name="subject">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <input required type="text" class="form-control" id="pesan" placeholder="Tulis Pesan" name="pesan">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </form>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <script>
        document.getElementById('foto').addEventListener('change', function() {
            var previewContainer = document.getElementById('preview-container');
            previewContainer.innerHTML = ''; // Kosongkan kontainer pratinjau
            var files = this.files;

            for (var i = 0; i < files.length; i++) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-thumbnail';
                    img.style.width = '100px';
                    previewContainer.appendChild(img);
                }

                reader.readAsDataURL(files[i]);
            }
        });
        </script>

        <?php include "layout/footer.php";?>