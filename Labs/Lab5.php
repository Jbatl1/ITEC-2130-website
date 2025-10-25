<?php
    echo "<h1> Thank you for taking the survey <h1/>";
    echo "Below are your answers to the survey questions: <br>";

    echo "<h2> 1.Demographic Information: </h2>";
    echo "Your gender: " . $_POST["gender"] . "<br>";
    echo "Your age: " . $_POST["age"] . "<br>";
    echo "Your level: " . $_POST["level"] . "<br>";
    echo "Your school: " . $_POST["school"] . "<br>";

    echo "<h2> 2.Have Your Computers been infected by a virus before? </h2>";
    echo "You responded: " . $_POST["virus"] . "<br>";

    echo "<h2> 3.What anti virus software do you usually use? </h2>";
    if(isset($_POST["norton"])) {
        echo $_POST["norton"] . "<br>";
    }
    if(isset($_POST["mcafee"])) {
        echo $_POST["mcafee"] . "<br>";
    }
    if(isset($_POST["kasperski"])) {
        echo $_POST["kasperski"];
    }
    if(isset($_POST["avg"])) {
        echo $_POST["avg"] . "<br>";
    }
    if(isset($_POST["malwarebytes"])) {
        echo $_POST["malwarebytes"] . "<br>";
    }
    if(isset($_POST["avast"])) {
        echo $_POST["avast"] . "<br>";
    }

    echo "<h2> 4.Your rating: </h2>";
    echo "I know how to create a strong password: " . $_POST["question1"] . "<br>";
    echo "I know how to remove malware from my computer: " . $_POST["question2"] . "<br>";
    echo "I know how to protect my personal information when surfing the Internet: " . $_POST["question3"] . "<br>";
?>