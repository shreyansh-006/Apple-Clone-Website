<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ipads</title>
    <link rel="stylesheet" href="./iphone.css">
    <link rel="stylesheet" href="./index.css">
    <style>
        * {
            zoom: 98%;
        }
        table{
            z-index: 0;
        }
    </style>
</head>

<body bgcolor="black">
<?php
                    include "DB.php";?>
    <script>
        if (sessionStorage.getItem("val") == "0") {
            sessionStorage.setItem("val", "1");
        }</script>
    <div class="navbar">
        <ul style="font-size: 1px;">
            <li id="list1"><a href="./iphone14.php">IPhones<a></li>
            <li id="list2"><a href="./Index_Macs.php">Macs<a></li>
            <li id="list3" style="transform:scale(1.2);"><a href="./Ipad.php" style="text-decoration:underline;">IPad<a>
            </li>
            <li id="list4"><a href="./Watch.php">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <div id="begin" style="display: inline-block;font-size:30px;"> <br>
        All screen. All colourful.
        <br>
        Jot it down. Type it up.
        <br>
        Take it with you.

    </div>
    <div>
        <img src="./iPad-Pro-Reviews-11052018_inline.gif.large.gif" class="gridimg" id="anim"
            style="width:60%;height:75%;border-radius:30px;">
    </div>
    <div id="begin" style="font-size: 30px;">
        Which iPad is right for you?

    </div>
    <div>
        <div>
            <center>

                <form action="./Bill.php" method="POST">
                    <table>
                        <tr class="anim">
                            <td>Model</td>
                            <td><img src="./ipad_air_m1_preview.png" class="grid"></td>
                            <td><img src="./ipad_prp_m1_preview_1.png" class="grid"></td>
                            <td><img src="./ipad_pro_m2.png" class="grid" style="height: 230px ;"></td>
                        </tr>
                        <div>

                            <tr class="anim">
                                <td>Name</td>
                                <td>IPad Air M1</td>
                                <td>IPad Pro M1</td>
                                <td>IPad Pro M2</td>
                            </tr>
                            <tr class="anim">
                                <ul></ul>
                                <td>Specifications</td>
                                <td>__________________________</td>
                                <td>__________________________</td>
                                <td>____________________________________</td>
                                </ul>
                            </tr>
                            <tr class="anim">
                                <td>Chip</td>
                                <td>M1 Chip</td>
                                <td>M1 Chip</td>
                                <td>M2 Chip</td>
                            </tr>

                            <tr class="anim">
                                <td>Screen Size</td>
                                <td>(10.9″) Liquid Retina display</td>
                                <td>(11″) Liquid Retina display</td>
                                <td>(12.9″) Liquid Retina XDR
                                    display</td>
                            </tr>

                            <tr class="anim">
                                <td>Camera & Audio</td>
                                <td>12MP Ultra Wide
                                    front camera <br>12MP Wide camera
                                    <br>4K video
                                </td>
                                <td>12MP Ultra Wide
                                    front camera <br>
                                    TrueDepth camera
                                    system12MP Wide camera <br>
                                    10MP Ultra Wide camera
                                    4K video, ProRes</td>
                                <td>12MP Ultra Wide
                                    front camera <br>
                                    TrueDepth camera
                                    system12MP Wide camera <br>
                                    10MP Ultra Wide camera
                                    4K video, ProRes</td>

                            </tr>

                            <tr class="anim">
                                <td>Security</td>
                                <td>Touch-ID</td>
                                <td>Face ID</td>
                                <td>Face ID</td>

                            </tr>

                            <tr class="anim">
                                <td>Display</td>
                                <td>P3 wide colour <br>
                                    Anti-reflective coating</td>
                                <td>ProMotion technology <br>
                                    P3 wide colour <br>
                                    Anti-reflective coating</td>
                                <td>ProMotion technology <br>
                                    P3 wide colour <br>
                                    Anti-reflective coating</td>

                            </tr>
                            <tr class="anim">
                                <td></td>
                                <?php $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPad Air M1';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name=\"buttonipadair\">Buy</button></td>";
                                        } else {
                                            echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                        }

                                    }

                                }
                                $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPad Pro M1';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name=\"buttonipadm1\">Buy</button></td>";
                                        } else {
                                            echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                        }

                                    }

                                }
                                $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'IPad Pro M2';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name=\"buttonipadm2\">Buy</button></td>";
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
            </center>

        </div>
</body>

</html>