<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="login.css">
</head>

<body bgcolor="black">
   <script>
      if (sessionStorage.getItem("val") == "1") {
   </script>
   <?php
   session_start();
   if (isset($_POST['button141'])) {
      echo " <img src=\"./iPhone-14-colors.jpg\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 14";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy141\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button142'])) {
      echo " <img src=\"./14Max_Colors.jpg\" style=\"border-radius:10px;height:500px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 14 Plus";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy142\">Buy</button>";
      echo "</form></fieldset>";
   }



   if (isset($_POST['button143'])) {
      echo " <img src=\"./14pro_color.webp\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 14 Pro";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy143\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button144'])) {
      echo " <img src=\"./14promax_colors.jpeg\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 14 Pro Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy144\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button131'])) {
      echo " <img src=\"./iPhone13-color.jpg.slideshow-xlarge_2x.jpg\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 13 Mini";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy131\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button132'])) {
      echo " <img src=\"./iPhone13-color.jpg.slideshow-xlarge_2x.jpg\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 13";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy132\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button133'])) {
      echo " <img src=\"./13pro_colors.gif\" style=\"border-radius:10px;height:400px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 13 Pro";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy133\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button134'])) {
      echo " <img src=\"./13pro_colors.gif\" style=\"border-radius:10px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 13 Pro Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy134\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button121'])) {
      echo " <img src=\"./12_colors.gif\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 12 Mini";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy121\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button122'])) {
      echo " <img src=\"./12_colors.gif\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 12";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy122\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button123'])) {
      echo " <img src=\"./12pro_colors.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 12 Pro ";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy123\">Buy</button>";
      echo "</form></fieldset>";
   }



   if (isset($_POST['button124'])) {
      echo " <img src=\"./12pro_colors.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 12 Pro Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy124\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button111'])) {
      echo " <img src=\"./se_colors.gif\" style=\"border-radius:20px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone SE 2020";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy111\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button112'])) {
      echo " <img src=\"./iphone-11-familycolor.jpg.webp\" style=\"border-radius:10px;height:300px;\">";

      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 11";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy112\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['button113'])) {
      echo " <img src=\"./iPhone-11-colors.jpg.large.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 11 Pro";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy113\">Buy</button>";
      echo "</form></fieldset>";
   }


   if (isset($_POST['button114'])) {
      echo " <img src=\"./iPhone-11-colors.jpg.large.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "IPhone 11 Pro Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buy114\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonmacair'])) {
      echo " <img src=\"./m1_air_colours.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:200px;\"><legend style=\"font-size:30px;\">Details</legend>";

      $name = "MacBook Air M1";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\" >";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"256 or 512\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Gold or Silver or Grey\"> Color</td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buymacair\">Buy</button>";
      echo "</form></fieldset>";
   }
   if (isset($_POST['buttonmacpro'])) {
      echo " <img src=\"./Macbook_pro_m1.png\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook Pro M1";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"256 or 512\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buymacpro\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonm1pro'])) {
      echo " <img src=\"./M1_Pro.png\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook M1 Pro";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"512 or 1024\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buym1pro\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonm1max'])) {
      echo " <img src=\"./M1_Pro.png\" style=\"border-radius:30px;height:600px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook M1 Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"512 or 1024\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buym1max\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonmacm2air'])) {
      echo " <img src=\"./m2_air_colours.gif\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";

      $name = "MacBook Air M2";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Storage : </label></td>";
      echo " <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"256 or 512\">GB </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input style=\"width:90%;\" type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Gold or Silver or Grey or Black\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buymacm2air\">Buy</button>";
      echo "</form>
   </fieldset>";
   }

   if (isset($_POST['buttonmacprom2'])) {
      echo " <img src=\"./mb-pro-m2-removebg-preview.png\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook Pro M2";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"256 or 512\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buymacprom2\">Buy</button>";
      echo "</form></fieldset>";
   }
   if (isset($_POST['buttonm2pro'])) {
      echo " <img src=\"./MB-M2-Pro.png\" style=\"border-radius:20px;height:400px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook M2 Pro";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"512 or 1024\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buym2pro\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonm2max'])) {
      echo " <img src=\"./MB-M2-Pro.png\" style=\"border-radius:30px;height:600px;\">";


      echo "  <fieldset style=\"height:auto;\"><legend style=\"font-size:25px;\">Details</legend>";

      $name = "MacBook M2 Max";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table>";
      echo "<tr><td><label>Name:</label></td><td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>";
      echo "        <tr>";
      echo "            <td><label for=\"storagen\">Storage : </label></td>";
      echo "            <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"512 or 1024\">GB </td>";
      echo "        </tr>";
      echo "        <tr>";
      echo "            <td><label for=\"colorn\">Color : </label></td>";
      echo "            <td> Silver </td>";
      echo "        </tr>";
      echo "        </table>";
      echo "    <button name = \"buym2max\">Buy</button>";
      echo "</form></fieldset>";
   }

   if (isset($_POST['buttonipadair'])) {
      echo " <img src=\"./ipadair_colours.gif\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "IPad Air M1";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Storage : </label></td>";
      echo " <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input style=\"width:90%;\" type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buyipadair\">Buy</button>";
      echo "</form>
   </fieldset>";
   }

   if (isset($_POST['buttonipadm1'])) {
      echo " <img src=\"./iPad Pro 11-inch M1 chip-colours.png\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "IPad Pro M1";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Storage : </label></td>";
      echo " <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"128 or 256\">GB </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buyipadm1\">Buy</button>";
      echo "</form>
   </fieldset>";
   }

   if (isset($_POST['buttonipadm2'])) {
      echo " <img src=\"./ipad-pro-m2-colors.png\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "IPad Pro M2";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Storage : </label></td>";
      echo " <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"256 or 512\">GB </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input style=\"width:90%;\" type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Black or White\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buyipadm2\">Buy</button>";
      echo "</form>
   </fieldset>";
   }
   if (isset($_POST['buttons8'])) {
      echo " <img src=\"./apple-watch-series-8-Colours-1662620370737.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "Apple Watch Series 8";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Size : </label></td>";
      echo " <td><input type=\"text\" id=\"storagen\" name=\"storage\" placeholder=\"41 or 45 \">mm </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buys8\">Buy</button>";
      echo "</form>
   </fieldset>";
   }
   if (isset($_POST['buttonse'])) {
      echo " <img src=\"./Apple_announces-watch-se_09152020_big.jpg.large.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "Apple Watch SE";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Size : </label></td>";
      echo " <td>41mm</td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buyse\">Buy</button>";
      echo "</form>
   </fieldset>";
   }
   if (isset($_POST['buttonultra'])) {
      echo " <img src=\"./apple-watch-ultra-alpine-loop.jpg\" style=\"border-radius:20px;height:400px;\">";


      echo " <fieldset style=\"height:200px;\">
      <legend style=\"font-size:30px;\">Details</legend>";
      $name = "Apple Watch Ultra";
      $_SESSION['$pname'] = $name;

      echo "<form action=\"./Detail.php\" method=\"POST\">";
      echo " <table style=\"height:150px;font-size:25px;\">";
      echo "<tr>
               <td><label>Name:</label></td>
               <td><input type=\"text\" name=\"name\" value=\"$name\"> </td>
            </tr>";
      echo " <tr>";
      echo " <td><label for=\"storagen\">Size : </label></td>";
      echo " <td>49mm </td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td><label for=\"colorn\">Color : </label></td>";
      echo " <td><input type=\"text\" id=\"colorn\" name=\"color\" placeholder=\"Color\">
                  Color</td>";
      echo " </tr>";
      echo " </table>";
      echo " <button name=\"buyultra\">Buy</button>";
      echo "</form>
   </fieldset>";
   }

   ?>
   <script> }
      else {
         window.location.replace("http://localhost/Web_Project/Login.php");
      }
   </script>

</body>

</html>