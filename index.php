
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div class="container">

        <h1>Student Registration Form</h1>
        <p class="subtitle">Enter your details to complete registration</p>

        <form action="process.php" method="POST" id="registrationForm">

            <h2>Personal Information</h2>

            <label>Full Name</label>
            <input type="text" name="fullname" id="fullname" placeholder="Enter your full name" required>

            <label>Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label>Phone Number</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter 10-digit phone number" pattern="[0-9]{10}" required>

            <label>Date of Birth</label>
            <input type="date" name="dob" required>

            <label>Gender</label>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Other">Other</option>
            </select>

            <h2>Educational Information</h2>

            <label>College Name</label>
            <input type="text" name="college" placeholder="Enter your college name" required>

            <label>Course</label>
            <select name="course" required>
                <option value="">Select Course</option>
                <option value="Computer Science Engineering">Computer Science Engineering</option>
                <option value="Information Science Engineering">Information Science Engineering</option>
                <option value="Electronics Engineering">Electronics Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Other">Other</option>
            </select>

            <label>Current Year</label>
            <select name="year" required>
                <option value="">Select Year</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>

            <label>Address</label>
            <textarea name="address" placeholder="Enter your address" required></textarea>

            <button type="submit">Submit Registration</button>

        </form>

    </div>

    <script src="script.js"></script>

</body>
</html>
