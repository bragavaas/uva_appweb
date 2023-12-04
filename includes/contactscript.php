<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $stmt = $conn->prepare("INSERT INTO contact (name, email, message)
                VALUES (:name, :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    $stmt->execute();

    echo "Message sent successfully!";
  
} else {
    // If the form is not submitted, redirect to the contact page or display an error message
    echo "Form submission failed. Please try again.";
}
?>