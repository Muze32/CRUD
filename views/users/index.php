<?php 
/** @var mysqli_result $materias */
require __DIR__ . "/../layouts/header.php" 
?>
    <main>
        <section id="inicio">
            <h1>Hola, mi nombre es NOMBRE Desarrollador Full Stack</h1>
        </section>

        <section id="sobreMi">
            <h1>Sobre mi</h1>
            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi optio corrupti debitis iure esse non, tenetur temporibus quo. Id, illo nisi quisquam quo nihil maiores distinctio alias deserunt obcaecati?</div>
        </section>

        <section id="habilidades">
            <h1>Habilidades</h1>
            <div class="flexContainer">
                <div class="skillCard">
                    <img src="icons/java.webp" alt="">
                    <div>Java</div>
                </div>
                <div class="skillCard">
                    <img src="icons/C_Logo.png" alt="">
                    <div>C</div>
                </div>                
                <div class="skillCard">
                    <img src="icons/python.webp" alt="">
                    <div>Python</div>
                </div>                
                <div class="skillCard">
                    <img src="icons/postgreSQL.webp" alt="">
                    <div>PostgreSQL</div>
                </div>                
                <div class="skillCard">
                    <img src="icons/flutter.png" alt="">
                    <div>Flutter</div>
                </div>                

            </div>
        </section>

        <section id="proyectos">
            <h1>
                Mis Proyectos
            </h1>
            <div>
            </div>
        </section>

        <section id="progreso">
            <h1>Mi progreso en la Tecnictura Universitaria en programacion</h1>
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
        </section>

        <section id="contacto">
            <h1>Contacto</h1>
            <form action="">
                <div class="formSection">
                    <label>Nombre:</label>
                    <input type="text" placeholder="Ingrese su nombre">
                </div>
                <div class="formSection">
                    <label>Correo Electrónico:</label>
                    <input type="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="formSection">
                    <label>Teléfono:</label>
                    <input type="tel" placeholder="Ingrese su telefono">
                </div>
                <div class="formSection">
                    <label>Asunto:</label>
                    <input type="text" placeholder="Ingrese el asunto del correo">
                </div>
                <div class="formSection">
                    <label>Mensaje:</label>
                    <textarea name="" id="" placeholder="Ingrese el contenido del mensaje" rows="8"></textarea>
                </div>
                <div class="submitBtnDiv">
                    <button type="submit" id="submitBtn">Enviar mensaje</button>
                </div>
            </form>
        </section>
    </main>

<?php require __DIR__ . "/../layouts/footer.php" ?>
