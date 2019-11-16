<?php


class A {}

function get(object $object) {
    var_dump($object);
}

get(new A);
get(new stdClass);
get(new Exception);
