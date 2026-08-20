<?php

class ParticipanteRepository 
{
    private PDO $db;

    public function __construct(PDO $db) 
    {
        $this->db = $db;
    }

    public function getAll(): array 
    {
        $sql = "SELECT p.id, p.nombre, p.apellido, p.email, p.fecha_inscripcion, c.nombre AS curso 
                FROM participantes p 
                INNER JOIN cursos c ON p.curso_id = c.id 
                ORDER BY p.id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array 
    {
        $stmt = $this->db->prepare("SELECT * FROM participantes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function create(array $data): bool 
    {
        $sql = "INSERT INTO participantes (curso_id, nombre, apellido, email, fecha_inscripcion) 
                VALUES (:curso_id, :nombre, :apellido, :email, :fecha_inscripcion)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'curso_id'          => $data['curso_id'],
            'nombre'            => $data['nombre'],
            'apellido'          => $data['apellido'],
            'email'             => $data['email'],
            'fecha_inscripcion' => $data['fecha_inscripcion']
        ]);
    }

    public function update(int $id, array $data): bool 
    {
        $sql = "UPDATE participantes 
                SET curso_id = :curso_id, nombre = :nombre, apellido = :apellido, email = :email, fecha_inscripcion = :fecha_inscripcion 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'id'                => $id,
            'curso_id'          => $data['curso_id'],
            'nombre'            => $data['nombre'],
            'apellido'          => $data['apellido'],
            'email'             => $data['email'],
            'fecha_inscripcion' => $data['fecha_inscripcion']
        ]);
    }

    public function delete(int $id): bool 
    {
        $stmt = $this->db->prepare("DELETE FROM participantes WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function emailExists(string $email, ?int $excludeId = null): bool 
    {
        $sql = "SELECT COUNT(*) FROM participantes WHERE email = :email";
        $params = ['email' => $email];

        if ($excludeId !== null) {
            $sql .= " AND id != :exclude_id";
            $params['exclude_id'] = $excludeId;
        }

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchColumn() > 0;
    }
}