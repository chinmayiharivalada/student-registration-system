
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

// Get and safely process form data
$fullname = htmlspecialchars(trim($_POST["fullname"] ?? ""), ENT_QUOTES, "UTF-8");
$email = htmlspecialchars(trim($_POST["email"] ?? ""), ENT_QUOTES, "UTF-8");
$phone = htmlspecialchars(trim($_POST["phone"] ?? ""), ENT_QUOTES, "UTF-8");
$dob = htmlspecialchars($_POST["dob"] ?? "", ENT_QUOTES, "UTF-8");
$gender = htmlspecialchars($_POST["gender"] ?? "", ENT_QUOTES, "UTF-8");
$college = htmlspecialchars(trim($_POST["college"] ?? ""), ENT_QUOTES, "UTF-8");
$course = htmlspecialchars($_POST["course"] ?? "", ENT_QUOTES, "UTF-8");
$year = htmlspecialchars($_POST["year"] ?? "", ENT_QUOTES, "UTF-8");
$address = htmlspecialchars(trim($_POST["address"] ?? ""), ENT_QUOTES, "UTF-8");

// Server-side validation
if (
    $fullname === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    !preg_match("/^[0-9]{10}$/", $phone) ||
    $dob === "" ||
    $gender === "" ||
    $college === "" ||
    $course === "" ||
    $year === "" ||
    $address === ""
) {
    echo "Invalid or incomplete information. Please go back and check your form.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container result-card">

        <div class="success-icon">✓</div>

        <h1>Registration Successful!</h1>

        <p class="subtitle">
            Your information has been submitted successfully.
        </p>

        <h2>Personal Information</h2>

        <div class="result-row">
            <span class="result-label">Full Name</span>
            <span class="result-value"><?php echo $fullname; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Email Address</span>
            <span class="result-value"><?php echo $email; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Phone Number</span>
            <span class="result-value"><?php echo $phone; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Date of Birth</span>
            <span class="result-value"><?php echo $dob; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Gender</span>
            <span class="result-value"><?php echo $gender; ?></span>
        </div>

        <h2>Educational Information</h2>

        <div class="result-row">
            <span class="result-label">College Name</span>
            <span class="result-value"><?php echo $college; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Course</span>
            <span class="result-value"><?php echo $course; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Current Year</span>
            <span class="result-value"><?php echo $year; ?></span>
        </div>

        <div class="result-row">
            <span class="result-label">Address</span>
            <span class="result-value"><?php echo $address; ?></span>
        </div>

        <a href="index.php" class="back-btn">Back to Registration</a>

    </div>

</body>
</html>
