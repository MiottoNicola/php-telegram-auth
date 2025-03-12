<?php
$error_message = isset($_GET['type']) ? $_GET['type'] : 'An unknown error occurred.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Authentication</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            text-align: center;
            margin-top: 50px;
        }
        .error-container {
            background-color: #ffdddd;
            border: 1px solid #ff0000;
            display: inline-block;
            padding: 20px;
            border-radius: 5px;
        }
        .error-container h1 {
            font-size: 24px;
            color: #ff0000;
        }
        .error-container p {
            font-size: 18px;
            color: #333;
        }
        a {
            color: #1e90ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error</h1>
        <p><?php echo htmlspecialchars($error_message); ?></p>
        <p><a href="index.php">Go back to the login page</a></p>
    </div>
</body>
</html>
