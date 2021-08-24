<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Mercado Livre</title>
    <link rel="shortcut icon" href="/imagens/favicon.png" />
    <link rel="icon" href="/imagens/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

<div class="titulo">MENSAGEM MERCADO LIVRE</div>
<div class="comeco">
<div class="subtitulo">INFORMAÇÕES DO CLIENTE:<br><br><br></div>

<?php
include_once("settings.php");
include_once("processo.php");

ini_set('display_errors', 0 );
error_reporting(0);
printf("<b>NOME:</b> ");
echo $var2[0];
printf("<br><br><b>ENDEREÇO:</b> ");
print $var10[0];
printf("<br><b>TELEFONE:</b> ");
print $var14[0];
printf("<br><br><b>NOTA FISCAL:</b> ");
print $var16[0];
printf("<br><br><b>RASTREIO:</b> ");
print $var18[0];

?>
<div class="comeco1">
<?php
echo "$mensagem";
?> 

</div>
<?php echo '<a href="https://api.whatsapp.com/send?phone=55'.$telefone.'" target="_blank";>' ?>
<button class="wpp">WhatsApp</button>
</a>
</div>
<footer>
<a href="https://instagram.com/douglaseduar"><h3>Douglas</h3></a>
</footer>
</body>
</html>


