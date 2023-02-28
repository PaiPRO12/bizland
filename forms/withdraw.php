<?php
// Get the form data
$username = $_POST['username'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$password = $_POST['password'];

// Validate the form data
if (empty($username) || empty($phone) || empty($amount) || empty($password)) {
  echo "All fields are required.";
  exit;
}

if (!is_numeric($amount) || $amount <= 0) {
  echo "Please enter a valid amount.";
  exit;
}

// Process the withdrawal request
// TODO: Perform necessary calculations and update account balance

// Display a success message
echo "Withdrawal request processed successfully.";
?>





<?php

// Define variables from form
$amount = $_POST['amount'];
$bank = $_POST['bank'];
$account_name = $_POST['account_name'];
$account_number = $_POST['account_number'];

// Validate input
$errors = array();

if (empty($amount)) {
    $errors[] = "Please enter the amount you wish to withdraw";
}

if (empty($bank)) {
    $errors[] = "Please select your bank";
}

if (empty($account_name)) {
    $errors[] = "Please enter your account name";
}

if (empty($account_number)) {
    $errors[] = "Please enter your account number";
}

if (!is_numeric($amount)) {
    $errors[] = "Amount must be a number";
}

if (!is_numeric($account_number)) {
    $errors[] = "Account number must be a number";
}

// Display errors or process withdrawal
if (!empty($errors)) {
    // Display errors
    echo "<h2>Withdrawal Failed</h2>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else {
    // Process withdrawal
    echo "<h2>Withdrawal Successful</h2>";
    echo "<p>You have withdrawn $amount to your $bank account ($account_name, $account_number).</p>";
}

?>

