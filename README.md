# loginXXX

O sistema precisa ter:
- Login
- Cadastro de usuários
- Cadastro de colaboradores
- Lançamento de pontos dos colaboradores
- Relatório com filtro por período com opção de ordenar por nome e data

## Tecnologias usadas

Aqui estão as tecnologias usadas neste projeto.

* HTML
* CSS
* PHP
* MySQL

## Como rodar
- Após clonar o repositorio e colocar em alguma pasta dentro do dir htdocs (servidor xampp) ou www caso utilize o servidor (wampp) terá que criar uma tabela no banco de dados (preferencia mysql/phpmyadmin) com o nome de 'bdteste', (o banco de dados está também dentro desse repositorio) nela já tem alguns Usuários e colaboradores teste
- Feito isso e abrindo o localhost e o nome da pasta onde você clonou o respositorio abrirá uma página index, nessa página estará pedindo para fazer login, caso não tenha terá a opção de criar uma conta
- Conta feita, volte para a página index(login), e se conecte utilizando suas credenciais
- Após se conectar utilizando seu login/senha entrará para área restrita, onde apenas pessoas logadas no sistema poderá acessar
- Aqui temos o Home, onde consta uma tabela com todos os usuários e seus nomes/email/cpf, nessa mesma página como em todas as outras você poderá pesquisar por qualquer usuário na aba de Pesquisar usuário, consta também uma tabelinha com a quantidade de usuários e colaboradores
- Menu cadastro de colaboradores, nessa página mostrará uma tabela com os colaboradores, onde nela terá botão para alterar/excluir e adicionar um novo colaborador
- Menu lançamento de pontos, tabela com os colaboradores podendo adicionar/modificar pontos
- Menu relatorio, tabela com os colaboradores onde pode ordenar por nome/data
- Sair, faz logout da conta, caso tente acessar alguma página terá que fazer o login novamente

## Autores

- [Pablo](https://www.github.com/pbosm) 
