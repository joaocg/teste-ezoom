# Configuração do Projeto CodeIgniter 4

Este documento fornece instruções detalhadas para configurar e executar o projeto baseado no framework CodeIgniter 4.

## Requisitos
Certifique-se de que você possui os seguintes requisitos instalados em seu ambiente:

- **PHP** (>=8.0)
- **Composer** (https://getcomposer.org/)
- **Servidor de banco de dados** (MySQL, etc.)

## Instalação das Dependências

1. Clone este repositório em seu ambiente local:
   ```bash
   git clone https://github.com/joaocg/teste-ezoom.git
   cd teste-ezoom
   ```

2. Instale as dependências do projeto utilizando o Composer:
   ```bash
   composer install
   ```

## Configuração do CodeIgniter 4

1. Copie o arquivo `env.example` para `.env`:
   ```bash
   cp env.example .env
   ```

2. Edite o arquivo `.env` para configurar os dados do banco de dados. Altere as seguintes linhas de acordo com o seu ambiente:

   ```ini
   # Base de Dados
   database.default.hostname = localhost
   database.default.database = seu_banco_de_dados
   database.default.username = seu_usuario
   database.default.password = sua_senha
   database.default.DBDriver = MySQLi
   database.default.DBPrefix = 
   ```

## Executar as Migrações
As migrações são responsáveis por criar a estrutura inicial do banco de dados.

1. Certifique-se de que seu banco de dados está configurado e acessível.
2. Rode o seguinte comando para executar as migrações:
   ```bash
   php spark migrate
   ```

## Executar os Seeders
Os seeders são responsáveis por popular o banco de dados com dados iniciais ou de teste.

1. Para rodar os seeders configurados, use o seguinte comando:
   ```bash
   php spark db:seed UsersSeeder
   ```

## Servidor Local
Para iniciar o servidor local de desenvolvimento, execute o seguinte comando:

```bash
php spark serve
```

A aplicação estará acessível em: [http://localhost:8080](http://localhost:8080)


## Usuários para Lgin

- **User Test 1**:
  ```bash
  E-mail: sdvdfb@gmail.com
  Senha: 123456
  ```
- **User Test 2**:
  ```bash
  E-mail: sdvdfb2@gmail.com
  Senha: 123456
  ```
  
