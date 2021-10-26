<?php

class Database
{
    public $config;

    /**
     * @param $config
     * @param $connection
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->connection = new Connection($config);
    }


    function selectAll($table) {
        return fetchAllTasks($this->connection->connectDB($this->config));

    }

    function insert() {
        // TODO
    }
}