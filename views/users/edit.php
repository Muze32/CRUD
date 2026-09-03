<?php

/** @var array $materia */
require __DIR__ . "/../layouts/header.php"
?>
<h1>Editar materia</h1>
<form action="index.php?action=update" method="POST">
    <input type="hidden" name="materia_id" value="<?= htmlspecialchars($materia["materia_id"]) ?>">
    <div>
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name" value="<?= htmlspecialchars($materia["nombre"]) ?>">
    </div>
    <div>
        <label>Año: </label>
        <label>
            <input type="radio" name="anio" value="1" <?= ($materia['anio'] === 1) ? 'checked' : '' ?> required>
            Primer año
        </label>
        <label>
            <input type="radio" name="anio" value="2" <?= ($materia['anio'] === 2) ? 'checked' : '' ?>>
            Segundo año
        </label>
        <label>
            <input type="radio" name="anio" value="3" <?= ($materia['anio'] === 3) ? 'checked' : '' ?>>
            Tercer año
        </label>
    </div>
    <div>
        <label>Cuatrimestre: </label>
        <label>
            <input type="radio" name="cuatrimestre" value="1" <?= ($materia['cuatrimestre'] === '1') ? 'checked' : '' ?> required>
            1° cuatrimestre
        </label>
        <label>
            <input type="radio" name="cuatrimestre" value="2" <?= ($materia['cuatrimestre'] === '2') ? 'checked' : '' ?>>
            2° cuatrimestre
        </label>
        <label>
            <input type="radio" name="cuatrimestre" value="Anual" <?= ($materia['cuatrimestre'] === 'Anual') ? 'checked' : '' ?>>
            Anual
        </label>
    </div>
    <div>
        <label>Estado: </label>
        <label>
            <input type="radio" name="estado" value="Pendiente" <?= ($materia['estado'] === 'Pendiente') ? 'checked' : '' ?> required>
            Pendiente
        </label>
        <label>
            <input type="radio" name="estado" value="Regularizada" <?= ($materia['estado'] === 'Regularizada') ? 'checked' : '' ?>>
            Regularizada
        </label>
        <label>
            <input type="radio" name="estado" value="Finalizada" <?= ($materia['estado'] === 'Finalizada') ? 'checked' : '' ?>>
            Finalizada
        </label>
    </div>

    <button type="submit">Confirmar</button>
</form>
<?php require __DIR__ . "/../layouts/footer.php" ?>