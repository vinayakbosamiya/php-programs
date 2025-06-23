<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>

<h2>Check Palindrome</h2>

<form method="post">
    Enter a string: <input type="text" name="text" required>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $reversed = strrev($text);

    echo "<br>Entered String: <strong>$text</strong><br>";
    echo "Reversed String: <strong>$reversed</strong><br>";

    if (strcasecmp($text, $reversed) == 0) {
        echo "<p style='color:green;'>It is a Palindrome!</p>";
    } else {
        echo "<p style='color:red;'>It is NOT a Palindrome.</p>";
    }
}
?>

</body>
</html>
