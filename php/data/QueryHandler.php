<?php

class QueryHandler {
    private $pdo;
    private $db_name;

    private function connect($host, $db_name, $user_name, $passwd) {
        try {
            return new PDO("mysql:host={$host};dbname={$db_name}", $user_name, $passwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
        $this->db_name = $db_name;
    }

    public function __construct($host, $db_name, $user, $password) {
        $this->pdo = $this->connect($host, $db_name, $user, $password);
    }

    /**Supports additional JOIN or where statement */
    public function fmt_data($table, $ref_class) {
        $stmt = $this->pdo->prepare('select * from ' . $table . ';');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $ref_class);
    }

    public function fetch($query) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }

    /**
     * @param query INSERT, DELETE, ALTER, UPDATE
     */
    public function exec_query($query) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
    }
}