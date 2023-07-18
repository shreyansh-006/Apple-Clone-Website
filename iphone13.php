<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./iphone.css">
    <style>
        table{z-index: 0;}
    </style>
</head>

<body bgcolor="black">
    <div class="navbar">
        <ul style="font-size: 1px;">
            <li id="list1" style="transform:scale(1.2);"><a href="./iphone14.php"
                    style="text-decoration:underline;">IPhones<a>
            </li>
            <li id="list2"><a href="./Index_Macs.php">Macs<a></li>
            <li id="list3"><a href="./Ipad.php">IPad<a></li>
            <li id="list4"><a href="./Watch.php">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <ul>
        <li id="list1"><a href="./iphone14.php"><img src="./iphone14.jpeg" class="navimg"><br>Iphone 14
                Series<a></li>
        <li id="list2" style="transform:scale(1.2)"><a href="./iphone13.php" style="text-decoration:underline;"><img
                    src="
                    ./iPhone13.jpeg" class="navimg"><br>Iphone
                13
                Series<a></li>
        <li id="list3"><a href="./iphone12.php"><img src="./iphone12.jpeg" class="navimg"><br>Iphone 12
                Series<a></li>
        <li id="list4"><a href="./iphone11.php"><img src="./iphone 11.jpeg" class="navimg"><br>Iphone 11
                Series & SE<a></li>

    </ul>


    <div style="font-size: 30px;">Introducing Smoothest Display Ever</div>
    <ul>
        <div>
            <li><img src="./13mini.gif" class="gridimg"></li>
            <li><img src="./13pro.gif" class="gridimg" id="anim"></li>
            <li><img src="./13.gif" class="gridimg"></li>
        </div>
    </ul>
    <div>
        <form action="./Bill.php" method="POST">
            <table>
                <tr class="anim">
                    <td>Model</td>
                    <td><img src="./iphone-13.png" class="grid" style="height: 180px ;"></td>
                    <td><img src="./iphone-13.png" class="grid"></td>
                    <td><img src="./13progrid.png" class="grid"></td>
                    <td><img src="./13progrid.png" class="grid" style="height: 230px ;"></td>
                </tr>
                <tr class="anim">
                    <td>Name</td>
                    <td>Iphone 13 Mini</td>
                    <td>Iphone 13</td>
                    <td>Iphone 13 Pro</td>
                    <td>Iphone 13 Pro Max</td>
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
                    <td> A15 Bionic Chip</td>
                    <td>A15 Bionic Chip</td>
                    <td>A15 Bionic Chip</td>
                    <td>A15 Bionic Chip</td>
                </tr>

                <tr class="anim">
                    <td>Screen Size</td>
                    <td>5.42 inches</td>
                    <td>6.1 inches</td>
                    <td>6.1 inches</td>
                    <td>6.7 inches</td>
                </tr>

                <tr class="anim">
                    <td>Camera</td>
                    <td>12 MP, f/1.6, 26mm (wide),<br> 1.7µm, dual pixel PDAF, sensor-shift OIS
                        12 MP, <br>f/2.4, 120˚, 13mm (ultrawide)</td>
                    <td>12 MP, f/1.6, 26mm (wide),<br> 1.7µm, dual pixel PDAF, sensor-shift OIS
                        12 MP, <br>f/2.4, 120˚, 13mm (ultrawide)</td>
                    <td>12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS
                        12 MP, f/2.8, 77mm (telephoto), PDAF, 1/3.5", OIS, 3x optical zoom
                        12 MP, f/1.8, 13mm, 120˚ (ultrawide), 1/3.5", PDAF</td>
                    <td>12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS
                        12 MP, f/2.8, 77mm (telephoto), PDAF, 1/3.5", OIS, 3x optical zoom
                        12 MP, f/1.8, 13mm, 120˚ (ultrawide), 1/3.5", PDAF</td>
                </tr>

                <tr class="anim">
                    <td> Display</td>
                    <td>60Hz XDR OLED</td>
                    <td>60Hz XDR OLED</td>
                    <td>120Hz XDR OLED</td>
                    <td>120Hz XDR OLED</td>
                </tr>

                <tr class="anim">
                    <td>Dust Water Resistance</td>
                    <td>IP68</td>
                    <td>IP68</td>
                    <td>IP68</td>
                    <td>IP68</td>
                </tr>
                <tr class="anim">
                    <td>Colors</td>
                    <td>Red,Black,White,Blue,Green,Pink</td>
                    <td>Red,Black,White,Blue,Green,Pink</td>
                    <td>Blue,Black,Gold,White</td>
                    <td>Blue,Black,Gold,White</td>
                </tr>
                <tr class="anim">
                    <td></td>
                    <?php
                    include "DB.php";
                    $sql = "SELECT * FROM STOCKS WHERE NAME = 'IPhone 13 Mini'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button131\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button132\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button133\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 13 Pro Max';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button134\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    ?>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>