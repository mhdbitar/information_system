<!DOCTYPE html>
<html lang="en">

<head>
    <title>Specialization in Information Systems at Umm Al Qura University</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">

    <style type="text/css">
        
        input, textarea {
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
            <li><a href="admin.php" class="active">Admin</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
        <?php } ?>
        <li><a href="lectures.php">Lectures</a></li>
    </ul>

    <h2>Add Lecture</h2>
    <?php
        $connection = mysqli_connect("localhost", "root", "", "information_system");
        if (isset($_POST["submit"]))
        {
            $name = mysqli_real_escape_string($connection,$_POST['name']);
            $description = mysqli_real_escape_string($connection,$_POST['description']);
            
            $target_dir = "../files/";
            $target_file = $target_dir . basename($_FILES["file"]['name']);
            
            if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)) {
                  
            }

            $sql = "INSERT INTO lectures (name, description, file) values('".$name."', '".$description."', '".$_FILES["file"]['name']."')";
            $result = mysqli_query($connection, $sql);

          header("location: admin.php");
        }
    ?>

    <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="input">
            <label>Lecture Name</label>
            <input type="text" name="name">           
        </div>
        <br>

        <div class="input">
            <label>Lecture Description</label>
            <textarea name="description"></textarea>
        </div>
        <br>
        
        <div class="input">
            <label>Lecture File</label>
            <input type="file" name="file">
        </div>
        <br>
        
        <input type="submit" name="submit" value="Add">
    </form>
</body>

</html>