<?php

if(isset($_POST['submit'])){
$to = "ngvozdkov@yandex.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$subject = "fomr";
$subject2 = "Copy of your form submission";
$message = $first_name . " send:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "sucsses " . $first_name . ", yea";
echo "<br /><br /><a href='https://epicblog.net'>back.</a>";

}

?>
