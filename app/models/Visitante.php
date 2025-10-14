<?php

namespace app\models;

use app\core\Database;
use PDO;

class Visitante {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    /**
     * Registra un nuevo visitante en la base de datos.
     */
    public function registrar($nombre, $email) {
        try {
            $sql = "INSERT INTO visitantes (nombre, email) VALUES (:nombre, :email)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            return $stmt->execute();
        } catch (\PDOException $e) {
            // En un entorno de producción, registrarías este error en lugar de mostrarlo.
            error_log($e->getMessage());
            return false;
        }
    }

    /**
     * Obtiene todos los visitantes.
     */
    public function obtenerTodos() {
        $sql = "SELECT * FROM visitantes ORDER BY fecha_registro DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
