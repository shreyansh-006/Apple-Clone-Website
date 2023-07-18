<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches</title>
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
            <li id="list3"><a href="./Ipad.php">IPad<a></li>
            <li id="list4" style="transform:scale(1.2);"><a href="./Watch.php"
                    style="text-decoration:underline;">Watch<a></li>
            </li>
            <li id="list5" style="float:right;"><a href="./User.php"><img src="./userlogo.png" class="navimg"
                        style="height: 60px;"><br><a>
            </li>
        </ul>
    </div>
    <div id="begin" style="display: inline-block;font-size:30px;"> <br>
        A healthy leap ahead.
        <br>A great deal
        to love. <br>

    </div>
    <div>
        <img src="./Apple-Watch-Series-4-Reviews-09192018_inline.gif.large.gif" class="gridimg" id="anim"
            style="width:auto;height:40%;border-radius:30px;">
    </div>
    <div id="begin" style="font-size: 30px;">
        Which Watch is right for you?

    </div>
    <div>
        <div>
            <center>

                <form action="./Bill.php" method="POST">
                    <table>
                        <tr class="anim">
                            <td>Model</td>
                            <td><img src="./Apple Watch Series 8 Aluminium Silver.png" class="grid"
                                    style="height: 270px ;"></td>
                            <td><img src="./watch_se.png" class="grid" style="height: 230px ;"></td>
                            <td><img src="./AMZ_FamilyStripe_Watch_Ultra_LTE._CB605502510_.png" class="grid"
                                    style="height: 290px ;"></td>
                        </tr>
                        <div>

                            <tr class="anim">
                                <td>Name</td>
                                <td>Apple Watch Series 8 </td>
                                <td>Apple Watch SE</td>
                                <td>Apple Watch Ultra</td>
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
                                <td>Size</td>
                                <td>41mm or 45 mm <br>Swimproof
                                    IP6X dust resistant</td>
                                <td>41 mm </td>
                                <td>49 mm <br> Swimproof1
                                    IP6X dust resistant1</td>
                            </tr>

                            <tr class="anim">
                                <td>Apps</td>
                                <td>ECG app</td>
                                <td>-</td>
                                <td>ECG app</td>
                            </tr>

                            <tr class="anim">
                                <td> </td>
                                <td>Blood Oxygen app
                                </td>
                                <td>-</td>
                                <td>Blood Oxygen app</td>

                            </tr>

                            <tr class="anim">
                                <td>Sensors</td>
                                <td>Temperature sensing <br>
                                    Cycle Tracking
                                    with retrospective
                                    ovulation estimates
                                    <br>Crash Detection <br>
                                    86-decibel Siren
                                    to attract attention
                                </td>
                                <td>Cycle Tracking</td>
                                <td>Temperature sensing <br>
                                    Cycle Tracking
                                    with retrospective
                                    ovulation estimates <br>Crash Detection <br>
                                    86-decibel Siren
                                    to attract attention</td>

                            </tr>

                            <tr class="anim">
                                <td>Display</td>
                                <td>Always-On Retina display <br>
                                    up to 1,000 nits</td>
                                <td>Retina display <br>
                                    up to 1,000 nits</td>
                                <td>Always-On Retina display <br>
                                    up to 2,000 nits</td>

                            </tr>
                            <tr class="anim">
                                <td></td>
                                <?php
                                $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'Apple Watch Series 8';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name='buttons8'>Buy</button></td>";
                                        } else {
                                            echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                        }

                                    }

                                }
                                $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'Apple Watch SE';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name=\"buttonse\">Buy</button></td>";
                                        } else {
                                            echo "<td style =\" border: 2px solid red;border-radius: 50%;background-color: white;color: red;\">Out of Stock</td>";
                                        }

                                    }

                                }
                                $sql = "SELECT * FROM `STOCKS` WHERE NAME = 'Apple Watch Ultra';";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $qty = $row["Quantity"];
                                        if ($qty > 0) {
                                            echo "<td><button name=\"buttonultra\">Buy</button></td>";
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