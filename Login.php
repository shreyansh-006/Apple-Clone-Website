<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        * {
            zoom: 95%;
        }
    </style>
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

    <fieldset style="height:200px;">
        <legend style="font-size:25px;">Login</legend>
    </fieldset><br><br>
    <br>
    <form method="POST">
        <table>
            <tr>
                <td><label for="usernamen">Username : </label></td>
                <td><input type="text" id="usernamen" name="user" placeholder="Username"> </td>
            </tr>
            <tr>
                <td><label for="passwordn">Password : </label></td>
                <td><input type="password" id="passwordn" name="pass" placeholder="Password"> </td>
            </tr>
        </table>
        <br>
        <a href="./Signup.php">Don't have a Account? Signup</a>
        <br>
        <br>
        <button name="login">Login</button>
    </form>

    <?php
    $counter = 0;
    session_start();
    if (isset($_POST['login'])) {
        include 'DB.php';
        if ($_POST['user'] == "" || $_POST['user'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Username \");</script>";
        }
        if ($_POST['pass'] == "" || $_POST['pass'] == NULL) {
            $flag = 1;
            echo "<script>alert(\"Enter Your Password \");</script>";
        }
        if ($flag == 0) {
            $user = $_POST['user'];
            $_SESSION['$user'] = $user;
            $pass = $_POST['pass'];
            $sql = "SELECT USERNAME,PASSWORD FROM SIGNUP WHERE USERNAME = '$user'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($row["PASSWORD"] == $pass) {
                    if ($user == "admin@ad" && $pass == "admin@07") {
                        header("Location:Admin(iphone14).php");
                    } else {
                        header("Location: iphone14.php");
                    }
                } else {
                    echo "<script>alert(\"Password Incorrect \");</>";
                    header("Location: Login.php");
                }

            } else {
                echo "<script>alert(\"Username Not Found \");</>";
                header("Location: Login.php");

            }
        }
    }
    // mysqli_close($conn);

    ?>

</body>

</html>