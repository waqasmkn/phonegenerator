<?php
        // Get user input for the number of phone numbers to generate and the first three digits
        $num_numbers = isset($_POST['num_numbers']) ? $_POST['num_numbers'] : '';
        $first_three = isset($_POST['first_three']) ? $_POST['first_three'] : '';

        // Generate and display the phone numbers
        $phone_numbers = array();
        for ($i = 0; $i < $num_numbers; $i++) {
            $random_number = $first_three . str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT);
            $formatted_number = "+1 (" . substr($random_number, 0, 3) . ") " . substr($random_number, 3, 3) . "-" . substr($random_number, 6);
            array_push($phone_numbers, $formatted_number);
        }
        ?>

<!DOCTYPE html>
<head>
    <meta name="keywords" content="USA random number generator, random cell number generator USA, phone number generator, US phone number generator, random number generator tool, generate random phone numbers, USA phone number format">

    <title>USA Phone Number Generator</title>
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
    <h1>USA Phone Number Generator</h1>
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

    <ul>
            <?php foreach ($phone_numbers as $number): ?>
                <li><?php echo $number; ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- HTML form for user input -->
        <form method="post">
            <label for="num_numbers">Enter Numbers to Generate:</label>
            <input type="number" name="num_numbers" id="num_numbers"><br>
            <label for="first_three">Area Code for any USA State:</label>
 <select id="first_three" name="first_three" min="201" max="999" required>
    <?php
    for ($i = 201; $i <= 999; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>

            <input type="submit" value="Generate" class="button">
        </form>

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




