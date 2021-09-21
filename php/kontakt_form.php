<?php
if (isset($_POST['submit'])){
  
$first_name = $_POST['name'];
$adres = $_POST['adres'];
$message = $_POST['tresc'];
//$to = "Trojak7joanna@gmail.com";
$to = "podologia.i.kosmetologia@gmail.com";
//$to = "aaddaas@gmail.com";
$subject = "Wiadomość ze strony: podologia-i-kosmetologia.pl od ". $first_name ;

mail ($to, $subject, "Wiadomość: " .$message. "\n Od: " . $first_name . "\n Kontakt: " . $adres);
@header("Location: kontakt_wyslana.html");// Direct to a new page 
//echo "We've recived your contact information";
}
else {
  echo "Wiadomość nie wysłana, błąd!";
}
?>