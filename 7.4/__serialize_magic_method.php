<?php


class User
{
    private float $appId = 1.0;

    private string $appName = 'APP_USER';

    public function __serialize()
    {
        return [
            'appilication_id' => $this->appId,
            'application_name' => $this->appName
        ];
    }

}

$user = serialize(new User());
echo $user;
/**
 * Ouput with __serialize magic method
 * -> O:4:"User":2:{s:15:"appilication_id";d:1;s:16:"application_name";s:8:"APP_USER";}
 *
 * without magic method
 * -> O:4:"User":2:{s:11:"UserappId";d:1;s:13:"UserappName";s:8:"APP_USER";}%
 *
 * With __serialize magic method you can control serialization fields
 */


$user = serialize(new User());
