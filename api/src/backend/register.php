<?php
    include("../../config/db_connection.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_pass = md5($password);

    $sql_validate_email = "SELECT * from users Where email = '$email'";
    $result = pg_query($conn, $sql_validate_email);
    $total = pg_num_rows($result);

    if ($total > 0) {
        echo "<script>alert('Email already exist')</script>";
        header("refresh:0;url=../register_form.html");
    } else { 
        $sql = "
        INSERT INTO users (email, password)
        VALUES ('$email', '$enc_pass')";
        $ans = pg_query($conn, $sql);
        if ($ans) {
            echo "<script>alert('User has been registered')</script>";
            header("refresh:0;url=../login_form.html");
        } else {
            echo "Error: ".pg_last_error();
        }
    }
    pg_close($conn);

?>