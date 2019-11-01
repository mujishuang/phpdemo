<?php

class DB
{
    private static $_instance = null;
    private $dsn;
    private $dbh;
    private function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=test;charset=utf-8";
        $this->dbh = new PDO($this->dsn, "root", "");
    }

    private function __clone()
    { }

    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql)
    {
        $result = $this->dbh->query($sql);
    }
}
