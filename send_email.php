<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "support@texttoaudiofree.com";
$to = "texttoaudiofree@gmail.com";




$subject = $_POST["subject"];
$message = $_POST["message"];
$header = "From: " .  $from;

$mailsent=mail($to,$subject,$message, $header);

if ($mailsent) {
    echo '<script>
    alert("Thanks for your message. Your message was sent successfully. We will get back to you soon!");
    window.location.href = "https://texttoaudiofree.com/contact.html";
</script>';
} else {
    echo '<script>alert("Email sending failed");</script>';
}
?>