<?php

require_once __DIR__ . '/../Repositories/CursoRepository.php';

class CursoService 
{
    private CursoRepository $cursoRepository;

    public function __construct(CursoRepository $cursoRepository) 
    {
        $this->cursoRepository = $cursoRepository;
    }

    public function listarCursos(): array 
    {
        return $this->cursoRepository->getAll();
    }
}