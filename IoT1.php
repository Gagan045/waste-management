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
            width: 150px; /* Adjust the label width as needed */
            margin-right: 15px;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 5px;
        }
    </style>
    <title>IoT Bin Set Up Form</title>
</head>
<body>
    <div class="container">
        <h1>IoT Bin Setup Form</h1>
        <form method="post" action="IoT.php">
            <div class="form-group">
                <label for="name">UserName:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="bin-type">Type of Bin:</label>
                <select id="bin-type" name="bin_type">
                    <option value="community">Community</option>
                    <option value="individual">Individual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>