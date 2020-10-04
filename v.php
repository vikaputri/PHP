<?php

define("RECIPIENT_NAME", "Vika Putri Ariyanti");
define("RECIPIENT_EMAIL", "vikaputriariyanti@gmail.com");
define("EMAIL_SUBJECT", "Visitor Message");

$success = false;
$senderName = isset($_POST['senderName'])?preg_replace("/[^\.\-\'a-zA-Z0-9]/","",$_POST['senderName']):"";
$senderEmail = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";
$message = isset( $_POST['message']) ? preg_replace( "/(FROM:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']): "";

if ( isset($_GET["ajax"]) ) {
  echo $succes ? "success" : "error";
} else{
?>
<html>
  <head>
    <title>Thanks!</title>
  </head>
  <body>
  <?php if ( $success ) echo "<p>Thanks for sending your message! We'LL get back to you shortly.</p>" ?>
  <?php if ( !$success ) echo "<p>There was a problem sending your message. Please try aggain.</p>" ?>
  <p>Click your browser's Back button to return to the page.</p>
  </body>
</html>
?>
}
