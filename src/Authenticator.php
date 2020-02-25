<?php

namespace madman\Password;

class Authenticator
{
    private $db_name;
    private $db_user;
    private $db_password;

    public function __construct($db_name, $db_user, $db_password)
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    public function login($username, $password)
    {
        return new LoginAttempt();
    }
}