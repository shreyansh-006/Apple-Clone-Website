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
            zoom: normal;
        }
    </style>
</head>

<body bgcolor="black">

    <script>
        if (sessionStorage.getItem("val") == "1") {
    </script>
    <?php
    session_start();
    echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

    if (isset($_POST['buy141'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 79990;
        } else if ($storage == "256") {
            $price = 86990;
        } else {
            header("Location: iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Purple" || $color == "PURPLE" || $color == "purple") {
            $color = "Purple";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy142'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 89990;
        } else if ($storage == "256") {
            $price = 96990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Purple" || $color == "PURPLE" || $color == "purple") {
            $color = "Purple";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }


    if (isset($_POST['buy143'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 117990;
        } else if ($storage == "256") {
            $price = 127990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "DEEP PURPLE" || $color == "Deep Purple" || $color == "deep purple") {
            $color = "Deep Purple";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location: iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }



    if (isset($_POST['buy144'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 139990;
        } else if ($storage == "256") {
            $price = 149990;
        } else {
            header("Location: iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "DEEP PURPLE" || $color == "Deep Purple" || $color == "deep purple") {
            $color = "Deep Purple";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }



    if (isset($_POST['buy131'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 64990;
        } else if ($storage == "256") {
            $price = 70990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Pink" || $color == "pink" || $color == "PINK") {
            $color = "Pink";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy132'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 73990;
        } else if ($storage == "256") {
            $price = 78990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Pink" || $color == "pink" || $color == "PINK") {
            $color = "Pink";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy133'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 99990;
        } else if ($storage == "256") {
            $price = 109990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }




    if (isset($_POST['buy134'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 124990;
        } else if ($storage == "256") {
            $price = 135990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy121'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 49990;
        } else if ($storage == "256") {
            $price = 56990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy122'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 60990;
        } else if ($storage == "256") {
            $price = 68990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy123'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 82990;
        } else if ($storage == "256") {
            $price = 92990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy124'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 99990;
        } else if ($storage == "256") {
            $price = 109990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Blue" || $color == "BLUE" || $color == "blue") {
            $color = "Blue";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buy111'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 32990;
        } else if ($storage == "256") {
            $price = 38990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy112'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 40990;
        } else if ($storage == "256") {
            $price = 47990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "black" || $color == "BLACK" || $color == "Black") {
            $color = "Black";
        } else if ($color == "Purple" || $color == "purple" || $color == "PURPLE") {
            $color = "Purple";
        } else if ($color == "Red" || $color == "RED" || $color == "red") {
            $color = "Red";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Yellow" || $color == "YELLOW" || $color == "yellow") {
            $color = "Yellow";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";

    }

    if (isset($_POST['buy113'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 65990;
        } else if ($storage == "256") {
            $price = 72990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }


    if (isset($_POST['buy114'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 77990;
        } else if ($storage == "256") {
            $price = 84990;
        } else {
            header("Location:iphone14.php");
        }
        $color = $_POST['color'];
        if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else if ($color == "Black" || $color == "Black" || $color == "black") {
            $color = "Black";
        } else if ($color == "White" || $color == "WHITE" || $color == "white") {
            $color = "White";
        } else if ($color == "Gold" || $color == "GOLD" || $color == "gold") {
            $color = "Gold";
        } else {
            header("Location:iphone14.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buymacair'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "256") {
            $price = 92900;
        } else if ($storage == "512") {
            $price = 102900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $color = $_POST['color'];
        if ($color == "Grey" || $color == "grey" || $color == "GREY") {
            $color = "Grey";
        } else if ($color == "Gold" || $color == "gold" || $color == "GOLD") {
            $color = "Gold";
        } else if ($color == "Silver" || $color == "silver" || $color == "SILVER") {
            $color = "Silver";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");

        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buymacpro'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "256") {
            $price = 113900;
        } else if ($storage == "512") {
            $price = 125900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");

        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buym1pro'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "512") {
            $price = 149900;
        } else if ($storage == "1024") {
            $price = 169900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");

        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buym1max'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "512") {
            $price = 189900;
        } else if ($storage == "1024") {
            $price = 225900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");

        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buymacm2air'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "256") {
            $price = 119900;
        } else if ($storage == "512") {
            $price = 129900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $color = $_POST['color'];
        if ($color == "Grey" || $color == "grey" || $color == "GREY") {
            $color = "Grey";
        } else if ($color == "Gold" || $color == "gold" || $color == "GOLD") {
            $color = "Gold";
        } else if ($color == "Silver" || $color == "silver" || $color == "SILVER") {
            $color = "Silver";
        } else if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }


    if (isset($_POST['buymacprom2'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "256") {
            $price = 129900;
        } else if ($storage == "512") {
            $price = 149900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buym2pro'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "512") {
            $price = 199900;
        } else if ($storage == "1024") {
            $price = 249900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buym2max'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "512") {
            $price = 249900;
        } else if ($storage == "1024") {
            $price = 269900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Index_Macs.php");
        }
        $color = "Silver";
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }


    if (isset($_POST['buyipadair'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 59900;
        } else if ($storage == "256") {
            $price = 69900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $color = $_POST['color'];
        if ($color == "Blue" || $color == "blue" || $color == "BLUE") {
            $color = "Blue";
        } else if ($color == "Pink" || $color == "pink" || $color == "PINK") {
            $color = "Pink";
        } else if ($color == "Green" || $color == "green" || $color == "GREEN") {
            $color = "Green";
        } else if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buyipadm1'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "128") {
            $price = 75900;
        } else if ($storage == "256") {
            $price = 90900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $color = $_POST['color'];
        if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buyipadm2'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "256") {
            $price = 99900;
        } else if ($storage == "512") {
            $price = 109900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $color = $_POST['color'];
        if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;
            }
            header("Location:Ipad.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Storage:</label></td><td>" . $storage . " GB</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }

    if (isset($_POST['buys8'])) {
        $name = $_SESSION['$pname'];
        $storage = $_POST['storage'];
        if ($storage == "41") {
            $price = 39900;
        } else if ($storage == "45") {
            $price = 45900;
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;

            }
            header("Location:Ipad.php");
        }
        $color = $_POST['color'];
        if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else if ($color == "Red" || $color == "red" || $color == "RED") {
            $color = "Red";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;
            }
            header("Location:Ipad.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Size:</label></td><td>" . $storage . " </td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buyse'])) {
        $name = $_SESSION['$pname'];
        $storage = "39mm";
        $price = 30900;
        $color = $_POST['color'];
        if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else if ($color == "Red" || $color == "red" || $color == "RED") {
            $color = "Red";
        } else if ($color == "Yellow" || $color == "yellow" || $color == "YELLOW") {
            $color = "Yellow";
        } else if ($color == "Pink" || $color == "pink" || $color == "PINK") {
            $color = "Pink";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;
            }
            header("Location:Ipad.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Size:</label></td><td>" . $storage . "</td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }
    if (isset($_POST['buyultra'])) {
        $name = $_SESSION['$pname'];
        $storage = "49mm";
        $price = "89990";
        $color = $_POST['color'];
        if ($color == "BLACK" || $color == "black" || $color == "Black") {
            $color = "Black";
        } else if ($color == "White" || $color == "white" || $color == "WHITE") {
            $color = "White";
        } else if ($color == "Orange" || $color == "orange" || $color == "ORANGE") {
            $color = "Orange";
        } else {
            echo "<script>alert(\"Invalid Details \");</script>";
            for ($i = 0; $i < 1000000; $i++) {
                $i = --$i + 1;
            }
            header("Location:Watch.php");
        }
        $_SESSION['$storage'] = $storage;
        $_SESSION['$color'] = $color;
        $_SESSION['$price'] = $price;


        echo "<form action = \"./Order.php\" method=\"POST\"><table>";
        echo "<tr><td><label>Name:</label></td><td>" . $name . "</td></tr>";
        echo "<tr><td><label>Size:</label></td><td>" . $storage . " </td></tr>";
        echo "<tr><td><label>Color:</label></td><td>" . $color . "</td></tr>";
        echo "<tr><td><label>Price:</label></td><td>" . $price . " Rs</td></tr>";
        echo "<tr><td colspan=\"2\"><label>___________Payment Details___________</label></td></tr>";
        echo "<tr><td><label>Debit Card Only</label></td></tr>";
        echo "<tr><td><label>Card Number:</label></td>";
        echo "<td><input type=\"text\" name=\"card\" placeholder=\"Number\"> </td></tr>";
        echo "<tr><td><label>Ex Month:</label></td>";
        echo "<td><input type=\"text\" name=\"emonth\" placeholder=\"Month\"> </td></tr>";
        echo "<tr><td><label>Ex Year:</label></td>";
        echo "<td><input type=\"text\" name=\"eyear\" placeholder=\"Year\"> </td></tr>";
        echo "<tr><td><label>CVV Number:</label></td>";
        echo "<td><input type=\"text\" name=\"cvv\" placeholder=\"Number\"> </td></tr>";
        echo "</table>";
        echo "<button name = \"order\" style=\"width:100px;\">Place Order</button></form>";
    }


    ?>
    <script> }
        else {
            window.location.replace("http://localhost/Web_Project/Login.php");
        }
    </script>
</body>

</html>