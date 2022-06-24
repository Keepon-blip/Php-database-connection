<?php
$response='';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if ( isset($_POST['submitButton']) )
{
    // 1. Fetch form data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $message = $_POST['message'];
    // 2. Submit form data
    $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message)VALUES('$firstName', '$lastName', '$email', '$phone', '$message')");

    if($insertData)
    {
        $response = "Data submitted successfully.";
    }
    else
    {
        $response = "Error occurred" .mysqli_error($conn);
    }

}

?>