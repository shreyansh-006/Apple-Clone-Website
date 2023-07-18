<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        * {
            font-size: 25px;
            zoom: 90%;
        }

        button {
            height: 50px;
            font-size: 25px;
        }

        table,
        th,
        tr {
            border: 1px solid White;
            margin: auto;
            padding: 0px;
        }
    </style>
</head>

<body bgcolor="black">
    <div style="text-decoration:underline;">Account Details</div>
    <?php
    session_start();
    $user = $_SESSION['$user'];
    if ($user == "admin@ad") {
        echo " <a href=\"./Admin(iphone14).php\"><button style=\"width:100px;right:40%;bottom:30px;border-radius: 10%;\">
            Back </button></a>";
    } else {
        echo "<a href=\"./DeleteAcc.php\"><button style=\"width:200px;left:40%;bottom:30px;\">Delete Account</button></a>";
        echo " <a href=\"./iphone14.php\"><button  style=\"width:100px;right:40%;bottom:30px;border-radius: 10%;\">
            Back </button></a>";
        echo "<a href=\"./Update.php\"><button style=\"width:200px;right:40%;bottom:30px;\">Update Account</button></a><br>";
    }
    ?>
    <br>
    <br>
    <img src="./userlogo.png" id="image1" style="left:47%;">
    <br>


    <?php

    include 'DB.php';
    $sql = "SELECT NAME,USERNAME FROM SIGNUP WHERE USERNAME = '$user'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<div style=\"font-size:28px;\">Name:" . $row["NAME"] . "</div><br>";
        echo "Username:" . $row["USERNAME"];
        echo "<br><a href=\"./LogOut.php\"><button style=\"width:200px;\">Log Out</button></a><br>";

        echo "<br>";

        echo "<fieldset style=\"height:auto;\"><legend>Details</legend>";

        $sql = "SELECT `NAME_OF_PHONE`, `STORAGE_GB`, `COLOR`,`DATE_TIME` FROM `C_IPHONE_ORDER` WHERE  USERNAME = '$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "__________________________IPhone_________________________<br><br>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Model Name: " . $row["NAME_OF_PHONE"] . "<br>";
                echo "Storage: " . $row["STORAGE_GB"] . "GB" . "<br>";
                echo "Color : " . $row["COLOR"] . "<br>";

                $date = $row["DATE_TIME"];
                $sql = "SELECT `PRICE`, `CARD_NUMBER`,`DATE_TIME` FROM `C_IPHONE_PRICES` WHERE  USERNAME = '$user' AND DATE_TIME =  '$date'";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "Price : " . $row["PRICE"] . "<br>";
                        echo "Debit Card Used: " . $row["CARD_NUMBER"] . "<br>";
                        echo "Date Time: " . $date . "<br>";
                    }
                }
                echo "<br><br><br>";
            }
        }


        $sql = "SELECT `NAME`, `STORAGE`, `COLOR`,`DATE_TIME` FROM `C_MACS_ORDER` WHERE  USERNAME = '$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "__________________________Macs_________________________<br><br>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "Model Name: " . $row["NAME"] . "<br>";
                echo "Storage: " . $row["STORAGE"] . "GB" . "<br>";
                echo "Color : " . $row["COLOR"] . "<br>";

                $date = $row["DATE_TIME"];
                $sql = "SELECT `PRICE`, `CARD_NUMBER`,`DATE_TIME` FROM `C_MACS_PRICES` WHERE  USERNAME = '$user' AND DATE_TIME =  '$date'";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "Price : " . $row["PRICE"] . "<br>";
                        echo "Debit Card Used: " . $row["CARD_NUMBER"] . "<br>";
                        echo "Date Time: " . $date . "<br>";
                    }
                }
                echo "<br><br><br>";

            }
        }


        $sql = "SELECT `NAME`, `STORAGE`, `COLOR`,`DATE_TIME` FROM `C_IPAD_ORDER` WHERE  USERNAME = '$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "__________________________IPADs_________________________<br><br>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "Model Name: " . $row["NAME"] . "<br>";
                echo "Storage: " . $row["STORAGE"] . "GB" . "<br>";
                echo "Color : " . $row["COLOR"] . "<br>";

                $date = $row["DATE_TIME"];
                $sql = "SELECT `PRICE`, `CARD_NUMBER`,`DATE_TIME` FROM `C_IPAD_PRICES` WHERE  USERNAME = '$user' AND DATE_TIME =  '$date'";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "Price : " . $row["PRICE"] . "<br>";
                        echo "Debit Card Used: " . $row["CARD_NUMBER"] . "<br>";
                        echo "Date Time: " . $date . "<br>";
                    }
                }
                echo "<br><br><br>";

            }
        }


        $sql = "SELECT `NAME`, `SIZE`, `COLOR`,`DATE_TIME` FROM `C_WATCH_ORDER` WHERE  USERNAME = '$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "__________________________Watches_________________________<br><br>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "Model Name: " . $row["NAME"] . "<br>";
                echo "SIZE: " . $row["SIZE"] . "<br>";
                echo "Color : " . $row["COLOR"] . "<br>";

                $date = $row["DATE_TIME"];
                $sql = "SELECT `PRICE`, `CARD_NUMBER`,`DATE_TIME` FROM `C_WATCH_PRICES` WHERE  USERNAME = '$user' AND DATE_TIME =  '$date'";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "Price : " . $row["PRICE"] . "<br>";
                        echo "Debit Card Used: " . $row["CARD_NUMBER"] . "<br>";
                        echo "Date Time: " . $date . "<br>";
                    }
                }
                echo "<br><br><br>";

            }
        }

        echo "</fieldset>";
    } else {
        header("Location:Login.php");
    }
    ?>
</body>

</html>