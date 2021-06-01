<?php

$paragrafo = "uno due tre quattro cinque";

$paragrafobad =str_replace($_GET["badword"], "***", $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
<h2> Il paragrafo originale é <br>
<?php
echo $paragrafo
?>
</h2>


<h2>Il paragrafo modificato é<br>
<?php
echo $paragrafobad
?>
<br>
ed é lungo <br>
<?php
echo strlen($paragrafobad)
?>
</h2>


</body>
</html>