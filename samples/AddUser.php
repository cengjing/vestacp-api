<?php
/**
 * @author Stephen "TheCodeAssassin" Hoogendijk <admin@tca0.nl>
 */
use VestaCP\Client;

require __DIR__ . '/../vendor/autoload.php';
$settings = require __DIR__ . '/settings.php';


$host = 'server01.phalconhosting.com';
$port = '8083';
$username = $settings['username'];
$password = $settings['password'];

$client = new Client($host, $port, $username, $password);

$result = $client->user->add('johndoe', 'testtest', 'test@phalconhosting.com', 'default', 'John', 'Doe');

if ($result) {
    echo 'User created successfully.'.PHP_EOL;
} else {
    echo 'User could not be created.'.PHP_EOL;
}