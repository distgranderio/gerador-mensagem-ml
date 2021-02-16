<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Livre</title>
    <link rel="shortcut icon" href="/imagens/favicon.png" />
    <link rel="icon" href="/imagens/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="titulo">MENSAGEM MERCADO LIVRE</div>
<div class="comeco">
<div class="subtitulo">INFORMAÇÕES DO CLIENTE:<br><br><br></div>

<?php


$url = 'C:\Users\dougl\detalhes.html';
//$url = 'C:\Users\Jairo\Documents\mercadolivre\detalhes.html';
//$url = 'C:\Users\Ecommerce Grande Rio\Documents\detalhes.html';

$dadosSite = file_get_contents($url);

$var1 = explode('<div class="sc-buyer__content"><div class="sc-title-subtitle-action sc-title-subtitle-action--default"><div class="sc-title-subtitle-action__label"><b>',$dadosSite);

$var2 = explode("</b> |",$var1[1]);

$var3 = explode(' | ', $dadosSite);

$var4 = explode(" de 20", $var3[1]);

$var5 = explode('<div class="sc-quantity"><span>', $dadosSite);

$var6 = explode(" u.", $var5[1]);

$var7 = explode('<h1 class="sc-page-title__text">', $dadosSite);

$var8 = explode("</h1>", $var7[1]);

$var9 = explode('<div class="sc-title-subtitle-action__sublabel">Envio normal<br>', $dadosSite);

$var10 = explode("Quem recebe", $var9[1]);

$var11 = explode('}},"t"', $dadosSite);

$var12 = explode(" Tel.: ", $var11[0]);
$var13 = explode(" Tel.: ", $var12[1]);
$var14 = explode('</div></div></div><div class="sc-title-subtitle-action sc-title-subtitle-action--default"><div class="sc-title-subtitle-action__container"><div class="sc-title-subtitle-action__sublabel">C', $var13[0]);

$var15 = explode('render-markdown">NF-e #', $dadosSite);

$var16 = explode("/1", $var15[1]);

//$var17 = explode(' <a id="trackShipment" href="', $dadosSite);

//$var18 = explode('</a>', $var17[1]);

printf("<b>NOME:</b> ");
print $var2[0];
printf("<br><br><b>ENDEREÇO:</b> ");
print $var10[0];
printf("<br><b>TELEFONE:</b> ");
print $var14[0];
printf("<br><br><b>NOTA FISCAL:</b> ");
print $var16[0];
//printf("<br><br><b>RASTREIO:</b> ");
//echo '<a href="'.$var18[0].'</a>';
?>
<div class="comeco1">
<?php

printf("<br>🖐 Olá *");
print $var2[0];
echo ("*,<br> Somos da Distribuidora Grande Rio. O Senhor(a) fez uma compra conosco no _Mercado Livre_ de *");
print $var6[0];
printf("x ");
print $var8[0];
printf("* no dia ");
print $var4[0];
printf(". Gostaríamos de saber o que achou do produto e do nosso serviço, estamos também deixando nosso WhatsApp à disposição para qualquer dúvida
 ou futura negociação!<br>.<br>*Fique por dentro de nossas novidades e Promoções*:<br>(_temos a linha completa em lubrificantes, ferramentas, reparo e embelezamento automotivo_)<br>📞: (42) 3523-2485<br>
 💻: www.distribuidoragranderio.com.br<br>
 📱: Facebook: www.facebook.com/distribuidoragrio/<br>
 📷: Instagram: www.instagram.com/distgranderio/<br>
 Grupo Wpp: chat.whatsapp.com/CuBH4g8A14b0HLnvS4rqda<br><br>");

?> 

</div>
<?php echo '<a href="https://api.whatsapp.com/send?phone=55'.$var14[0].'" target="_blank";>' ?>
<button class="wpp">WhatsApp</button>
</a>
</div>
<div class="logo"><img src="imagens/logo_1_1.png" alt="Logo" height="100px"></div>
<div class="logo1">© 2020 DISTRIBUIDORA GRANDE RIO. Todos os direitos reservados.<br>Desenvolvido por <a href="https://instagram.com/douglaseduar">Douglas</div> 
</body>
</html>



