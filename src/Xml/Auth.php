<?php

namespace VirtualAge\Xml;

use VirtualAge\Auth as AuthParent;

class Auth {

    /**
     * @var string Login
     */
    private $login = '';

    /**
     * @var string Senha
     */
    private $password = '';

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getElement() : string {
        return 'loginws';
    }

    /**
     * @return array
     */
    public function getAttributes() : array {
        return [
            'cd_loginws' => $this->login,
            'cd_senhaws' => $this->password
        ];
    }
}