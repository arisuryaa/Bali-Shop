<?php

session_start();

session_destroy();
setcookie("login",'');
setcookie("username",'');

echo "<script>
        document.location.href = 'login.php';
</script>"

?>