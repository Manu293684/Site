<?php
$toEmail = "manu213435@gmail.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["comments"], $_POST["your_phone"], $mailHeaders)) {
echo"Mesaj trimis ";
} else {
echo"<p class='Error'>A aparut o probelema la trimterea mesajului.</p>";
}
?>