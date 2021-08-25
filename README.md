#  💭  Gerador de mensagem com dados do Mercado Livre
## Apresentação

Sistema utilizando a função explode do PHP que buscas dados na página e gera uma mensagem predefinida pelo usuário.

### Variáveis que podem ser utilizadas:

- $nome = Nome do cliente
- $qtd = Quantidade de produtos
- $produto = Nome do produto
- $data = Data da compra
- $rastreio = Código de rastreio
- $endereço = Endereço do cliente
- $notafiscal = Número da nota fiscal
- $numeropedido = Número do pedido
- $valorprodutos = Valor total dos produtos
- $statuspedido = Status do pedido (entregue, enviado, concluido...)

### Modelo de mensagem :

```
🖐 Olá $nome, 
Vimos que seu pedido $numeropedido do dia $data com a nota fiscal $notafiscal
de $qtd x $produto no valor de $valorprodutos passou para o Status de $statuspedido, você pode acompanhar
com o código de rastreio $rastreio 
Estamos também deixando nosso WhatsApp à disposição para qualquer dúvida ou futura negociação! 
.
Fique por dentro de nossas novidades e Promoções:
(temos a linha completa em produtos...)
📞: Seu telefone
💻: link do seu site
📱 : link do seu facebook
📷: link do seu instagram

```

## Instalação
### Requisitos:

``` 
- Servidor WEB VPS linux. É necessário que o apache e php estejam instalados e configurados corretamente. 
 ```
 
 ### Configuração:

 ``` 
 - Abrir arquivo "local.php" com algum editor de código ou bloco de notas e ajustar o local que será buscado as informaçõs.
 - Abrir arquivo "mensagem.php" com algum editor de código ou bloco de notas e ajustar o modelo de mensagem de acordo com sua preferência.
 ```
> O Mercado Livre atulizou sua polítca e não está mais informando o número de telefone nos detalhes do pedido, o que impossibilita do sistema enconstar e o mesmo terá que ser digitado a mão.