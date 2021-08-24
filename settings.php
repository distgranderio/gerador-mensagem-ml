<?php 
include_once("processo.php");

$endereço = 'C:\xampp\htdocs\PMercadolivre\Detalhes.html';
$nome = $var2[0];
$data = $var4[0];
$telefone = $var14[0];
$rastreio = $var18[0];
$endereço = $var10[0];
$notafiscal = $var16[0];
if ($var6[0] == NULL){
    $qtd = $vartest1[0];
}
else {$qtd = $var6[0]; }
if ($var8[0] == "1 pacote"){
    $produto = "Pacote de Produtos";
}
else { $produto = $var8[0];}

$mensagem = "🖐 Olá *$nome*,<br>
Somos da Nome da sua loja. O Senhor(a) fez uma compra conosco no _Mercado Livre_ de *$qtd x $produto* no dia $data. <br>
Gostaríamos de saber o que achou do produto e do nosso serviço, estamos também deixando nosso WhatsApp à disposição para qualquer dúvida ou futura negociação!<br>
.<br>
*Fique por dentro de nossas novidades e Promoções*:<br>
( _temos a linha completa em setor do produto_ )<br>
📞: Seu telefone<br>
💻: link do seu site<br>
📱: link do seu facebook<br>
📷: link do seu instagram<br>";

//variáveis que podem ser utilizadas: $nome, $rastreio, $qtd, $produto, $data, $rastreio, $endereço, $notafiscal;
//para pular linha escreva <br>;

?>