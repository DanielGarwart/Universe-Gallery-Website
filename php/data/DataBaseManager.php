<?php

require_once 'QueryHandler.php';

class DataBaseManager {
    private $db_connections;
    private $host;
    private $admin;
    private $passwd;

    /**
     * Array of Database Strings
     * @param $database
    */
    public function connect($databases) {
        foreach($databases as $database) {
            $this->db_connections[$database] = new QueryHandler(
                $this->host, $database, $this->admin, $this->passwd
            );
        }
    }

    /** Supports additional WHERE or JOIN Statement */
    public function query_class($database, $table, $ref_class) {
        return $this->db_connections[$database]->fmt_data($table, $ref_class);
    }

    /* Custom querying */
    public function query_data($database, $query) {
        return $this->db_connections[$database]->fetch($query);
    }

    public function manage_db($database, $query) {
        $this->db_connections[$database]->exec_query($query);
    }

    /**
    *provide neccessary connection data.
    */
    public function __construct($host, $admin_name, $passwd) {
        $this->host = $host;
        $this->admin = $admin_name;
        $this->passwd = $passwd;
        $this->db_connections = [];
    }
}