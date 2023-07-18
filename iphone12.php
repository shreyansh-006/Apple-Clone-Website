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
        <li id="list2"><a href="./iphone13.php"><img src="
                    ./iPhone13.jpeg" class="navimg"><br>Iphone
                13
                Series<a></li>
        <li id="list3" style="transform:scale(1.2)"><a href="./iphone12.php" style="text-decoration:underline;"><img
                    src="./iphone12.jpeg" class="navimg"><br>Iphone 12
                Series<a></li>
        <li id="list4"><a href="./iphone11.php"><img src="./iphone 11.jpeg" class="navimg"><br>Iphone 11
                Series & SE<a></li>

    </ul>

    <div style="font-size: 30px;">Introducing Toughest Display And LiDAR </div>
    <ul>
        <div>
            <img src="./12.gif" class="gridimg" style="height:400px;" id="anim">
        </div>
    </ul>
    <div> <?php
                    include "DB.php";?>
        <form action="./Bill.php" method="POST">
            <table>
                <tr class="anim">
                    <td>Model</td>
                    <td><img src="./12.png" class="grid" style="height: 180px ;"></td>
                    <td><img src="./12.png" class="grid"></td>
                    <td><img src="./12pro.png" class="grid"></td>
                    <td><img src="./12pro.png" class="grid" style="height: 230px ;"></td>
                </tr>
                <tr class="anim">
                    <td>Name</td>
                    <td>Iphone 12 Mini</td>
                    <td>Iphone 12</td>
                    <td>Iphone 12 Pro</td>
                    <td>Iphone 12 Pro Max</td>
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
                    <td>A14 Bionic Chip</td>
                    <td>A14 Bionic Chip</td>
                    <td>A14 Bionic Chip</td>
                    <td>A14 Bionic Chip</td>
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
                    <td>12MP Ultra Wide and Wide camera lenses,<br>Optical image stabilization<br>2x optical zoom out,
                        2x
                        optical zoom range, and digital zoom up to 5x,<br>Dolby Vision HDR video recording up to 30 fps
                    </td>
                    <td>12MP Ultra Wide and Wide camera lenses,<br>Optical image stabilization<br>2x optical zoom out,
                        2x
                        optical zoom range, and digital zoom up to 5x,<br>Dolby Vision HDR video recording up to 30 fps
                    </td>
                    <td>12MP Ultra Wide, Wide, and Telephoto camera lenses,<br>Dual optical image stabilization,<br>2x
                        optical zoom in, 2x optical zoom out, 4x optical zoom range, and digital zoom up to
                        10x,<br>Dolby
                        Vision HDR video recording up to 60 fps</td>
                    <td>112MP Ultra Wide, Wide, and Telephoto camera lenses,<br>Dual optical image stabilization,<br>2x
                        optical zoom in, 2x optical zoom out, 4x optical zoom range, and digital zoom up to
                        10x,<br>Dolby
                        Vision HDR video recording up to 60 fps</td>
                </tr>

                <tr class="anim">
                    <td> Display</td>
                    <td>OLED with Ceramic Shield</td>
                    <td>OLED with Ceramic Shield</td>
                    <td>OLED with Ceramic Shield</td>
                    <td>OLED with Ceramic Shield</td>
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
                    <td>Red,Black,White,Blue,Green</td>
                    <td>Red,Black,White,Blue,Green</td>
                    <td>Blue,Black,Gold,White</td>
                    <td>Blue,Black,Gold,White</td>
                </tr>
                <tr class="anim">
                    <td></td>
                    <?php $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 12 Mini';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button121\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 12';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button122\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 12 Pro';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button123\">Buy</button></td>";
                            } else {
                                echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                            }

                        }

                    }
                    $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 12 Pro Max';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $qty = $row["Quantity"];
                            if ($qty > 0) {
                                echo "<td><button name=\"button124\">Buy</button></td>";
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