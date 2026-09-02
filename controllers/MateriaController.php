<?php
require_once __DIR__ . "../config/database.php";
require_once __DIR__ . "../models/Materia.php";
    class MateriaController {
        private $materiaModel;

        public function __construct() {
            global $conexion;
            $this->materiaModel = new Materia($conexion);
        }

        public function index() {
            $usuarios = $this->materiaModel->getAll();
            require __DIR__ . "../views/users/index.php";
        }

        public function create() {
            require __DIR__ . "../views/users/create.php";
        }

        public function edit() {
            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
            if($id <= 0) die("Ingrese un ID valido");

            $usuario = $this->materiaModel->getById($id);
            if(!$usuario) die("No se encontro un usuario con la ID " . $id);
            require __DIR__ . "./views/users/edit.php";
        }
        
        public function store() {
            $nombre = trim($_POST["nombre"] ?? "");
            $anio = isset($_POST["anio"]) ? (int)$_POST["anio"] : 0;
            $cuatrimestre = isset($_POST["anio"]) ? (int)$_POST["anio"] : 0;
            $regularizada = isset($_POST["regularizada"]) ? 1 : 0;
            $finalizada = isset($_POST["finalizada"]) ? 1 : 0;

            if($nombre === "") die("Ingrese un nombre para la materia");
            if($anio <= 0 || $cuatrimestre <= 0) die("Ingrese un año o cuatrimestres validos");

            $this->materiaModel->create($nombre, $anio, $cuatrimestre, $regularizada, $finalizada);
            header("Location: index.php?action=index");
            exit;
        }

        public function update() {
            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
            $nombre= trim($_POST["nombre"] ?? "");
            $cuatrimestre = isset($_POST["cuatrimestre"]) ? (int)$_POST["cuatrimestre"] : 0;
            $anio = isset($_POST["anio"]) ? (int)$_POST["anio"] : 0;
            $regularizada = isset($_POST["regularizada"]) ? (int)$_POST["regularizada"] : 0;
            $finalizada = isset($_POST["finalizada"]) ? (int)$_POST["finalizada"] : 0;

            if($id <= 0) die("ID no valida");
            if($nombre === "") die("Ingrese un nombre para la materia");
            if($anio <= 0 || $cuatrimestre <= 0) die("Ingrese un año o cuatrimestres validos");

            $this->materiaModel->update($id, $nombre, $cuatrimestre, $anio, $regularizada, $finalizada);
            header("Location: index.php?action=index");
            exit;
        }

        public function delete() {
            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
            if($id > 0) $this->materiaModel->deleteById($id);
            header("Location: index.php?action=index");
            exit;
        }
    }
?>