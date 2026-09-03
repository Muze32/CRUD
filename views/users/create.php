<?php require __DIR__ . "/../layouts/header.php" ?>
<h1>Agregar materia</h1>

<form action="index.php?action=store" method="POST">
    <div>
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name">
    </div>
    <div>
        <label>Año: </label>
        <label>
            <input type="radio" name="anio" value="1" checked required>
            Primer año
        </label>
        <label>
            <input type="radio" name="anio" value="2">
            Segundo año
        </label>
        <label>
            <input type="radio" name="anio" value="3">
            Tercer año
        </label>
    </div>
    <div>
        <label>Cuatrimestre: </label>
        <label>
            <input type="radio" name="cuatrimestre" value="1" checked required>
            1° cuatrimestre
        </label>
        <label>
            <input type="radio" name="cuatrimestre" value="2">
            2° cuatrimestre
        </label>
        <label>
            <input type="radio" name="cuatrimestre" value="Anual">
            Anual
        </label>
    </div>
    <div>
        <label>Estado: </label>
        <label>
            <input type="radio" name="estado" value="Pendiente" checked required>
            Pendiente
        </label>
        <label>
            <input type="radio" name="estado" value="Regularizada">
            Regularizada
        </label>
        <label>
            <input type="radio" name="estado" value="Finalizada">
            Finalizada
        </label>
    </div>

    <button type="submit">Confirmar</button>
</form>

<?php require __DIR__ . "/../layouts/footer.php" ?>
