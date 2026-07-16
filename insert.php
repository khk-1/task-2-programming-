<?php

include "db.php";

if(isset($_POST['name']) && isset($_POST['age'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = (int)$_POST['age'];

    $sql = "INSERT INTO users (name, age, status)
            VALUES ('$name', '$age', 0)";

    mysqli_query($conn, $sql);
}

?>