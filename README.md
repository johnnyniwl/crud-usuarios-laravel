# User Registration System

### This is a simple user registration system developed using Laravel, Bootstrap, and MySQL.

## Prerequisites

- **PHP** (>= 8.0)
- **Composer**
- **MySQL**
- **Node.js** and **NPM**
- **Laravel** (>= 10)

## Installation

### Clone the Repository

```bash
git clone https://github.com/johnnyniwl/crud-usuarios-laravel.git
```

```bash
cd crud-usuarios-laravel
```

### Install Laravel Dependencies

```bash
composer install
```

## Configure the Environment

Create the .env file from .env.example and configure the database:

### Database Configuration

Make sure to properly configure the `.env` file with the following information:
- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=database_name`
- `DB_USERNAME=your_username`
- `DB_PASSWORD=your_password`

### Generate Key

```bash
php artisan key:generate
```

### Database Migration

```bash
php artisan migrate
```

### Install Frontend Dependencies

```bash
npm install
```

```bash
npm run dev
```

### Start the Server

```bash
php artisan serve
```

#### Access the system at http://localhost:8000.





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
```

```bash
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
```

```bash
npm run dev
```

### Inicie o Servidor
```bash
php artisan serve
```


#### Acesse o sistema em http://localhost:8000.
