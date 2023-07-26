<?php
$mailto = "nazarmammedov530@gmail.com";
$subject = "Hello my friend";
$body = "Hi, how r u, I was just wondering I sent this mail after <b>1000 years</b>";
$headers = "From: nazarmammedov9@gmail.com";
if (mail($mailto, $subject, $body, $headers)) {
    echo "mail is sent successfully";
} else {
    echo "something went wrong";
}
?>