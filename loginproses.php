<?php 
    include "koneksi.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['username'] == "fiansaputra100"){
        header("Location:index.html");
    }
    else if($row['password'] == "fian12345"){
        header("Location:index.html");
    }
    else if($row['username'] == "satriayudhistira500"){
        header("Location:index.html");
    }

    else if($row['password'] == "satria12345"){
        header("Location:index.html");
    }

    else{
        header("Location:logintiket.php?error=failed");
    }
?>