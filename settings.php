<?php 
include_once("processo.php");

$endereço = 'C:\xampp\htdocs\PMercadolivre\Detalhes.html';

$mensagem = "🖐 Olá $nome,<br>
Vimos que seu pedido $numeropedido do dia $data com a nota fiscal $notafiscal <br>
de $qtd x $produto no valor de $valorprodutos passou para o Status de $statuspedido, você pode acompanhar
com o código de rastreio $rastreio <br>
Estamos também deixando nosso WhatsApp à disposição para qualquer dúvida ou futura negociação!<br>
.<br>
*Fique por dentro de nossas novidades e Promoções*:<br>
(temos a linha completa em produtos...)<br>
📞: Seu telefone<br>
💻: link do seu site<br>
📱: link do seu facebook<br>
📷: link do seu instagram<br>
";

//variáveis que podem ser utilizadas: $nome, $qtd, $produto, $data, $rastreio, $endereço, $notafiscal, $numeropedido, $valorprodutos, $statuspedido;
//para pular linha escreva <br>;

?>