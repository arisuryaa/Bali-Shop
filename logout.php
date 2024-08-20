<?php

session_start();

session_destroy();
setcookie("cokie",'');
setcookie("email",'');

echo "<script>
        document.location.href = 'index.php';
</script>"

?>