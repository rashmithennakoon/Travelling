<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'travelling') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['comment'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            
            $sql = "INSERT INTO `comment` (`Name`, `Mobile_No`, `Email`, `Comment`) VALUES ('$name','$phone','$email','$comment')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("Location: thank.html");
            } else {
                echo 'Error Occurred: ' . mysqli_error($conn);
            }
        }
    }
?>