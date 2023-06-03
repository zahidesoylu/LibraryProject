<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "message";

$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Could not connect to database: " . $connect->connect_error);
}
else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['exampleFormControlInput1'];
        $message = $_POST['exampleFormControlTextarea1'];

        $query = "INSERT INTO message (email, message) VALUES ('$email', '$message')";

        if ($connect->query($query) === true) {
            echo "Your message has been successfully saved!";
        } else {
            echo "Save error: " . $connect->error;
        }

        $connect->close();
    }
}
?>
