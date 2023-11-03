<?php
    session_start();
    include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        // $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where name = '$username' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($result);

        $count = mysqli_num_rows($result);
        echo "$count";
        if($count==1){
            $_SESSION['username']=$username;
            header("Location: dashboard.php");
            // echo '<script>window.location.href = "home.html";</script>';
        } else {
            echo '<script>
                alert("Login failed..Invalid username or password!")
                window.location.href="index.html"
                </script>';
        }
    }
?>