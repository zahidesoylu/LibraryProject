<?php
error_reporting(0);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Could not connect to database: " . $connect->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['userFormNameSurname'];
        $email = $_POST['userFormEmail'];
        $password = $_POST['userFormPassword'];

        $query = "SELECT * FROM user WHERE fullname = '$fullname' AND email = '$email' AND password = '$password'";
        $result = $connect->query($query);

        if ($result->num_rows > 0) {
            echo "User verified, Login Successful.";
        } else {
            echo "User could not be verified!";
        }

        $connect->close();
    }
}
?>

