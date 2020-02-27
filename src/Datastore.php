<?php

namespace madman\Password;

interface Datastore
{
    const UNKNOWN_USERNAME = 1001;

    public function openConnection($host, $username, $password, $db_name);
    public function getConnection();
    public function setConnection($conn);
    public function closeConnection();
    public function getVersion();
    public function buildDatabaseSchema();
    public function beginTransaction();
    public function commitTransaction();
    public function rollbackTransaction();
    public function getUserByUsername($username);
    public function updateUser($user);
}
