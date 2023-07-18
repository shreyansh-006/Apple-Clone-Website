<script>
    if (sessionStorage.getItem("val") == "1") {
</script>
<?php
session_start();
$user = $_SESSION['$user'];
session_unset();
session_destroy();
include 'DB.php';
$sql = "DELETE FROM `SIGNUP` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_IPHONE_ORDER` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_IPHONE_PRICES` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_MACS_ORDER` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_MACS_PRICES` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_IPAD_ORDER` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_IPAD_PRICES` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_WATCH_ORDER` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM `C_WATCH_PRICES` WHERE USERNAME = '$user'";
mysqli_query($conn, $sql);
header("Location:Login.php");


?>
<script> }
    else {
        window.location.replace("Login.php");
    }
</script>