<?php
include("conection.php");

if (isset($_POST["submit"])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    $count = mysqli_num_rows($result);

    if ($count == 1) { 
        header("Location: home2.php");
    } else {
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password!!!")
        </script>';
    }
}
?>