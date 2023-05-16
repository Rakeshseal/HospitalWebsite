<?php
$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection,"hospital_1");
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$query = "INSERT INTO `contact`(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
mysqli_query($connection,$query);
echo "Your message has been sent successfully";

?>