# Impacta Bitcoin

Aplicação que acompanha as variações do Bitcoin.

- [Consulta API da Coincap](https://docs.coincap.io/).
- [Consulta API para descobrir cotação atual do dólar](https://docs.awesomeapi.com.br/api-de-moedas).
- Disparo de e-mail simulado através do mailhog.

## Dependências da aplicação

- [Docker](https://docs.docker.com/engine/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/download/)
- [PHP 8.2](https://www.php.net/downloads.php)

Caso não queira executar a aplicação com o docker pode-se utilizar o comando `php artisan serve` para subir a aplicação,
porém, tornara-se necessário possuir todas as dependências do laravel instaladas no seu PHP.

## Como subir a aplicação

- `composer install` utilizar a versão do php 8.2
- `./vendor/bin/sail up -d` para subir a aplicação
- `./vendor/bin/sail artisan key:generate`
- Copiar o arquivo .env.example para .env
- Para acessar o painel de e-mails do mailhog, acesse `http://localhost:8025/`
- Aplicação disponível em `http://localhost/`

## Como alimentar o banco de dados e disparar os e-mails

### Automático

- Executar os schedules configurados `./vendor/bin/sail artisan schedule:run`

### Manual

- `sail artisan currency:get` para buscar os dados da API e salvar no banco de dados.
- `sail artisan currency:notify` para enviar os e-mails com as variações do Bitcoin abaixo de R$ 130,000.00.