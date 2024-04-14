<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="IoT.css">
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
    <title>Food Donation Form</title>
</head>
<body>
    <div class="container">
        <h1>Food Donation Form</h1>
        <form method="post" action="food_doantion.php">
            <div class="form-group">
                <label for="name">UserName:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" maxlength="6" minlength="6" required>
            </div>
            <div class="form-group">
                <label for="location">Address:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="satisfies-hunger">Satisfies Hunger of:</label>
                <input type="number" id="satisfies-hunger" name="satisfies_hunger" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>