<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./iphone.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./login.css">
    <style>
        * {
            zoom: 95%;
        }

        .anim {
            z-index: 5;
        }
    </style>
</head>

<body bgcolor="black">
    <?php
    include 'DB.php';
    ?>
    <div id="begin">Stock Management</div>
    <div class="navbar">
        <ul style="font-size: 1px;">
            <li id="list1" style="transform:scale(1.2);"><a href="./Admin(iphone14).php"
                    style="text-decoration:underline;">IPhones<a></li>
            <li id="list2"><a href="./Admin(Macm1).php">Macs<a></li>
            <li id="list3"><a href="./Admin(Ipad).php">IPad<a></li>
            <li id="list4"><a href="./Admin(Watch).php">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <ul>
        <li id="list1"><a href=" ./Admin(iphone14).php"><img src="./iphone14.jpeg" class="navimg"><br>Iphone 14
                Series<a></li>
        <li id="list2" style="transform:scale(1.2)"><a style="text-decoration:underline;"
                href=" ./Admin(iphone13).php"><img src="
                    ./iPhone13.jpeg" class="navimg"><br>Iphone
                13 Series<a></li>
        <li id="list3"><a href="./Admin(iphone12).php"><img src="./iphone12.jpeg" class="navimg"><br>Iphone 12
                Series<a></li>
    </ul>
    <center>
        <form action="" method="POST">
            <table class="anim">
                <tr>
                    <td>Model</td>
                    <td>Name</td>
                    <td>Current Quantity</td>
                    <td>Add Quantity</td>
                    <td>Model</td>
                    <td>Name</td>
                    <td>Current Quantity</td>
                    <td>Add Quantity</td>

                </tr>
                <tr>

                    <td><img src="./iphone-13.png" class="grid"></td>

                    <td>Iphone 13 Mini</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Mini';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<td>" . $row["Quantity"] . "</td>";

                        }

                    } else {
                        echo "<td>0</td>";
                    }
                    ?>
                    <td>
                        <input type="number" min="0" name="n14" value=0>
                    </td>

                    <td><img src="./iphone-13.png" class="grid" style="height: 230px ;"></td>


                    <td>Iphone 13</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<td>" . $row["Quantity"] . "</td>";

                        }

                    } else {
                        echo "<td>0</td>";
                    } ?>
                    <td>
                        <input type="number" min="0" name="n14Plus" value=0>

                    </td>
                </tr>
                <tr>

                    <td><img src="./13progrid.png" class="grid"></td>


                    <td>Iphone 13 Pro</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<td>" . $row["Quantity"] . "</td>";

                        }

                    } else {
                        echo "<td>0</td>";
                    } ?>
                    <td>
                        <input type="number" min="0" name="n14Pro" value=0>
                    </td>

                    <td><img src="./13progrid.png" class="grid" style="height: 230px ;"></td>

                    <td>Iphone 13 Pro Max</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro Max';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<td>" . $row["Quantity"] . "</td>";

                        }

                    } else {
                        echo "<td>0</td>";
                    } ?>
                    <td>
                        <input type="number" min="0" name="n14ProMax" value=0>
                    </td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td colspan="8"><button name="b14" style="font-size:30px;height:auto;width:auto;">ADD</button></td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    if (isset($_POST['b14'])) {
        $i14 = $_POST['n14'];
        $i14plus = $_POST['n14Plus'];
        $i14pro = $_POST['n14Pro'];
        $i14promax = $_POST['n14ProMax'];
        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Mini';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14;
        $sql = "UPDATE STOCKS SET QUANTITY = '$qty' WHERE NAME = 'IPhone 13 Mini'";
        mysqli_query($conn, $sql);
        $qty = 0;
        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14plus;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'IPhone 13'";
        mysqli_query($conn, $sql);
        $qty = 0;

        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14pro;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'IPhone 13 Pro'";
        mysqli_query($conn, $sql);
        $qty = 0;

        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro Max';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14promax;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'IPhone 13 Pro Max'";
        mysqli_query($conn, $sql);
        $qty = 0;
        header("Refresh:0"); 

    }
    ?>
</body>

</html>