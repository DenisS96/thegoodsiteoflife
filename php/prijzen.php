<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<div class="text-light succesnieuws">
  Met succes verstuurd, we houden u verder op de hoogte <br>
  <button class="knop" type="button"><a href="../index.php">Terug naar homepagina</a> </button>
</div>

</body>

<?php


if (isset($_POST['submit'])) {
  if (!empty($submit)) {
   $message = "thanks for submitting the form!";
}

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$tel = $_POST['nummer'];
$subject = $_POST['beschrijving'];
$korting = $_POST['Korting'];
$online = $_POST['online'];
$nietOnline = $_POST['niet-online'];
$onderhoudJa = $_POST['onderhoud-ja'];
$onderhoudNee = $_POST['onderhoud-nee'];
$gsm = $_POST['gsm'];
$mail = $_POST['mail'];

$mailTo = "support@thegoodsiteoflife.be";
$headers = "from:".$mailFrom.".\n naam:".$name.".\n Telefoonnummer:".$tel.".\n bescrijving:".$subject.".\n korting:".$korting.".\n online:".$online.".\n nietOnline:".$nietOnline.".\n onderhoudJa:".$onderhoudJa.".\n onderhoudNee:".$onderhoudNee.".\n gsm:".$gsm.".\n mail:".$mail;

$to = "support@thegoodsiteoflife.be";

mail($mailTo,$to,$headers);
header("Location: ../forms/basis.php?mailsend");

}
 ?>
