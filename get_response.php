<?php 
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 require_once("contact_mail.php");
 $yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$yourPhone = $conn->real_escape_string($_POST['your_phone']);
$comments = $conn->real_escape_string($_POST['comments']);
$sql="INSERT INTO contactus (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('A aparut o eroare la executarea query-ului[' . $conn->error . ']');
}
else
{
echo "Mulțumim! ";
}
}
else
{
echo "Lasă-ne numele si email-ul tau";
}
?>