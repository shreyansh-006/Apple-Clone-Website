<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login.css">
</head>

<body bgcolor="black">
      <script>
        sessionStorage.setItem("val", "0");
    </script>
    <img src="./apple-logo-2018.gif" class="logo">
    <div class="image">
        <img src="./Login1.webp" height="500px">
        <img src="./Login2.jpeg" height="500px">
    </div>
    <fieldset>
        <legend style="font-size:25px;">Signup</legend>
    </fieldset>
    <br>
    <br>
    <br>
    <!-- action="./Signup.php" -->
    <form name="check" method="POST">
        <table>
            <tr>
                <td><label for="namen">Name : </label></td>
                <td><input type="text" id="namen" name="name" placeholder="Name"> </td>
            </tr>
            <tr>
                <td><label for="emailn">Email : </label></td>
                <td><input type="text" id="emailn" name="email" placeholder="Email"> </td>
            </tr>
            <tr>
                <td><label for="addressn">Address : </label></td>
                <td><input type="textarea" id="addressn" name="address" placeholder="Address" style="height:100px ;">
                </td>
            </tr>
            <tr>
                <td><label for="pincoden">Pincode : </label></td>
                <td><input type="text" id="pincoden" name="pincode" placeholder="Pincode"> </td>
            </tr>
            <tr>
                <td><label for="mobilen">Mobile No : </label></td>
                <td><input type="text" id="mobilen" name="mobile" placeholder="Mobile"> </td>
            </tr>
            <tr>
                <td><label for="usern">Username : </label></td>
                <td><input type="text" id="usern" name="user" placeholder="Username"> </td>
            </tr>
            <tr>
                <td><label for="passn">Password : </label></td>
                <td><input type="password" id="passn" name="pass" placeholder="Password"> </td>
            </tr>
        </table>
        <br>
        <a href="./Login.php">Already have a Account? Login</a>
        <br>
        <br>
        <button name="signup">Signup</button>
    </form>

    <?php
    session_start();
    if (isset($_POST['signup'])) {

        $flag = 0;
        include 'DB.php';


        if ($_POST['name'] == "" || $_POST['name'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Name \");</script>";
        }
        if ($_POST['email'] == "" || $_POST['email'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Email ID \");</script>";
        }
        if ($_POST['address'] == "" || $_POST['address'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Address \");</script>";
        }
        if ($_POST['pincode'] == "" || $_POST['pincode'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Pincode \");</script>";
        }
        if ($_POST['mobile'] == "" || $_POST['mobile'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Mobile Number \");</script>";
        }
        $user = $_POST['user'];
        $sql = "SELECT USERNAME FROM SIGNUP WHERE USERNAME = '$user'";
        $result = mysqli_query($conn, $sql);
        if ($_POST['user'] == "" || $_POST['user'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Unique Username \");</script>";
        } else if (mysqli_num_rows($result) > 0) {
            $flag = 1;
            echo "<script>alert(\"Username is Already Existed.... \");</script>";
            header("Location: http://localhost/Web_Project/Signup.php");
        }
        if ($_POST['pass'] == "" || $_POST['pass'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Password \");</>";
        }
        if ($flag == 0) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $pincode = $_POST['pincode'];
            $mobile = $_POST['mobile'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $_SESSION['$user'] = $user;
            $sql = "INSERT INTO SIGNUP VALUES('$name','$email','$address','$pincode','$mobile','$user','$pass')";
            if (mysqli_query($conn, $sql) === TRUE) {

                echo "<script>alert(\"Successfully....\");</script>";
                echo "<script>alert(\"You Cannot Cancel Order Once it is Placed\");</script>    ";
                header("Location: iphone14.php");
            }
        }
        // mysqli_close($conn);
    }
    ?>
</body>

</html>