<?php
class dbConnect {
    public $conn;

    public function __construct() {
        require_once 'config.php';

        $this->conn = new mysqli(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_DATABASE
        );

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public function close() {
        $this->conn->close();
    }
}