<?php

namespace classes;

use PDO;
use PDOException;
use PDOStatement;

class Db
{
    private $connection;
    public static $instance = null;

    public function __construct()
    {
    }
    public function __clone(): void
    {
    }

    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new  self();
        }
        return self::$instance;
    }
    private PDOStatement $stmt;
    public function getConnection(array $db_config)
    {
        $dsn = "mysql:host = {$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['user'], $db_config['password'], $db_config['options']);
            return $this;
        }
        catch (PDOException $e) {
            abort(500);
        }

    }

    public function query($query, $params = [])
    {
        try {
            $this->stmt = $this->connection->prepare($query);
            $this->stmt->execute($params);
        } catch (PDOException $e) {
            return false;
        }

        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }

    public function findOrFail()
    {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }

}