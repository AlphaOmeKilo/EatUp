<?php
/**
 * Email Submission Functions
 *
 * @package eatup
 * @since eatup 1.0
 */

function add_to_mailing_list($email) {
  
  //MailChimp API key
  $api_key = '22f6282d18dbe71bd148cafd36e5d984-us16';
  $list_id = '38765939a5';
  
  $eu_data = array(
    'email_address' => $email,
    'list_id' => $list_id,
    'status' => 'subscribed'
  );
  
  $url = 'https://us16.api.mailchimp.com/3.0/lists/' . $list_id . '/members/';

  $encoded_eu_data = json_encode($eu_data);

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded_eu_data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  $results = curl_exec($ch);
  $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $errors = curl_error($ch); 

  curl_close($ch);

  $results = array(
    'results' => $results,
    'response' => $response,
    'errors' => $errors
  );

  return $results;
}

add_action('admin_post_nopriv_add_to_mailing_list', 'add_to_mailing_list'); 
add_action('admin_post_add_to_mailing_list', 'add_to_mailing_list');

function signup_a_school() {
  
  if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['school_name']) ||
    !isset($_POST['school_email']) ||
    !isset($_POST['contact_person']) ||
    !isset($_POST['school_contact_no']) ||
    !isset($_POST['school_address']) ||
    !isset($_POST['city']) ||
    !isset($_POST['state']) ||
    !isset($_POST['postcode']) ||
    !isset($_POST['email']) ||
    !isset($_POST['contact_no']) ||
    !isset($_POST['message'])) {
    die(json_encode(array('error' => 'You are missing some mandatory fields!'))); 
  }
  
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $contact = $_POST["contact_no"];
  $school_name = $_POST["school_name"];
  $school_email = $_POST["school_email"];
  $contact_person = $_POST["contact_person"];
  $school_contact = $_POST["school_contact_no"];
  $address = $_POST["school_address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $postcode = $_POST["postcode"];
  $message = $_POST["message"];
  
  $email_to = "alexwokeeffe@gmail.com";
  $email_subject = "School Signup";
  
  $email_message = "Contact Details:\n\n";
  $email_message .= "Name: ".$first_name." ".$last_name."\n";
  $email_message .= "Contact No: ".$contact."\n\n\n";
  $email_message .= "School Details:\n\n";
  $email_message .= "School Name: ".$school_name."\n";
  $email_message .= "School Email: ".$school_email."\n";
  $email_message .= "Contact Person: ".$contact_person."\n";
  $email_message .= "School Contact No: ".$school_contact."\n";
  $email_message .= "School Address: ".$address."\n";
  $email_message .= "City:".$city."\n";
  $email_message .= "State: ".$state."\n";
  $email_message .= "Postcode: ".$postcode."\n\n\n";
  $email_message .= "Message:\n\n".$message."\n";
  
  $headers = 'From: '.$email."\r\n".
  'Reply-To: '.$email."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  
  echo json_encode(array('success' => "Thanks, we’ll be in touch soon!"));
  
  return;
  die();
}


add_action('admin_post_nopriv_signup_a_school', 'signup_a_school'); 
add_action('admin_post_signup_a_school', 'signup_a_school');

function help_us_out() {
  
  if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['help-type']) ||
    !isset($_POST['contact_no']) ||
    !isset($_POST['message'])) {
    ddie(json_encode(array('error' => 'You are missing some mandatory fields!')));       
  }
  
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $contact = $_POST["contact_no"];
  $message = $_POST["message"];
  $help_type = $_POST['help-type'];
  
  if(isset($_POST['checkbox']) && $_POST['checkbox'] == 1) {
    add_to_mailing_list($email);
  }
  
  $email_to = "alexwokeeffe@gmail.com";
  $email_subject = "Help us out - Enquiry";
  
  $email_message = "";
  $email_message .= "Name: ".$first_name." ".$last_name."\n\n";
  $email_message .= "Contact No: ".$contact."\n\n";
  $email_message .= "Type of help: ".$help_type."\n\n";
  $email_message .= "Message: ".$message."\n";
  
  $headers = 'From: '.$email."\r\n".
  'Reply-To: '.$email."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  
  echo json_encode(array('success' => "Thanks, we’ll be in touch soon!"));

    
  return;
  die();
}

add_action('admin_post_nopriv_help_us_out', 'help_us_out'); 
add_action('admin_post_help_us_out', 'help_us_out');

function lets_talk_contact() {
  
  if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['contact_no']) ||
    !isset($_POST['message'])) {
    die(json_encode(array('error' => 'You are missing some mandatory fields!')));      
  }
  
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $contact = $_POST["contact_no"];
  $message = $_POST["message"];
  
  if(isset($_POST['checkbox']) && $_POST['checkbox'] == 1) {
    add_to_mailing_list($email);
  }
  
  $email_to = "eatup@eatup.org.au";
  $email_subject = "Let's Talk - Enquiry";
  
  $email_message = "";
  $email_message .= "Name: ".$first_name." ".$last_name."\n\n";
  $email_message .= "Contact No: ".$contact."\n\n";
  $email_message .= "Message: ".$message."\n";
  
  $headers = 'From: '.$email."\r\n".
  'Reply-To: '.$email."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  
  echo json_encode(array('success' => "Thanks, we’ll be in touch soon!"));

  return;
  die();
}

add_action('admin_post_nopriv_lets_talk_contact', 'lets_talk_contact'); 
add_action('admin_post_lets_talk_contact', 'lets_talk_contact');

?>