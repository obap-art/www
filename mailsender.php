<?php 

    $to = "rantatuoli@phnet.fi"; // this is your Email address
    $from = $_POST['email_sender']; // this is the sender's Email address
    $message = $from . "\n\n" . $_POST['email_content'];
   $subject = "obap contact";
$headers = "From: obap.info server " . $from;

  
    mail($to,$subject,$message,$headers);
    // //  mail($from,$subject2,$message2,$headers2); sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $from;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
if(@mail($to, $subject, $message, $headers))
{
	echo "Mail Sent. Thank you " . $from;
} 
else 
{
	echo "answer=error";
}
?>