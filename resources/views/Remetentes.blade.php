<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Martel+Sans&family=Roboto:wght@100;300;400&display=swap');    
        body{            
            background-color: #0D1116;
            font-family: 'Martel Sans', sans-serif;
            font-family: 'Roboto', sans-serif;  
            line-height: 20px;
            color: #fff;
        }
        code{
            padding: 2px;
            border-radius: 5px;
            background-color: #343941;
        }
    </style>
    <title>Teste tecnico Azapfy</title>
    
</head>
<body>
<h1>Teste técnico para a empresa Azapfy <img src="https://www.azapfy.com.br/wp-content/uploads/2020/08/NOVA-LOGO-AZAPFY_03.png"></h1>

<h2>⚡Sobre o projeto:⚡</h2>
<p>É uma API criada utilizando o framework Laravel utilizada para se comunica com uma API da Azapfy.</p>
<p>O objetivo do teste éra através do endpoint da que a Azapfy me disponibilizou realizar uma consulta e criar métodos para:</p>
<ul>
<li>Agrupar as notas por remetente.</li>
<li>Calcular o valor total das notas para cada remetente.</li>
<li>Calcular o valor que o remetente irá receber pelo que já foi entregue.</li>
<li>Calcular o valor que o remetente irá receber pelo que ainda não foi entregue.</li>
<li>Calcular quanto o remetente deixou de receber devido ao atraso na entrega</li>
</ul>

<h2>📃Documentação da API:📃</h2> 

<p>voce pode baixar a Colection do postman <a href="https://drive.google.com/file/d/11V__tZIyOGYFL17ivp1_fgQE7Az9Pb06/view?usp=sharing">Clicando aqui</a>

<h3>Endpoints da API:</h3>
<ul>
    <li><code>/remetentes</code> Realiza busca na API base e agrupa todas as notas, de acordo com o CNPJ do remetente.</li>
    <li><code>/remetentes/&#123;&#123;CNPJ&#125;&#125;</code> Busca todos os dados disponiveis sobre o remetente do CNPJ informado.</li>
    <li><code>/calculaRecebimentos/&#123;&#123;CNPJ&#125;&#125;</code> Calcula todo o lucro que o remetente obteve com as entregas finalizadas.</li>
    <li><code>/calculaNaoRecebidos/&#123;&#123;CNPJ&#125;&#125;</code> Calcula valor que Recebera por entregas ainda não realizadas e o valor perdido por entregas atrasadas(Entregas que demoraram mais de 2 dias após a emissão do documento).</li>
</ul>

<h2>🧡Notas do desenvolvedor🧡</h2>
<p>Obrigado a azapfy por esta oportunidade, adorei o desafio de criar uma API em um framework que nunca havia utilizados antes, mesmo tendo um pouco de familiaridade com a linguagem PHP.</p>
<p>Fiz este teste com muito entusiasmo e estou extremamente empolgado para ser avaliado!!!</p>
<p>Mais uma vez obrigado por esta oportunidade e pelo tempo dedicado para me avaliar</p>
<br>
<p>Atenciosamente Júlio Júnior Saldanha Alegre</p>

</body>
</html>