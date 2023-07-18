<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./iphone.css">
    <style>
        table{
            z-index: 0;
        }
    </style>
</head>

<body bgcolor="black">

    <script>
        if (sessionStorage.getItem("val") == "0" || sessionStorage.getItem("val") == "1") {
            sessionStorage.setItem("val", "1");
        }
        else {
            window.location.replace("http://localhost/Web_Project/Login.php");
        }
    </script>
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
        <li id="list1" style="transform:scale(1.2)"><a href="./iphone14.php" style="text-decoration:underline;"><img
                    src="./iphone14.jpeg" class="navimg"><br>Iphone 14
                Series<a></li>
        <li id="list2"><a href="./iphone13.php"><img src="./iPhone13.jpeg" class="navimg"><br>Iphone 13
                Series<a></li>
        <li id="list3"><a href="./iphone12.php"><img src="./iphone12.jpeg" class="navimg"><br>Iphone 12
                Series<a></li>
        <li id="list4"><a href="./iphone11.php"><img src="./iphone 11.jpeg" class="navimg"><br>Iphone 11
                Series & SE<a></li>

    </ul>

    <div style="font-size: 30px;">Introducing Dynamic Island and A16 Bionic Chip</div>
    <ul>
        <div>
            <li><img src="./dynamicisland.gif" class="gridimg" id="anim2"></li>
            <li><img src="./Apple-A16-Bionic.png.webp" class="gridimg" id="anim"></li>
            <li><img src="./iphone-14-dynamic-island.gif" class="gridimg" id="anim2"></li>
        </div>
    </ul>
    <div>
        <form action="./Bill.php" method="POST">
            <table>
                <tr class="anim">
                    <td>Model</td>
                    <td><img src="./14.webp" class="grid"></td>
                    <td><img src="./14.webp" class="grid" style="height: 230px ;"></td>
                    <td><img src="./14pro.png" class="grid"></td>
                    <td><img src="./14pro.png" class="grid" style="height: 230px ;"></td>
                </tr>
                <div>

                    <tr class="anim">
                        <td>Name</td>
                        <td>Iphone 14</td>
                        <td>Iphone 14 Plus</td>
                        <td>Iphone 14 Pro</td>
                        <td>Iphone 14 Pro Max</td>
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
                        <td>A16 Bionic Chip</td>
                        <td>A16 Bionic Chip</td>
                    </tr>

                    <tr class="anim">
                        <td>Screen Size</td>
                        <td>6.1 inches</td>
                        <td>6.7 inches</td>
                        <td>6.1 inches</td>
                        <td>6.7 inches</td>
                    </tr>

                    <tr class="anim">
                        <td>Camera</td>
                        <td>Dual 12MP <br>(Wide, ultrawide)</td>
                        <td>Dual 12MP <br>(Wide, ultrawide)</td>
                        <td>48MP main, 12MP ultrawide, <br>12MP telephoto with 3x optical zoom </td>
                        <td>48MP main, 12MP ultrawide, <br>12MP telephoto with 3x optical zoom</td>
                    </tr>

                    <tr class="anim">
                        <td>Refresh Rate</td>
                        <td>60Hz</td>
                        <td>60Hz</td>
                        <td>1-120Hz</td>
                        <td>1-120Hz</td>
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
                        <td>Red,Black,White,Blue,Purple</td>
                        <td>Red,Black,White,Blue,Purple</td>
                        <td>Deep Purple,Black,Gold,White</td>
                        <td>Deep Purple,Black,Gold,White</td>
                    </tr>
                    <tr class="anim">
                        <td></td>
                        <?php
                        include "./DB.php";
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 14';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"button141\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }

                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 14 Plus';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo " <td><button name=\"button142\">Buy</button> </td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 14 Pro';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"button143\">Buy</button></td>";
                                } else {
                                    echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                }

                            }

                        }
                        $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPhone 14 Pro Max';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $qty = $row["Quantity"];
                                if ($qty > 0) {
                                    echo "<td><button name=\"button144\">Buy</button></td>";
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