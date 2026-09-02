<?php
class Materia
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        return $this->conexion->query("SELECT * FROM materias ORDER BY materia_id DESC");
    }

    public function getById($id)
    {
        $s = $this->conexion->prepare("SELECT * FROM materias WHERE materia_id = ?");
        $s->bind_param("i", $id);
        $s->execute();
        return $s->get_result()->fetch_assoc();
    }

    public function update($id, $nombre, $anio, $cuatrimestre, $regularizada, $finalizada)
    {
        $s = $this->conexion->prepare("UPDATE materias SET nombre = ?, anio = ?, cuatrimestre = ?, regularizada = ?, finalizada = ? WHERE materia_id = ?");
        $s->bind_param("siiiii", $nombre, $anio, $cuatrimestre, $regularizada, $finalizada, $id);
        return $s->execute();
    }

    public function create($nombre, $anio, $cuatrimestre, $regularizada, $finalizada)
    {
        $s = $this->conexion->prepare("INSERT INTO materias (nombre, anio, cuatrimestre, regularizada, finalizada) VALUES(?, ? ,?, ?, ?)");
        $s->bind_param("siiii", $nombre, $anio, $cuatrimestre, $regularizada, $finalizada);
        return $s->execute();
    }

    public function deleteById($id)
    {
        $s = $this->conexion->prepare("DELETE FROM materias where materia_id = ?");
        $s->bind_param("i", $id);
        return $s->execute();
    }
}
