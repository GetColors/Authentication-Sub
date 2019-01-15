<?php

use Babilonia\Infrastructure\Slim\Middleware\AdminGuardMiddleware;
use Babilonia\Infrastructure\Slim\Middleware\TokenGeneratorMiddleware;
use Babilonia\Infrastructure\Slim\Middleware\TokenValidationMiddleware;


$app->get('/', function(){
	echo "Working";
});

$this->post('/register', 'AdminRegisterNewUserController:register');
$app->post('/signin', 'AuthenticateUserController:authenticate')->add(new TokenGeneratorMiddleware);

