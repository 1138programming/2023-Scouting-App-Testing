<?php
// Get the user input from the form
$userInput = $_POST['pass'];
$targetString = "password123";

if ($userInput === $targetString) {
  // Redirect to the target page
  header("Location: redirect.php");
  exit(); // Ensure that code below does not get executed after the redirect
} else {
  echo "Input does not match. Please try again.";
}