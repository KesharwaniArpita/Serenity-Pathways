<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Format the data
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    // Open the file in append mode and save the data
    $file = fopen('form_data.txt', 'a');
    fwrite($file, $data);
    fclose($file);
    
    echo "Your message has been sent successfully!";
} else {
    // If not a POST request, redirect back to the form page
    header("Location: helpline.html");
    exit;
}
?>
