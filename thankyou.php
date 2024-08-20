<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bali Shop - Terima Kasih</title>
<style>

* {
  box-sizing : border-box;  
}

body {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding : 0;
  overflow-x: hidden;
  background-color: #f4f4f4;
 
}

  .logo {
    width: 150px; /* Atur ukuran logo sesuai kebutuhan */
    height: auto;
    display: block;
    margin: 0 auto 10px auto; /* Kurangi jarak bawah logo */
  }

  .content {
    display : flex;
    flex-direction: column;
    justify-content:space-between;
    align-items:center;
    height : 90vh;
  }
  

  .content .foto {
    height : 80%;
    display: flex;
    align-items : center;
    justify-content: center;
    flex-direction : column;
    gap:0px;
  }

  .content .foto h1 {
    font-size : 32px;
    font-family: "Poppins", sans-serif;
  }

   .truck-image {
    width: 350px; 
    height: auto;
    margin: 10px auto 50px auto; 
    display: block;
  }
  .thank-you-message {
    font-size: 50px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .order-message {
    font-size: 18px;
    margin-bottom: 30px;
  }
  .return-button {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
  .return-button:hover {
    background-color: #2980b9;
  } 
</style>
</head>
<body>

<div class="content">
  <div class="logo">
    <img src="asset/img/logo2.png" class="logo" alt="Logo Bali Shop">
  </div>
  <div class="foto">
      <img src="asset/img/output-onlinegiftools (1).gif" class="truck-image" alt="Animasi Pengiriman">
      <h1>TERIMA KASIH</h1>
      <div class="order-message">Pesanan Anda akan segera kami proses</div>
      <a href="#" class="return-button">- Kembali -</a>
  </div>
</div>






</body>
</html>
