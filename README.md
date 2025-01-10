
#Sistema de Cadastro de Usuários

###Este é um sistema simples de cadastro de usuários desenvolvido utilizando Laravel, Bootstrap e MySQL.

##Pré-requisitos:

PHP (>= 8.0)
Composer
MySQL
Node.js e NPM
Laravel (>= 10)

#Instalação:

Clone o Repositório
`git clone https://github.com/johnnyniwl/crud-usuarios-laravel.git`

`cd crud-usuarios-laravel`

Instale as Dependências do Laravel
`composer install`

###Edite o arquivo .env e configure o banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Geração da Key
`php artisan key:generate`

Migração do Banco de Dados
`php artisan migrate`

Instale as Dependências do Frontend
`npm install`
`npm run dev`

Inicie o Servidor
`php artisan serve`


Acesse o sistema em http://localhost:8000.