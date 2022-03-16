<?php
if (!isset($_SESSION['lawyer_name'])) {
    echo "<script>window.location.href='../login-lawyer'</script>";
}
