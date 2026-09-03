<?php require __DIR__ . "/../layouts/header.php" ?>
<h1>Agregar materia</h1>

<form action="index.php?action=store" method="POST" class="formMateria">
    <div class="formRow">
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name" class="textInput">
    </div>
    <div class="formRow">
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
    <div class="formRow">
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
    <div class="formRow">
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
    <div class="center">
        <button type="submit" class="submitBtn">Confirmar</button>
    </div>
</form>

<?php require __DIR__ . "/../layouts/footer.php" ?>
