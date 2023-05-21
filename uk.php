<?php
// Get the input digits and number of phone numbers to generate
$numPhoneNumbers = isset($_POST['numPhoneNumbers']) ? (int) $_POST['numPhoneNumbers'] : 1;

// Generate random numbers for the area code and subscriber number for each phone number
$phoneNumbers = array();
for ($j = 0; $j < $numPhoneNumbers; $j++) {
    $areaCode = '';
    for ($i = 0; $i < 3; $i++) {
        $areaCode .= mt_rand(0, 9);
    }

    $subscriberNumber = '';
    for ($i = 0; $i < 7; $i++) {
        $subscriberNumber .= mt_rand(0, 9);
    }

    // Combine all the digits into the phone number and add it to the array
    $phoneNumbers[] = '+44 (0)' . $areaCode . ' ' . substr($subscriberNumber, 0, 4) . ' ' . substr($subscriberNumber, 4, 4);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="UK cell random number generator, random phone number generator UK, generate UK mobile numbers, British phone number generator, UK telephone number generator, random number generator for UK, UK phone number format">

    <title>UK Phone Number Generator</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            margin-top: 50px;
        }
        form {
            margin-top: 50px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #006F8E;
        }
        p {
            margin-top: 50px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>UK Phone Number Generator</h1>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php">Homepage</a></li>
                <li><a href="usa.php">USA</a></li>
                <li><a href="dubai.php">Dubai</a></li>
                <li><a href="uk.php">UK</a></li>
                <li><a href="australia.php">Australia</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <form method="post">
        <label for="numPhoneNumbers">Enter Number of List:</label>
        <input type="number" id="numPhoneNumbers" name="numPhoneNumbers" min="1" max="100" required value="<?php echo $numPhoneNumbers; ?>">
        <br><br>
        <input type="submit" value="Generate Phone Numbers">
    </form>
    <?php if (!empty($phoneNumbers)): ?>
        <?php foreach ($phoneNumbers as $phoneNumber): ?>
            <p><?php echo $phoneNumber; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
<footer class="footer">
    <nav class="footer-nav">
        <ul class="footer-nav-list">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>
