<h1>Lista de materias</h1>
<p><a href="index.php?action=create">Agregar materia</a></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Año</th>
            <th>Cuatrimestre</th>
            <th>Regularizada</th>
            <th>Finalizada</th>
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
                <td><?= htmlspecialchars($materia["regularizada"]) ?></td>
                <td><?= htmlspecialchars($materia["finalizada"]) ?></td>
                <td>
                    <a href="index.php?action=edit&materia_id=<?=$materia["materia_id"] ?>">Editar</a>
                    <a href="index.php?action=delete&materia_id=<?=$materia["materia_id"] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endwhile;?>
    </tbody>
</table>