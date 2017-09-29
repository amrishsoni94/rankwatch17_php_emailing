<?
//contact subject
$Subject="$subject";

//details
$Message="$message";

//mail of sender
$mail_from="customer_mail";

//from
$header="from:$to<$mail_from";
//enter your email address
$to="er.amrishsoni@gmail.com";

$send_contact=mail($to,$Subject,$Message,$header);
 // check if message sent to your email
// display message we have received your mail
if ($send_contact) {

echo "we have rececied your information";
}
 else {

	echo "message error";
}

?>