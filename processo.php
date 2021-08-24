<?php 
include_once("settings.php");

$url = $endereço;

$dadosSite = file_get_contents($url);

$var1 = explode('default"><div class="sc-title-subtitle-action__container-label-tooltip"><div class="sc-title-subtitle-action__label"><b>',$dadosSite);

$var2 = explode("</b> |",$var1[1]);

$var3 = explode(' | ', $dadosSite);

$var4 = explode(" de 20", $var3[1]);

$vartest = explode('class="sc-quantity sc-quantity__unique"><span>', $dadosSite);

$vartest1 = explode(" u.", $vartest[1]);

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

$var17 = explode('">Código de rastreamento:', $dadosSite);

$var18 = explode('</div>', $var17[1]);
?>