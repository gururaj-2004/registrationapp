<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $phone   = $_POST["phone"];
    $course  = $_POST["course"];
    $address = $_POST["address"];

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Application Submitted</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
    <div class='container'>
        <h2>Application Submitted Successfully!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Course Applied:</strong> $course</p>
        <p><strong>Address:</strong> $address</p>
        <a href='index.html'><button>Go Back</button></a>
    </div>
    </body>
    </html>";
}
?>
