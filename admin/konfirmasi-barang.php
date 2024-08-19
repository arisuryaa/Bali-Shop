<?php 

include "layout/header.php";
include 'config/app.php';
$id_pesanan =(int)$_GET["id_pesanan"];

$detailPesanan = select("SELECT * FROM pesanan WHERE id_pesanan = $id_pesanan")[0];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;   
$mail->isSMTP();                                            
$mail->Host       = 'smtp.gmail.com';                     
$mail->SMTPAuth   = true;                                   
$mail->Username   = 'rambobuatemail228@gmail.com';                     
$mail->Password   = 'qdri bmtm tvvd asus';                               
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
$mail->Port       = 465;    

if(isset($_POST["submit"])) {
    $mail->setFrom('rambobuatemail228@gmail.com', 'Bali-Shop');
    $mail->addAddress($_POST["emailPenerima"]);    
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

?>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Konfirmasi Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Orderan</a></li>
                        <li class="breadcrumb-item active">Konfirmasi Pesanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
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
        </div>
        <script>
        document.getElementById('foto').addEventListener('change', function() {
            var previewContainer = document.getElementById('preview-container');
            previewContainer.innerHTML = '';
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