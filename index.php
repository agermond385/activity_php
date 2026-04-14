<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Basic WordPress Customization</title>
</head>
<body>
    
    <h1>Exploring Basic WordPress Customization</h1>
    <p>Annabelle Germond</p>
    <p><?php echo date("F j, Y"); ?></p>

    <?php
    // Defines variables
    $name = "Annabelle Germond"; //string
    $age = 25; // integer
    $isStudent = true; // boolean

    // User defined function that uses variables
    function createMessage($name,$age) {
        return "Hello, my name is $name and I am $age years old.";
    }

    // Calls the function and displays the message
    $result = createMessage($name, $age);

    // Displays the result
    echo "<h2>$result</h2>";

    // Comparison paragraph 
    echo "<P>JavaScript runs in the browser and is used for client side interactivity; while PHP runs on the server side and is used to generate dynamic content before the page is sent to the browser.</p>";
    ?>

</body>
</html>
