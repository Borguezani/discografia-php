<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tabela de conteúdos
================================================
- [Sobre](#sobre-discografia-php)
- [Utilização](#como-utilizar-o-projeto)

## Sobre discografia-php

Discografia-Php é um projeto criado para ser o backend da aplicação 
<a href="https://github.com/Borguezani/discografia-react" target='_blank'>Discografia</a>. É uma API que se comunica com o banco de dados através do Laravel.


## Como Utilizar o Projeto

- Primeiramente instale o <a href="https://getcomposer.org/" target='_blank'>Composer</a>.
- No seu terminal faça:

```
git clone https://github.com/Borguezani/discografia-php.git 
cd .\discografia-php\
composer install
```

- Agora abra com o seu editor de código
- Crie um arquivo .env usando o .env.example de base
- Coloque os dados do seu banco de dados no arquivo .env
- Abra o terminal e execute os seguintes comandos:
```php
php artisan migrate
php artisan serve
```
- Seu servidor com a API já está em funcionamento!
- Lembre-se de rodar a aplicação front-end na URL http://localhost:3000. Ou editar o arquivo .env na linha FRONTEND_URL= com sua própria URL.
























