<?php 
/** @var mysqli_result $materias */
?>  
<section id="progreso">
    <h1>Mi progreso en la Tecnictura Universitaria en Programación</h1>

    <div class="center tableContainer">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Cuatrimestre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($materia = $materias->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($materia["materia_id"]) ?></td>
                        <td><?= htmlspecialchars($materia["nombre"]) ?></td>
                        <td><?= htmlspecialchars($materia["anio"]) ?></td>
                        <td><?= htmlspecialchars($materia["cuatrimestre"]) ?></td>
                        <td class="estado-<?= htmlspecialchars($materia["estado"]) ?>"><?= htmlspecialchars($materia["estado"]) ?></td>
                        <td>
                            <a class="actionBtn edit"  href="index.php?action=edit&materia_id=<?=$materia["materia_id"] ?>">Editar</a>
                            <a class="actionBtn delete" href="index.php?action=delete&materia_id=<?=$materia["materia_id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <p><a href="index.php?action=create" class="actionBtn add">Agregar materia</a></p>
    </div>
</section>
