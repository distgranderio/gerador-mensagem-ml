#  💭  Gerador de mensagem com dados do Mercado Livre
## Apresentação

Sistema para envio de mensagens com dados do Mercado Livre

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
> O Mercado Livre atulizou sua polítca e não está mais informando o número de telefone nos detalhes do pedido, o que impossibilita o sistema encontrar; E o mesmo terá que ser digitado a mão.
