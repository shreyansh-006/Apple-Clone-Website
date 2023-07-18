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
            <li id="list1"><a href="./Admin(iphone14).php">IPhones<a></li>
            <li id="list2" style="transform:scale(1.2);"><a style="text-decoration:underline;"
                    href="./Admin(Macm1).php">Macs<a></li>
            <li id="list3"><a href="./Admin(Ipad).php">IPad<a></li>
            <li id="list4"><a href="./Admin(Watch).php">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <table class="t" style="border: 2px solid white; border-radius:50px; padding:20px;">
        <tr>
            <td id="list1"><a href="./Admin(Macm1).php"><img
                        src=" ./Apple_new-m1-chip-graphic_11102020_big.jpg.large.jpg" height="100px"><br>M1 Chip</a>
            </td>
            <td id="list2" style="transform:scale(1.1);"><a href="./Admin(Macm2).php"
                    style="text-decoration:underline;"><img src="./m2 chip.jpg" height="120px"><br>M2 Chip</a></td>
        </tr>
    </table>

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

                    <td><img src="./macbook-air-m2preview.png" class="grid"></td>

                    <td>MacBook Air M2</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Air M2';";
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

                    <td><img src="./mb-pro-m2-removebg-preview.png" class="grid" style="height: 230px ;"></td>


                    <td>MacBook Pro M2</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Pro M2';";
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

                    <td><img src="./MB-M2-Pro.png" class="grid"></td>


                    <td>MacBook M2 Pro</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M2 Pro';";
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

                    <td><img src="./MB-M2-Pro.png" class="grid" style="height: 230px ;"></td>

                    <td>MacBook M2 Max</td>
                    <?php
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M2 Max';";
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
        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Air M2';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14;
        $sql = "UPDATE STOCKS SET QUANTITY = '$qty' WHERE NAME = 'MacBook Air M2'";
        mysqli_query($conn, $sql);
        $qty = 0;
        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Pro M2';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14plus;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'MacBook Pro M2'";
        mysqli_query($conn, $sql);
        $qty = 0;

        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M2 Pro';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14pro;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'MacBook M2 Pro'";
        mysqli_query($conn, $sql);
        $qty = 0;

        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M2 Max';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $val = $row['Quantity'];
            }
        }
        $qty = $val + $i14promax;
        $sql = "UPDATE STOCKS SET Quantity = '$qty' WHERE NAME = 'MacBook M2 Max'";
        mysqli_query($conn, $sql);
        $qty = 0;
        header("Refresh:0"); 

    }
    ?>
</body>

</html>