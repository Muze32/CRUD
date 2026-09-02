<h1>Editar materia</h1>
<form action="index.php?action=store" method="POST">
    <div>
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name" value="<?= htmlspecialchars($materia["nombre"]) ?>">
    </div>
    <div>
        <label for="anio">Año: </label>
        <input type="text" name="anio" id="anio" value="<?= htmlspecialchars($materia["anio"]) ?>">
    </div>
    <div>
        <label for="cuatrimestre">Cuatrimestre: </label>
        <input type="text" name="cuatrimestre" id="cuatrimestre" value="<?= htmlspecialchars($materia["cuatrimestre"]) ?>">
    </div>
    <div>
        <label for="regularizada">Regularizada: </label>
        <input type="input" name="regularizada" id="regularizada" value="<?= htmlspecialchars($materia["regularizada"]) ?>">
    </div>
    <div>
        <label for="finalizada">Finalizada: </label>
        <input type="input" name="finalizada" id="finalizada" value="<?= htmlspecialchars($materia["finalizada"]) ?>">
    </div>
    <button type="submit">Confirmar</button>
</form>