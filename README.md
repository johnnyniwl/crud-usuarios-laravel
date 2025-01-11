# Sistema de Cadastro de Usuários

### Este é um sistema simples de cadastro de usuários desenvolvido utilizando Laravel, Bootstrap e MySQL.

## Pré-requisitos

- **PHP** (>= 8.0)
- **Composer**
- **MySQL**
- **Node.js** e **NPM**
- **Laravel** (>= 10)

## Instalação

### Clone o Repositório
```bash
git clone https://github.com/johnnyniwl/crud-usuarios-laravel.git
cd crud-usuarios-laravel
```

### Instale as Dependências do Laravel
```bash
composer install
```

## Configure o Ambiente

Crie o arquivo .env a partir de .env.example e configure o banco de dados:

### Configurações do Banco de Dados

Certifique-se de configurar corretamente o arquivo `.env` com as seguintes informações:

- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=nome_do_banco`
- `DB_USERNAME=seu_usuario`
- `DB_PASSWORD=sua_senha`


### Geração da Key
```bash
php artisan key:generate
```

### Migração do Banco de Dados
```bash
php artisan migrate
```

### Instale as Dependências do Frontend
```bash
npm install
npm run dev
```

### Inicie o Servidor
```bash
php artisan serve
```


#### Acesse o sistema em http://localhost:8000.