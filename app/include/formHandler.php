<?php
$isValidForm = false;
$isPost = ($_SERVER['REQUEST_METHOD'] === 'POST');
  if ($isPost) {
    function spam_scrubber($value) {
      //list bad values
      $bad = ['to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:'];
      foreach ($bad as $b) {
        if (stripos($value, $b) !== false) return '';
      }
      //replace new line characters with spaces
      $value = str_replace(['\r', '\n', '%0a,', '%0d'], ' ', $value);
      return trim($value);
    }

    $scrubbed = array_map('spam_scrubber', $_POST);
    $name = $scrubbed['name'];
    $email = $scrubbed['email'];
    $body = $scrubbed['body'];

    //validate form
    $isComplete = (!empty($name) && !empty($email) && !empty($body));    
    $isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $isValidForm = ($isComplete && $isValidEmail);
    
    if ($isValidForm) {
      $body = "Name: {$scrubbed['name']} \n\nMessage: {$scrubbed['body']}";
      $body = wordwrap($body, 70);
      //send email
      //mail('my_email', 'Contact Form Submission', $body, "From: {$scrubbed['email']}");
      $response = 'Your email has been sent!';
    } else {
      $errors = array();
      if (empty($name)) array_push($errors, "Please enter your name.");
      if (empty($email) OR !$isValidEmail) array_push($errors, "Please enter valid email.");
      if (empty($body)) array_push($errors, "Please enter a message.");
    }
  }