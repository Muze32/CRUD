<?php require __DIR__ . "/../layouts/header.php" ?>
<h1>Agregar materia</h1>
<form action="index.php?action=store" method="POST">
    <div>
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name">
    </div>
    <div>
        <label for="anio">Año: </label>
        <input type="text" name="anio" id="anio">
    </div>
    <div>
        <label for="cuatrimestre">Cuatrimestre: </label>
        <input type="text" name="cuatrimestre" id="cuatrimestre">
    </div>
    <div>
        <label for="regularizada">Regularizada: </label>
        <input type="checkbox" name="regularizada" id="regularizada">
    </div>
    <div>
        <label for="finalizada">Finalizada: </label>
        <input type="checkbox" name="finalizada" id="finalizada">
    </div>
    <button type="submit">Confirmar</button>
</form>
<?php require __DIR__ . "/../layouts/footer.php" ?>
