<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //validate the data
  if(empty($name) || empty($email) || empty($message)) {
    echo "All fields are required!";
  } else {
    //validate the email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email address!";
    } else {
      //send the email
      $to = "youremail@example.com";
      $subject = "Contact form submission";
      $headers = "From: $email";
      $body = "A message has been sent from the contact form on your website.\n\n"."Name: $name\n\n"."Email: $email\n\n"."Message:\n$message";
      if(mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent!";
      } else {
        echo "An error occurred. Please try again later.";
      }
    }
  }
}
?>


<!doctype html>
<html>
<form action="contact.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea>
  <input type="submit" value="Submit" name="submit">
</form>
</html>