# Teste técnico para a empresa Azapfy <img src="https://www.azapfy.com.br/wp-content/uploads/2020/08/NOVA-LOGO-AZAPFY_03.png">

## ⚡Sobre o projeto:⚡
<p>É uma API criada utilizando o framework Laravel utilizada para se comunica com uma API da Azapfy.</p>
<p>O objetivo do teste éra através do endpoint da que a Azapfy me disponibilizou realizar uma consulta e criar métodos para:</p>
<ul>
<li>Agrupar as notas por remetente.</li>
<li>Calcular o valor total das notas para cada remetente.</li>
<li>Calcular o valor que o remetente irá receber pelo que já foi entregue.</li>
<li>Calcular o valor que o remetente irá receber pelo que ainda não foi entregue.</li>
<li>Calcular quanto o remetente deixou de receber devido ao atraso na entrega</li>
</ul>

## 👨‍💻O que é Nescessario para rodar o projeto?👨‍💻

<p>-Você deve ter o composer e o php instalados em seu ambiente pode baixar clicando nos links abaixo: </p>
<a href="https://www.apachefriends.org/pt_br/index.html">PHP(XAMPP)</a><br>
<a href="https://getcomposer.org">Composer</a><br>
<p>Após ter verificado o download do composer e do php basta realizar um clone do projeto e realizar os seguintes comandos no terminal:</p>
<p><code>$ composer install</code></p>
<p><code>$ php artisan serve</code></p>

## 📃Documentação da API:📃

<p>voce pode baixar uma Colection do postman <a href="https://drive.google.com/file/d/11V__tZIyOGYFL17ivp1_fgQE7Az9Pb06/view?usp=sharing">Clicando aqui</a>

### Endpoints da API:
<ul>
    <li><code>/remetentes</code> Realiza busca na API base e agrupa todas as notas, de acordo com o CNPJ do remetente.</li>
    <li><code>/remetentes/{{CNPJ}}</code> Busca todos os dados disponiveis sobre o remetente do CNPJ informado.</li>
    <li><code>/calculaRecebimentos/{{CNPJ}}</code> Calcula todo o lucro que o remetente obteve com as entregas finalizadas.</li>
    <li><code>/calculaNaoRecebidos/{{CNPJ}}</code> Calcula valor que Recebera por entregas ainda não realizadas e o valor perdido por entregas atrasadas(Entregas que demoraram mais de 2 dias após a emissão do documento).</li>
</ul>

## 🧡Notas do desenvolvedor🧡
<p>Obrigado a azapfy por esta oportunidade, adorei o desafio de criar uma API em um framework que nunca havia utilizados antes, mesmo tendo um pouco de familiaridade com a linguagem PHP.</p>
<p>Fiz este teste com muito entusiasmo e estou extremamente empolgado para ser avaliado!!!</p>
<p>Mais uma vez obrigado por esta oportunidade e pelo tempo dedicado para me avaliar</p>
<br>
<p>Atenciosamente Júlio Júnior Saldanha Alegre</p>
