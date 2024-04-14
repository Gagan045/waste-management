<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="IoT.css"> <!-- You can link to your own CSS file here -->
    <style>
        body{
            background-color:#5cb874;
            color: #333;
            font-family: Arial, sans-serif;
        }
        /* Add CSS styling for the form layout */
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 200px; /* Adjust the label width as needed */
            margin-right: 15px;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 5px;
        }
    </style>
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="post" action="registration_process.php"> <!-- Change the action attribute to your processing script -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>