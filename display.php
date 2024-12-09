
<?php
session_start();

// Check if form data is available
if (!isset($_SESSION['form_data'])) {
    echo "<p style='color:red;'>No data found. Please submit the form first.</p>";
    exit();
}

$data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Application Submitted Successfully</h2>
        <p><strong>Name:</strong> <?php echo $data['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $data['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $data['phone']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $data['dob']; ?></p>
        <p><strong>Gender:</strong> <?php echo $data['gender']; ?></p>
        <p><strong>Address:</strong><br> <?php echo $data['address']; ?></p>
    </div>
</body>
</html>

<?php
// Clear session data to avoid resubmission
session_unset();
session_destroy();
?>
