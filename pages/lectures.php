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
            <li><a href="admin.php">Admin</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
        <?php } ?>
        <li><a href="lectures.php" class="active">Lectures</a></li>
    </ul>

    <h2>Lectures page</h2>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Lecture Name</th>
                <th>Lecture Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $connection = mysqli_connect("localhost", "root", "", "information_system");
                $sql = "SELECT * FROM lectures";
                $result = mysqli_query($connection, $sql);

                  if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                        echo "<td>". $row['name']. "</td>";
                        echo "<td>". $row['description']. "</td>";
                        echo "<td><a href='../files/". $row['file'] ."' target='_blank' class='btn edit'>Download</a></td>";
                      echo "</tr>";
                    }
                  }
              ?>
        </tbody>
    </table>

    <h2>Send Message to Supervisor</h2>
    
    <?php
        if (isset($_POST["submit"]))
        {
            $name = mysqli_real_escape_string($connection,$_POST['name']);
            $number = mysqli_real_escape_string($connection,$_POST['number']);
            $message = mysqli_real_escape_string($connection,$_POST['message']);
            
            $txt = $name . $number . $message;
            file_put_contents("../files/".$name.".txt", $txt);
        }
    ?>

    <form action="lectures.php" method="post">
        <div class="input">
            <label>Student Name</label>
            <input type="text" name="name">           
        </div>
        <br>

        <div class="input">
            <label>Student Id Number</label>
            <input type="text" name="number">
        </div>
        <br>
        
        <div class="input">
            <label>Message</label>
            <textarea name="message"></textarea>
        </div>
        <br>
        
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>