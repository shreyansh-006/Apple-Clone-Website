<?php
session_start();
if (isset($_POST['order'])) {
    $user = $_SESSION['$user'];
    $name = $_SESSION['$pname'];
    $storage = $_SESSION['$storage'];
    $color = $_SESSION['$color'];
    $price = $_SESSION['$price'];
    include 'DB.php';

    $flag = 0;
    if ($_POST['card'] == "" || $_POST['card'] == NULL) {
        $flag = 1;
        echo "<script>alert(\"Enter Your Card Number \");</script>";
        header("Location: iphone14.php");

    }
    if ($_POST['emonth'] == "" || $_POST['emonth'] == NULL) {
        $flag = 1;
        echo "<script>alert(\"Enter Your Ex Month \");</script>";
        header("Location: iphone14.php");


    }
    if ($_POST['eyear'] == "" || $_POST['eyear'] == NULL) {
        $flag = 1;
        echo "<script>alert(\"Enter Your Ex Year \");</script>";
        header("Location: iphone14.php");


    }
    if ($_POST['cvv'] == "" || $_POST['cvv'] == NULL) {
        $flag = 1;
        echo "<script>alert(\"Enter Your CVV number \");</script>";
        header("Location: iphone14.php");


    }
    if ($flag == 0) {
        $card = $_POST['card'];
        $emonth = $_POST['emonth'];
        $eyear = $_POST['eyear'];
        $cvv = $_POST['cvv'];
        if (stristr($name, "iphone")) {
            $sql = "INSERT INTO C_IPHONE_ORDER VALUES('$user','$name','$storage','$color',CURRENT_TIMESTAMP())";
            if (mysqli_query($conn, $sql) === TRUE) {
                $sql = "INSERT INTO C_IPHONE_PRICES VALUES('$user','$price','$card','$emonth','$eyear',CURRENT_TIMESTAMP())";
            }
        } elseif (stristr($name, "mac")) {
            $sql = "INSERT INTO C_MACS_ORDER VALUES('$user','$name','$storage','$color',CURRENT_TIMESTAMP())";
            if (mysqli_query($conn, $sql) === TRUE) {
                $sql = "INSERT INTO C_MACS_PRICES VALUES('$user','$price','$card','$emonth','$eyear',CURRENT_TIMESTAMP())";
            }
        } elseif (stristr($name, "ipad")) {
            $sql = "INSERT INTO C_IPAD_ORDER VALUES('$user','$name','$storage','$color',CURRENT_TIMESTAMP())";
            if (mysqli_query($conn, $sql) === TRUE) {
                $sql = "INSERT INTO C_IPAD_PRICES VALUES('$user','$price','$card','$emonth','$eyear',CURRENT_TIMESTAMP())";
            }
        } elseif (stristr($name, "apple")) {
            $sql = "INSERT INTO C_WATCH_ORDER VALUES('$user','$name','$storage','$color',CURRENT_TIMESTAMP())";
            if (mysqli_query($conn, $sql) === TRUE) {
                $sql = "INSERT INTO C_WATCH_PRICES VALUES('$user','$price','$card','$emonth','$eyear',CURRENT_TIMESTAMP())";
            }
        }

        if (mysqli_query($conn, $sql) === TRUE) {
            $sql = "SELECT * FROM `STOCKS` WHERE NAME = '$name';";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $qty = $row["Quantity"];
                }
                $qty = $qty - 1;
                $sql = "UPDATE `STOCKS` SET Quantity = '$qty' WHERE NAME = '$name';";
                mysqli_query($conn, $sql);
            }
            echo "<img src = \"./success.gif\">";
            header("Location: User.php");
        }
    }
}


?>