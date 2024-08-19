<?php

if(isset($_COOKIE["cokie"]) || isset($_SESSION["loginUser"])) {
    
} else {
    echo "
    <script>
      document.location.href = 'login.php';
    </script>
  ";   
}

?>