<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<div class="text-light succesnieuws">
  U bent succesvol aangemeld voor onze nieuwsbrief <br>
  <button class="knop" type="button"><a href="index.php">Terug naar homepagina</a> </button>
</div>

</body>

<?php

if (isset($_POST['submit'])) {
  if (!empty($submit)) {
   $message = "thanks for submitting the form!";
}

$nieuwsbrief = $_POST['nieuwsbrief'];


$mailTo = "support@thegoodsiteoflife.be";
$headers = "voor nieuwsbrief van: ".$nieuwsbrief;


$to = "support@thegoodsiteoflife.be";

mail($mailTo,$to, $headers);
header("Location: index.php?mailsend");
}

?>
