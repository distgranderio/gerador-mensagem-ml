<?php 
include_once("././local.php");

$url = $endereço;

ini_set('display_errors', 0 );
error_reporting(0);

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

$var19 = explode('label">Venda ', $dadosSite);

$var20 = explode(' |', $var19[1]);

$var21 = explode('">Produtos</div><div class="sc-account-rows__row__price--container"><div class="sc-account-rows__row__price">', $dadosSite);

$var22 = explode('</div>', $var21[1]);

$var23 = explode('">Produto</div><div class="sc-account-rows__row__price--container"><div class="sc-account-rows__row__price">', $dadosSite);

$var24 = explode('</div>', $var23[1]);

$var25 = explode('"sc-status__title">', $dadosSite);

$var26 = explode('</div>', $var25[1]);

$nome = $var2[0];
$data = $var4[0];
$telefone = $var14[0];
$rastreio = $var18[0];
$endereço = $var10[0];
$notafiscal = $var16[0];
$numeropedido = $var20[0];
$statuspedido = $var26[0];
if ($var22[0] == NULL){
    $valorprodutos = $var24[0];
}
else {$valorprodutos = $var22[0];}
if ($var6[0] == NULL){
    $qtd = $vartest1[0];
}
else {$qtd = $var6[0]; }
if ($var8[0] == "1 pacote"){
    $produto = "Pacote de Produtos";
}
else { $produto = $var8[0];}

?>