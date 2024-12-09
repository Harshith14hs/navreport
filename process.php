<?php
session_start();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture and sanitize form inputs
    $_SESSION['form_data'] = [
        'name'    => htmlspecialchars($_POST['name']),
        'email'   => htmlspecialchars($_POST['email']),
        'phone'   => htmlspecialchars($_POST['phone']),
        'dob'     => htmlspecialchars($_POST['dob']),
        'gender'  => htmlspecialchars($_POST['gender']),
        'address' => nl2br(htmlspecialchars($_POST['address'])),
    ];

    // Redirect to the display page
    header("Location: display.php");
    exit();
} else {
    echo "<p style='color:red;'>Invalid Request.</p>";
}
?>
