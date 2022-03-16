<?php
if (!isset($_SESSION['user_fname'])) {
    echo "<script>window.location.href='../user-login'</script>";
}
