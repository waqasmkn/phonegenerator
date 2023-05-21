<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $areaCode = isset($_POST['areaCode']) ? $_POST['areaCode'] : '';
    $numPhoneNumbers = isset($_POST['numPhoneNumbers']) ? (int)$_POST['numPhoneNumbers'] : 1;

    $phoneNumbers = array();
    for ($i = 0; $i < $numPhoneNumbers; $i++) {
        $number = mt_rand(1000, 9999) . mt_rand(1000, 9999);
        $phoneNumbers[] = '+61 ' . $areaCode . ' ' . $number;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="Australia random cell number generator, random phone number generator Australia, generate Australian mobile numbers, Australian phone number generator, random number generator for Australia, Australia phone number format, mobile number generator">

    <title>Australia Phone Number Generator</title>
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
    <h1>Austrilia Phone Number Generator</h1>
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


    <form method="POST">
        <label for="areaCode">Area Code:</label>
    <select id="areaCode" name="areaCode" min="0" max="99" required >
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="07">07</option>
  <option value="08">08</option>
</select>


        <br><br>

        <label for="numPhoneNumbers">Number of Phone Numbers:</label>
                <input type="text" id="numPhoneNumbers" name="numPhoneNumbers" min="0" max="99" required>

        <br><br>

        <input type="submit" value="Generate Phone Numbers">
    </form>

    <?php if (!empty($phoneNumbers)): ?>
        <h2>Generated Phone Numbers:</h2>
        <ul>
            <?php foreach ($phoneNumbers as $phoneNumber): ?>
                <li><?php echo $phoneNumber; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
