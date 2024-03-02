<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  use PHPMailer\PHPMailer\PHPMailer;

  use PHPMailer\PHPMailer\Exception;
  // $receiving_email_address = 'abhisekchowdhury7044@gmail.com';
  // if(isset($_POST['contact'])){
    $fname=$_POST['f-name'];
    $lname = $_POST['l-name'];
    $cemail=$_POST['email'];
    $phone=$_POST['phone'];
    $csubject="Contact Form";
    $cmessage=$_POST['message'];
   
    $html="<div>
    First Name : ".$fname. " <br>
    Last Name : ".$lname."  <br>
    Phone : ".$phone." 

    <br>
    Email: ".$cemail."
    <br>

    Subject: ".$csubject."
    <br>
    Message: ".$cmessage."
    <br>
</div>";
   
    require 'phpmailer/src/Exception.php';
    require "phpmailer/src/PHPMailer.php";
    require "phpmailer/src/SMTP.php";
    $mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;


$mail->Username= 'michaeldaley738uk@gmail.com'; // Your gmail
$mail->Password = 'xefyqpharlffukhv';
$mail->setFrom("michaeldaley738uk@gmail.com"); // 
$mail->addAddress('michaeldaley738uk@gmail.com');
$mail->SMTPSecure = 'ssl';
$mail->Port=465;




$mail->isHTML (true);
$mail->Subject = "Contact Form";
$mail->Body = $html;

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

   $mail->send();
   echo "OK";
?>
