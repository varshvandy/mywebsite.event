<?php
// Simple backend script to handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email  = htmlspecialchars($_POST['email']);
    $event  = htmlspecialchars($_POST['event']);
    $date   = htmlspecialchars($_POST['date']);
    $time   = htmlspecialchars($_POST['time']);
	$con=mysql_connect("localhost","root","");
mysql_select_db("varsha's event");
    // Here you can write this data into a database or send via email
    // For demo purposes, we display the confirmation below:

    echo "<h2>Thank you for registering!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Mobile:</strong> $mobile</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Event:</strong> $event</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<p><strong>Time:</strong> $time</p>";
} else {
    echo "Invalid Request.";
	
}

?>