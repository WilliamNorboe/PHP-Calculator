<?php
// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["first_name"]);
    $lastname = htmlspecialchars($_POST["last_name"]);
    $pets = htmlspecialchars($_POST["pet_type"]);

    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    echo "This is The submitted data";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;  
    echo "<br>";
    echo $pets;
    header("Location: ../index.php");
}
else{
    header("Location: ../index.php");
}