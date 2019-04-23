<?php

namespace VirtualAge\Xml;

use VirtualAge\{
    Auth as AuthParent
};

class Auth {

    private $login;
    private $password;

    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function getElement() : string {
        return 'loginws';
    }

    public function getAttributes() : array {
        return [
            'cd_loginws' => $this->login,
            'cd_senhaws' => $this->password
        ];
    }
}