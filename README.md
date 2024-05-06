    Blog para desenvolvimento pessoal

## Sobre o projeto

Este projeto é um Blog destinado a desenvolver a mente de um profissional da área de TI por meio de artigos estabelecidos em categorias específicas.

## Funcionalidades

- Criação de usuário com senha: Cria usuários com suas respectivas senhas.
- Autenticação: Verifica se o usuário esta autenticado.
- Implantação de SEO: Configuração de SEO para melhorar os resultados de busca.
- Criação de artigo: Cria artigos com títulos, imagens, descrição e o corpo do artigo.
- Exclusão de artigos: Exclui artigos que não tem mais necessidades.

## Tecnologias Utilizadas

- Backend: PHP com Laravel
- Frontend: JavaScript, CSS, HTML
- Database: MySQL

## Pré-requisitos
Certifique-se de ter o PHP, Composer, Node.js, npm e MySQL instalados em sua máquina. Se necessário, consulte as páginas oficiais para instruções de instalação do:

- PHP
- Composer
- MySQL
- Node.js e npm
- TinyMCE

## Configuração Inicial

Siga estes passos para configurar o ambiente de desenvolvimento:

1º Clone o repositório:

- git clone https://github.com/seu-usuario/meublog.git
cd meublog

2º Instale as dependências do PHP com Composer:

- composer install

3º Instale as dependências do frontend com npm:

- npm install
- npm run dev

4º Configure o ambiente:Copie o arquivo .env.example para .env e ajuste as configurações de banco de dados e outras variáveis de ambiente necessárias:

5º Crie o banco de dados e execute as migrações:

- php artisan migrate

OBS: VOCÊ PRECISA CONFIGURAR O ARQUIVO .ENV DE ACORDO COM SEUS DADOS DE BANCO DE DADOS.

## Execute o Projeto

Para iniciar o servidor de desenvolvimento, execute:

- php artisan serve

- Acesse http://localhost:8000 para ver a aplicação em funcionamento.

## Contribuição :)
Contribuições são bem-vindas! Para contribuir:

- Fork o projeto.
- Crie uma branch para sua funcionalidade (git checkout -b feature/fooBar).
- Faça suas alterações.
- Commit suas mudanças (git commit -am 'Add some fooBar').
- Push para a branch (git push origin feature/fooBar).
- Crie um novo Pull Request.

## Contato

Nome: Elvis Presley – flashatemporal@gmail.com

Link do Projeto: https://github.com/Presley14/meublog

## Observação

- Ao traduzir a página nomes poderão mudar. Não recomendo traduzir para o português enquanto estiver lendo esse readme.