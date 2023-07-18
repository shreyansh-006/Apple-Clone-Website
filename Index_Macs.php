<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macs</title>
    <link rel="stylesheet" href="./iphone.css">
    
        <style>
        table{z-index: 0;}
    </style>
</head>

<body bgcolor="black">
<?php
include "DB.php";
                    ?>
    <script>
        if (sessionStorage.getItem("val") == "0") {
            sessionStorage.setItem("val", "1");
        }</script>
    <div class="navbar">
        <ul style="font-size: 1px;">
            <li id="list1"><a href="./iphone14.php">IPhones<a></li>
            <li id="list2" style="transform:scale(1.2);"><a href="./Index_Macs.php"
                    style="text-decoration:underline;">Macs<a></li>
            <li id="list3"><a href="./Ipad.php">IPad<a></li>
            <li id="list4"><a href="./Watch.php">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <table style="border: 2px solid white; border-radius:50px; padding:20px;">
        <tr>
            <td id="list1" style="transform:scale(1.2);"><a href="./Index_Macs.php"
                    style="text-decoration:underline;"><img
                        src=" ./Apple_new-m1-chip-graphic_11102020_big.jpg.large.jpg" height="100px"><br>M1 Chip</a>
            </td>
            <td id="list2"><a href="./Macs_m2.php"><img src="./m2 chip.jpg" height="120px"><br>M2 Chip</a></td>
        </tr>
    </table>

    <div style="font-size: 30px;">Introducing Apple Silicon M1 Chip</div>
    <ul>
        <div>

            <li><img src="./apple_m1_chip.jpg" class="gridimg" id="anim" style="width:80%;height:60%;"></li>
        </div>
    </ul>
    <div>
        <form action="./Bill.php" method="POST">
            <table>
                <tr class="anim">
                    <td>Model</td>
                    <td><img src="./macbook-air-m1.png" class="grid"></td>
                    <td><img src="./Macbook_pro_m1.png" class="grid"></td>
                    <td><img src="./M1_Pro.png" class="grid"></td>
                    <td><img src="./M1_Pro.png" class="grid" style="height: 230px ;"></td>
                </tr>
                <div>

                    <tr class="anim">
                        <td>Name</td>
                        <td>MacBook Air</td>
                        <td>MacBook Pro</td>
                        <td>MacBook M1 Pro </td>
                        <td>MacBook M1 Max</td>
                    </tr>
                    <tr class="anim">
                        <ul></ul>
                        <td>Specifications</td>
                        <td>__________________________</td>
                        <td>__________________________</td>
                        <td>____________________________________</td>
                        <td>____________________________________</td>
                        </ul>
                    </tr>
                    <tr class="anim">
                        <td>Chip</td>
                        <td> M1 Chip</td>
                        <td>M1 Chip</td>
                        <td>M1 Pro Chip</td>
                        <td>M1 Max Chip</td>
                    </tr>

                    <tr class="anim">
                        <td>Screen Size</td>
                        <td>13.3 inches</td>
                        <td>13.3 inches</td>
                        <td>14 inches</td>
                        <td>16 inches</td>
                    </tr>

                    <tr class="anim">
                        <td>Camera</td>
                        <td>720p</td>
                        <td>720p</td>
                        <td>1080p</td>
                        <td>1080p</td>
                    </tr>

                    <tr class="anim">
                        <td>Refresh Rate</td>
                        <td>60Hz</td>
                        <td>60Hz</td>
                        <td>1-120Hz</td>
                        <td>1-120Hz</td>
                    </tr>

                    <tr class="anim">
                        <td>CPU/GPU</td>
                        <td>8 Core CPU <br> 7 Core GPU</td>
                        <td>8 Core CPU <br> 8 Core GPU</td>
                        <td>10 Core CPU <br> 14 Core GPU</td>
                        <td>10 Core CPU <br> 24 Core GPU</td>
                    </tr>
                    <tr class="anim">
                        <td>RAM</td>
                        <td>8 GB</td>
                        <td>8 GB</td>
                        <td>16 GB</td>
                        <td>32 GB</td>

                    </tr>
                    <tr class="anim">
                        <td></td>
                        <?php
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Air M1';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"buttonmacair\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook Pro M1';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"buttonmacpro\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M1 Pro';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"buttonm1pro\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'MacBook M1 Max';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"buttonm1max\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        ?>
                    </tr>
                </div>
            </table>
        </form>
    </div>

</body>

</html>