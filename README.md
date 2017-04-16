# WorldBank-API
Wolrbank REST API use Laravel Framework for getting data from worldbank about lending types and income levels in every country in world. Currentyl for this example authentication access is saved in sqlite database.

## Requirements
- PHP >= 5.6
- (optional) [PHPUnit](https://phpunit.de/) to run tests.
- (optional) [Dredd](https://help.apiary.io/tools/automated-testing/testing-local/) to run tests API Endpoint

# Installation
1. Clone the repository locally
2. Install depedencies with composer Install
3. Run web server: ```php artisan serve```
4. Access the web in address: ```127.0.0.1:8000```

# Authentication
For authentication when accessing API Endpoint in this example, you can use:
- username: ```admin@mail.com```
- password: ```admin123``` 

## How to run PHPUnit Test
1. Install PHPUnit using phar or composer. Refer to [this](https://phpunit.de/manual/current/en/installation.html) for installation details.
2. Go to project root and type the following command: ```phpunit```. This will execute all tests in ```Tests``` directory.

## How to run API Endpoint Test Use dredd
1. Make sure you have nodejs >= 4 and latest npm installed
2. Install dredd via npm: ```npm install -g dredd@3.4.1```
3. Install dredd-hooks-php in root project: ```composer require ddelnano/dredd-hooks-php:~1.0.0```
4. Go to project root and type the following command: ```dredd``` This will execute all tests in API Endpoint in file ```apiary.apib``` from [Apiary Docs](https://apiary.io)

## API Documentation
For getting information about the use of API Endpoint, please refer to this: [WorldBank-API Documentation](http://docs.worldbank1.apiary.io/)
