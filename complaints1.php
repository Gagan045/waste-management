<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="IoT.css">
    <style>
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
        .form-group textarea {
            flex: 1;
            padding: 5px;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px; /* Adjust the textarea height as needed */
        }
        /* Reset default margin and padding */
body, h1, h2, h3, p, span, a, img {
    margin: 0;
    padding: 0;
    border: 0;
  }
  
  /* Set a background color and text color */
  body {
    background-color:#5cb874;
    color: #333;
    font-family: Arial, sans-serif;
  }
  /* ... previous styles ... */

/* Dashboard header styles */
.dashboard-header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }
  
  .company-name {
    font-size: 24px;
    font-weight: bold;
  }

  
  .greeting {
    font-size: 24px; /* Increase the font size */
    font-weight: bold;
    font-family: "Arial", sans-serif; /* Specify a better font */
  }
  
  .points {
    font-size: 24px; /* Increase the font size */
    font-family: "Arial", sans-serif;
    font-weight: bold; /* Specify a better font */
  }
  
  .logout {
    font-family: "Arial", sans-serif; /* Specify a better font */
  }
  
  .logout button {
    font-size: 18px;
    background-color: #5cb874;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .logout button:hover {
    background-color: #555;
  }
  
  /* ... remaining styles ... */
        
    </style>
    <title>Complaints Form</title>
</head>
<body>
    <div class="container">
        <h1>Complaints Form</h1>
        <form method="post" action="complaints.php">
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
                <select id="iot-bin-type" name="iot_bin_type">
                    <option value="community">Community</option>
                    <option value="individual">Individual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pincode">Contact Number:</label>
                <input type="tel" id="pincode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="issue">Issue:</label>
                <textarea id="issue" name="issue" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>