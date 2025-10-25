<?php
    echo " <h1> Thank you for taking the survey </h1>";
    echo " <h2>Below are the answers to the survey</h2>";
    echo "Your favorite website: " . $_POST["website"] . "<br>";
    echo "Your favorite color: " . $_POST["color1"] . "<br>";
    echo "Your least favorite color: " . $_POST["color2"] . "<br>";
    echo "Your favorite day : " . $_POST["day"] . "<br>";
    echo "Your height: " . $_POST["feet"] . " feet, " . $_POST["inches"] . "inches" . "<br>";
    echo "Your satisfaction: " . $_POST["score"] . "<br>";
    echo "<h2>Your opinion in classes:</h2> <br>";
    echo "8AM:  " . $_POST["8am"] . "<br>";
    echo "Afternoon:  " . $_POST["evening"] . "<br>";
?>