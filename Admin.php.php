<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $userEmail = $_POST['userEmail'];
    $phoneNumber = $_POST['phoneNumber'];
    $country = $_POST['country'];
    $contactMethod = $_POST['contactMethod'];
    $subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : "No";
    $message = $_POST['message'];

    echo "Full Name: " . $fullName . "<br>";
    echo "Email: " . $userEmail . "<br>";
    echo "Phone Number: " . $phoneNumber . "<br>";
    echo "Country: " . $country . "<br>";
    echo "Preferred Contact Method: " . $contactMethod . "<br>";
    echo "Agreed to Terms: " . $subscribe . "<br>";
    echo "Comments: " . $message . "<br>";
}
?>