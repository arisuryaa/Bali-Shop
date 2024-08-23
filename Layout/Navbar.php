<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Bali Shop</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="top-section">
            <div class="logo">
                <a href="index.php"><img src="asset/img/logo.svg" alt="Logo"></a>
            </div>
            <div class="search">
                <form action="produk.php" method="get">
                    <input type="text" name="cari" placeholder="Cari Produk...">
                    <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            
            <div class="sidebarr">
                <ul>
                    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produk.php">Semua Produk</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                </ul>
            </div>      
            <div class="nav-kiri">
                <ul>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <li class="hideOnMobile"><a href="myaccount.php"><i class="fa-solid fa-user"></i></a></li>
                    <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </div> 
        </div>
        <div class="bottom-section">
            <div class="left-nav">
                <a href="produk.php">SEMUA PRODUK</a>
            </div>
            <div class="right-nav">
                <p>Hubungi Kami: +62 877 5081 7501</p>
            </div>
        </div>
    </nav>

    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebarr');
            sidebar.style.display = 'flex';
            setTimeout(() => {
            sidebar.classList.add('show');
            }, 10);
        }

        function hideSidebar(){
            const sidebar = document.querySelector('.sidebarr');
            sidebar.classList.remove('show');
            setTimeout(() => {
            sidebar.style.display = 'none';
            }, 300);
        }

    </script>
    </body>
    </html>