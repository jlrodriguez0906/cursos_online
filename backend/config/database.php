<?php

class Database 
{
    private static string $host = 'localhost';
    private static string $db   = 'academica';
    private static string $user = 'root';
    private static string $pass = 'root';
    private static string $charset = 'utf8mb4';

    private static ?PDO $instance = null;

    public static function getConnection(): PDO 
    {
        if (self::$instance === null) {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$instance = new PDO($dsn, self::$user, self::$pass, $options);
            } catch (PDOException $e) {
                // En producción no se debe mostrar el mensaje directo ($e->getMessage())
                throw new Exception("Error en la conexión a la base de datos.");
            }
        }

        return self::$instance;
    }
}