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

        table, th, td {
            border: 1px solid black;
            padding: 20px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: 1px solid transparent;
            text-decoration: none;
            color: white;
        }

        .add {
            background: #23a1ad;    
        }

        .delete {
            background: #ad2323c2;
            cursor: pointer;
            width: 60px;
            padding: 11.5px;
        }

        .edit {
            background: #23ad34;  
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

    <h2>Admin page</h2>
    <?php
        $connection = mysqli_connect("localhost", "root", "", "information_system");
        if (isset($_POST["submit"]))
        {
            $name = mysqli_real_escape_string($connection,$_POST['full_name']);
            $password = mysqli_real_escape_string($connection,$_POST['password']);
            $email = mysqli_real_escape_string($connection,$_POST['email']);
            
            $sql = "INSERT INTO users (full_name, email, password) values('".$name."', '".$email."', '".$password."')";
            $result = mysqli_query($connection, $sql);

          header("location: ../index.php");
        }
    ?>

    <a href="add.php" class="add btn">Add Lecture</a>
    <br><br><br>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Lecture Name</th>
                <th>Lecture Description</th>
                <th>Lecture File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM lectures";
                $result = mysqli_query($connection, $sql);

                  if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                        echo "<td>". $row['name']. "</td>";
                        echo "<td>". $row['description']. "</td>";
                        echo "<td><a href='../files/". $row['file'] ."' target='_blank'>". $row['file'] ."</a></td>";
                        echo "<td><a href='edit.php?id=". $row['id'] ."' class='edit btn'>Edit</a> <button class='delete btn' onclick='delete_lecture(". $row['id'] .")'>Delete</button></td>";
                      echo "</tr>";
                    }
                  }
              ?>
        </tbody>
    </table>

    <script>
        function delete_lecture(id) {
            if (confirm("Are you sure ?")) {
                window.location = "delete.php?id=" + id;
            }
        }
    </script>
</body>
</html>