<?php

require_once __DIR__ . '/../Repositories/ParticipanteRepository.php';
require_once __DIR__ . '/../Repositories/CursoRepository.php';

class ParticipanteService 
{
    private ParticipanteRepository $participanteRepo;
    private CursoRepository $cursoRepo;

    public function __construct(ParticipanteRepository $participanteRepo, CursoRepository $cursoRepo) 
    {
        $this->participanteRepo = $participanteRepo;
        $this->cursoRepo = $cursoRepo;
    }

    public function listarParticipantes(): array 
    {
        return $this->participanteRepo->getAll();
    }

    public function obtenerParticipante(int $id): array 
    {
        $participante = $this->participanteRepo->findById($id);
        if (!$participante) {
            throw new Exception("El participante no existe.");
        }
        return $participante;
    }

    public function registrarParticipante(array $data): bool 
    {
        $this->validarDatos($data);

        if ($this->participanteRepo->emailExists($data['email'])) {
            throw new Exception("El email ya está registrado.");
        }

        return $this->participanteRepo->create($data);
    }

    public function actualizarParticipante(int $id, array $data): bool 
    {
        $this->obtenerParticipante($id); // Valida existencia
        $this->validarDatos($data);

        if ($this->participanteRepo->emailExists($data['email'], $id)) {
            throw new Exception("El email ya está registrado por otro participante.");
        }

        return $this->participanteRepo->update($id, $data);
    }

    public function eliminarParticipante(int $id): bool 
    {
        $this->obtenerParticipante($id); // Valida existencia
        return $this->participanteRepo->delete($id);
    }

    private function validarDatos(array $data): void 
    {
        if (empty($data['nombre']) || empty($data['apellido']) || empty($data['email']) || empty($data['curso_id'])) {
            throw new Exception("Todos los campos obligatorios deben ser completados.");
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El formato del email no es válido.");
        }

        if (!$this->cursoRepo->findById((int)$data['curso_id'])) {
            throw new Exception("El curso asignado no existe.");
        }
    }
}