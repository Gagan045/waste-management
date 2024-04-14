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
    <title>Emergency Waste Collection Form</title>
</head>
<body>
    <div class="container">
        <h1>Emergency Waste Collection Form</h1>
        <form method="post" action="eme_was_coll.php">
            <div class="form-group">
                <label for="name">UserName:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="iot-bin-type">Type of IoT Bin:</label>
                <select id="iot-bin-type" name="iot_bin_type" required>
                    <option value="community">Community</option>
                    <option value="individual">Individual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="collection-date">Date of Collection:</label>
                <input type="date" id="collection-date" name="collection_date" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="trash-level">Trash Level:</label>
                <select id="trash-level" name="trash_level">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>