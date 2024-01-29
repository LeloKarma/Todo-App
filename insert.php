<?php

require "config.php";


    // Check if the form field exists and is not empty
    if (isset($_POST['submit'])) {

        $task = $_POST['myTask'];
        $insert = $conn->prepare("INSERT INTO task(name) VALUES (:name)");

    $insert->execute(array(':name' => $task));
}

header('location: index.php');


?>