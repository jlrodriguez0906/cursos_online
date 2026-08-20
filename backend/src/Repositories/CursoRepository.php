<?php

class CursoRepository 
{
    private PDO $db;

    public function __construct(PDO $db) 
    {
        $this->db = $db;
    }

    public function getAll(): array 
    {
        $stmt = $this->db->prepare("SELECT id, nombre, descripcion, duracion_horas, estado FROM cursos WHERE estado = 'activo'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array 
    {
        $stmt = $this->db->prepare("SELECT id, nombre, descripcion, duracion_horas, estado FROM cursos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }
}