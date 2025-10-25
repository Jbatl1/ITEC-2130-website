<?php
    echo "<h1>Thank you for your registrations</h1> <br> <br>";
    if($_POST["password1"] != $_POST["password2"]) {
        echo "Passwords don't match. <br>";
        exit();
    }
    echo "<h2>Your personal information</h2>";
    echo "Your first name: " . $_POST["fName"] . "<br>";
    echo "Your last name: " . $_POST["lName"] . "<br>";
    echo "Your email: " . $_POST["email"] . "<br>";
    echo "Your phone number: " . $_POST["phone"] . "<br>";
    echo "Your level: " . $_POST["level"] . "<br>";

    echo "<h2>IT References</h2>";
    if(isset($_POST["computer"]) && $_POST["computer"] == "yes") {
        echo "You own a computer <br>";
    }

    echo "Your favorite web browser:<br> ";
    if(isset($_POST["edge"]) && $_POST["edge"] == "edge") {
        echo $_POST["edge"] . "<br>";
    }
    if(isset($_POST["firefox"]) && $_POST["firefox"] == "firefox") {
        echo $_POST["firefox"] . "<br>";
    }
    if(isset($_POST["chrome"]) && $_POST["chrome"] == "chrome") {
        echo $_POST["chrome"] . "<br>";
    }
    if(isset($_POST["safari"]) && $_POST["safari"] == "safari") {
        echo $_POST["safari"] . "<br>";
    }
    echo "Your favorite computer brand: " . $_POST["brand"] . "<br>";
    echo "Your concentration: " . $_POST["conc"] . "<br>";
?>