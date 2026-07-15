<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $fullName = $_GET['fullName'];
    $userEmail = $_GET['userEmail'];
    $phoneNumber = $_GET['phoneNumber'];
    $country = $_GET['country'];
    $contactMethod = $_GET['contactMethod'];
    $subscribe = isset($_GET['subscribe']) ? $_GET['subscribe'] : "No";
    $message = $_GET['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
</head>
<body>
    <center>
        <h2>Registration Details</h2>
        <p><strong>Full Name:</strong> <?php echo htmlspecialchars($fullName); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($userEmail); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($phoneNumber); ?></p>
        <p><strong>Country:</strong> <?php echo htmlspecialchars($country); ?></p>
        <p><strong>Preferred Contact Method:</strong> <?php echo htmlspecialchars($contactMethod); ?></p>
        <p><strong>Agreed to Terms:</strong> <?php echo htmlspecialchars($subscribe); ?></p>
        <p><strong>Comments:</strong> <?php echo htmlspecialchars($message); ?></p>
    </center>
</body>
</html>
<?php
}
?>