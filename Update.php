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
    <fieldset style="height:auto;">
        <legend style="font-size:25px;">Update</legend>
        <br>
        *Keep it Blank if you don't want to Update that Data.<br>

        <form action="" method="POST">
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
                    <td><input type="textarea" id="addressn" name="address" placeholder="Address"
                            style="height:100px ;">
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
                    <td><label for="passn">Password : </label></td>
                    <td><input type="Password" id="passn" name="pass" placeholder="Password"> </td>
                </tr>
            </table>
            <br>
            <br>
            <button name="update">Update</button>
        </form>
    </fieldset>

    <?php
    session_start();
    include 'DB.php';

    $user = $_SESSION['$user'];

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $mobile = $_POST['mobile'];
        $pass = $_POST['pass'];

        if ($name != "" || $name != NULL) {
            $sql = "UPDATE SIGNUP SET NAME = '$name' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        if ($email != "" || $email != NULL) {
            $sql = "UPDATE SIGNUP SET EMAIL = '$email' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        if ($address != "" || $address != NULL) {
            $sql = "UPDATE SIGNUP SET ADDRESS = '$address' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        if ($pincode != "" || $pincode != NULL) {
            $sql = "UPDATE SIGNUP SET PINCODE = '$pincode' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        if ($mobile != "" || $mobile != NULL) {
            $sql = "UPDATE SIGNUP SET MOBILE = '$mobile' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        if ($pass != "" || $pass != NULL) {
            $sql = "UPDATE SIGNUP SET PASSWORD = '$pass' WHERE USERNAME = '$user'";
            mysqli_query($conn, $sql);
        }
        header("Location:User.php");
    }

    ?>
</body>

</html>