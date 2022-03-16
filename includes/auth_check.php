<?php
if(!isset($_SESSION['username'])){
    echo "<script>window.location.href='user-login'</script>";
}
?>