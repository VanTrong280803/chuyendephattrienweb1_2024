<?php
require_once 'configs/database.php';

abstract class BaseModel {
    // Database connection
    protected static $_connection;

    public function __construct() {
        if (!isset(self::$_connection)) {
            self::$_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
            if (self::$_connection->connect_errno) {
                printf("Connect failed: %s\n", self::$_connection->connect_error);
                exit();
            }
        }
    }

    /**
     * Query in database
     * @param $sql
     * @return mixed
     * @throws mysqli_sql_exception
     */
    protected function query($sql) {
        if (empty($sql)) {
            throw new Exception("SQL query cannot be empty");
        }
        $result = self::$_connection->query($sql);
        if ($result === false) {
            throw new mysqli_sql_exception("SQL error: " . self::$_connection->error);
        }
        return $result;
    }

    /**
     * Select statement
     * @param $sql
     * @return array
     */
    protected function select($sql) {
        $result = $this->query($sql);
        $rows = [];
        if (!empty($result)) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    /**
     * Delete statement
     * @param $sql
     * @return mixed
     */
    protected function delete($sql) {
        $result = $this->query($sql);
        return $result;
    }

    /**
     * Update statement
     * @param $sql
     * @return mixed
     */
    protected function update($sql) {
        $result = $this->query($sql);
        return $result;
    }

    /**
     * Insert statement
     * @param $sql
     * @return mixed
     */
    protected function insert($sql) {
        $result = $this->query($sql);
        return $result;
    }
}
