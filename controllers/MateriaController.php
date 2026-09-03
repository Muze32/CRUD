<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../models/Materia.php";
    class MateriaController {
        private $materiaModel;

        public function __construct() {
            global $conexion;
            $this->materiaModel = new Materia($conexion);
        }

        public function index() {
            $materias = $this->materiaModel->getAll();
            require __DIR__ . "/../views/users/index.php";
        }

        public function create() {
            require __DIR__ . "/../views/users/create.php";
        }

        public function store() {
            $nombre = trim($_POST["nombre"] ?? "");
            $anio = isset($_POST["anio"]) ? (int)$_POST["anio"] : 0;
            $cuatrimestre = trim($_POST["cuatrimestre"] ?? "");
            $estado = trim($_POST["estado"] ?? "");

            if($nombre === "") die("Ingrese un nombre para la materia");
            if($anio <= 0 || $cuatrimestre === "") die("Ingrese un año o cuatrimestres validos");
            if($estado === "") die("Ingrese el estado de la materia");

            $this->materiaModel->create($nombre, $anio, $cuatrimestre, $estado);
            header("Location: index.php?action=index#progreso");
            exit;
        }
        public function edit() {
            $id = isset($_GET["materia_id"]) ? (int)$_GET["materia_id"] : 0;
            if($id <= 0) die("Ingrese un ID valido");

            $materia = $this->materiaModel->getById($id);
            if(!$materia) die("No se encontro una materia con la ID " . $id);
            require __DIR__ . "/../views/users/edit.php";
        }

        public function update() {
            $id = isset($_POST["materia_id"]) ? (int)$_POST["materia_id"] : 0;
            $nombre= trim($_POST["nombre"] ?? "");
            $cuatrimestre = trim($_POST["cuatrimestre"] ?? "");
            $anio = isset($_POST["anio"]) ? (int)$_POST["anio"] : 0;
            $estado = trim($_POST["estado"] ?? "");

            if($id <= 0) die("ID no valida");
            if($nombre === "") die("Ingrese un nombre para la materia");
            if($anio <= 0 || $cuatrimestre === "") die("Ingrese un año o cuatrimestres validos");
            if($estado === "") die("Ingrese el estado de la materia");

            $this->materiaModel->update($id, $nombre, $anio, $cuatrimestre, $estado);
            header("Location: index.php?action=index#progreso");
            exit;
        }

        public function delete() {
            $id = isset($_GET["materia_id"]) ? (int)$_GET["materia_id"] : 0;
            if($id > 0) $this->materiaModel->deleteById($id);
            header("Location: index.php?action=index#progreso");
            exit;
        }
    }
?>