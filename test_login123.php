<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kateda_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$user_name = isset($_POST['uname']);
$emailid = isset($_POST['emailid']);
$pass = isset($_POST['pass_word']);
$cpass = isset($_POST['cpass']);
$mobileno = isset($_POST['contactno']);

$sql = "INSERT INTO users(user_name,email,password,mobile)
VALUES ('$user_name','$emailid','$pass','$mobileno')";

if ($conn->query($sql) === TRUE) {
    /*echo "Thank you for registering with us";*/
    echo "<script type='text/javascript'>alert('Registered successfully!')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

/*function login()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kateda_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $user = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    $sql = "INSERT INTO user (user_name,password)
 VALUES ('$user','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}*/

?>