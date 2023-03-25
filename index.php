<?php
phpinfo();

echo "<br>";

define("WEBSITE_NAME", "My Website");

echo WEBSITE_NAME;

echo "<br>";

echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server address: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "File name: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo "File path: " . $_SERVER['SCRIPT_NAME'] . "<br>";

echo "<br>";

$age = 10;

switch ($age) {
    case ($age < 5):
        echo "Stay at home";
        break;
    case ($age == 5):
        echo "Go to Kindergarden";
        break;
    case ($age >= 6 && $age <= 12):
        echo "Go to grade: " . ($age - 5);
        break;
    default:
        echo "Age is not within the specified range";
        break;
}
?>