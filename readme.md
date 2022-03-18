# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Resumo para Instalar Api Laravel

O ambiente Docker + PHP7.4 + Apache2 + Composer + Laravel-5.2.* já está atualizado.

Em uma maquina de preferencia com SO Linux e Docker instalado:

1-) Criar a rede de trabalho do docker.
	comando => [docker network create backend-network]

2-) Executar a Clonagem do Github.
	comando => [git clone https://github.com/franksipoli/api-magic.git]

3-) Na pasta api-magic.
	
	Subir o ambiente dockerizado => docker-compose -f docker-compose.yml up -d

4-) Na pasta api-magic/scripts, para não precisar rodar o migrate(*) do Laravel.
	
	Existe dois (2) arquivos SQL, um cria a estrutura do banco e outro popula as tabelas com dados.
	Comando Estrutura => docker-compose exec mysql-db mysql -u root -p <senha> < bd-stru-laravel.sql
	Comando Dados => docker-compose exec mysql-db mysql -u root -p <senha> < bd-dados-laravel.sql

	* Caso sinta a vontade de usar a migrate, esteja a vontade, lembre-se somente que está em ambiente dockerizado.

5-) Na pasta api-magic/colection está as chamadas das api's CRUDs, lembrando que precisa atualizar as variáveis de 
ambiente no Postman, com seus dados de instalação do ambiente dockerizado.


