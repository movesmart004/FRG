<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $business_name = $_POST["business_name"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $address = $_POST["address"];
  $zipcode = $_POST["zipcode"];
  $state = $_POST["state"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $impact_description = $_POST["impact_description"];
  $other_info = $_POST["other_info"];

  // Compose email message
  $to = "slavejames10@outlook.com"; // Replace with your email address
  $subject = "New Form Submission";
  $message = "Business Name: $business_name\n\n";
  $message .= "Name: $first_name $last_name\n\n";
  $message .= "Address: $address, $zipcode, $state\n\n";
  $message .= "Email: $email\n\n";
  $message .= "Phone: $phone\n\n";
  $message .= "Impact Description:\n$impact_description\n\n";
  $message .= "Other Information:\n$other_info";

  // Send email
  if (mail($to, $subject, $message)) {
    echo "Thank you for your submission!";
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
}
?>
