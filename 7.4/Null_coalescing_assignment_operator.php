<?php


$data = [
    'id' => 5,
    'name' => 'Scott',
    'email' => 'dev@php.net'
];



if (!isset($data['email'])) {
    echo $data['email'] = 'wearedevelopers@php.net';
}


$data['email'] ??= 'wrd@php.net';


var_dump($data);
