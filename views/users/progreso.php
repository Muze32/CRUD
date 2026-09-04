<?php

/** @var mysqli_result $materias */
?>
<section id="progreso">
    <h1>Mi progreso en la Tecnictura Universitaria en Programación</h1>

    <div class="center centeredContainer">
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
            <tbody id="tbody">
                <?php while ($materia = $materias->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($materia["materia_id"]) ?></td>
                        <td><?= htmlspecialchars($materia["nombre"]) ?></td>
                        <td><?= htmlspecialchars($materia["anio"]) ?></td>
                        <td><?= htmlspecialchars($materia["cuatrimestre"]) ?></td>
                        <td class="estado-<?= htmlspecialchars($materia["estado"]) ?>" data-estado="<?= htmlspecialchars($materia["estado"]) ?>"><?= htmlspecialchars($materia["estado"]) ?></td>
                        <td>
                            <a class="actionBtn edit" href="index.php?action=edit&materia_id=<?= $materia["materia_id"] ?>">Editar</a>
                            <a class="actionBtn delete" href="index.php?action=delete&materia_id=<?= $materia["materia_id"] ?>" onclick="return confirm('¿Eliminar esta materia?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div>
            <h2>Panel de funcionalidades</h2>
            <div class="panelFunciones">
                <a href="index.php?action=create" class="actionBtn add">Agregar materia</a>
                <button id="btnPendientes">
                    Mostrar pendientes
                </button>
                <button id="btnRegulares">
                    Mostrar regularizadas
                </button>
                <button id="btnFinalizadas">
                    Mostrar finalizadas
                </button>
                <button id="btnTodas">
                    Mostrar todas
                </button>
            </div>
        </div>
    </div>
</section>