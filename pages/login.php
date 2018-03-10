<!DOCTYPE html>
<html lang="en">

<head>
    <title>Specialization in Information Systems at Umm Al Qura University</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">

    <style type="text/css">
        
        input {
            padding: 5px;
            width: 100%;
        }

        input[type="submit"] {
            border: 0;
            padding: 10px;
            width: 10%;
            background: #23a1ad;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php session_start(); ?>
    <ul>
        <li><a href="../index.php">Information Systems</a></li>
        <li><a href="register.php">Register</a></li>
        <?php if (isset($_SESSION['login'])) { ?>
            <li><a href="logout.php">Sign out</a></li>
            <li><a href="admin.php">Admin</a></li>
        <?php } else { ?>
            <li><a href="login.php" class="active">Login</a></li>
        <?php } ?>
        <li><a href="lectures.php">Lectures</a></li>
    </ul>

    <h2>Sign in here</h2>
    <?php

        $connection = mysqli_connect("localhost", "root", "", "information_system");
        if (isset($_POST["submit"]))
        {
            $password = mysqli_real_escape_string($connection,$_POST['password']);
            $email = mysqli_real_escape_string($connection,$_POST['email']);
            
            $sql = "SELECT * FROM users where email='".$email."' AND password='".$password."'";
            $result = mysqli_query($connection, $sql);

            if ($result->num_rows == 1) {
                $_SESSION['login'] = 1;
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['full_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['is_admin'] = $row['is_admin'];

                if ($row['is_admin'] == "1") {
                  header("location: admin.php");
                } else {
                  header("location: ../index.php");
                }
            }
        }
    ?>
    <form action="login.php" method="post">
        <div class="input">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <br>
        
        <div class="input">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <br>
        
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>