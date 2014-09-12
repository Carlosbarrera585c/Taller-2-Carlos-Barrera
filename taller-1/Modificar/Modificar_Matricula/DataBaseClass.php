<?php

class DataBaseClass {

    private $host,
            $dbname,
            $port,
            $user,
            $password,
            $driver,
            $connect;

    public function __construct($host, $dbname, $user, $password,$port='3306',$driver='mysql') {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
        $this->port = $port;
        $this->driver = $driver;
        
    }

    public function getInstance() {
        if (!$this->connect) {
            try {
               $dsn = $this->driver
                       . ':host='. $this->host
                       .';dbname='.$this->dbname
                       . ';port='.$this->port;
               $this->connect = new PDO($dsn,$this->user,$this->password);
               $this->connect->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        return $this->connect;
    }
}
