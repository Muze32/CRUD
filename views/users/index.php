<?php 
require __DIR__ . "/../layouts/header.php" 
?>
    <main>
        <section id="sobreMi">
            <div>
                <img src="img/pfp.jpg" alt="Profile picture" class="pfp">
            </div>

            <div>
                <h1>Sobre mí</h1>
                <p>
                    Hola! Soy <strong>Marcos David Colque Rodríguez</strong>, tengo 21 años y actualmente me encuentro en el ultimo año de la carrera de <strong>Técnico Universitario en Programación</strong> en la <strong>Universidad Nacional de Salta.</strong>
                </p>
                    Tengo experiencia en el desarrollo de videojuegos 2D con Unity y desarrollo web Full Stack, con un fuerte enfoque y especial interés en la arquitectura y lógica <strong>Backend</strong>.
                </p>
            </div>
        </section>

        <section id="habilidades">
            <h1>Habilidades</h1>
            <div class="skillsContainer">
                <div class="skillCard">
                    <img src="img/logos/java.webp" alt="Java logo">
                    <div>Java</div>
                </div>
                <div class="skillCard">
                    <img src="img/logos/C_Logo.png" alt="C logo">
                    <div>C</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/python.webp" alt="Python logo">
                    <div>Python</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/postgreSQL.webp" alt="PostgreSQL logo">
                    <div>PostgreSQL</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/flutter.png" alt="Flutter logo">
                    <div>Flutter</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/html.webp" alt="HTML logo">
                    <div>HTML</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/css.webp" alt="CSS logo">
                    <div>CSS</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/js.webp" alt="JavaScript logo">
                    <div>JavaScript</div>
                </div>                
                <div class="skillCard">
                    <img src="img/logos/c_sharp.png" alt="CSharp logo">
                    <div>C#</div>
                </div>                

            </div>
        </section>

        <section id="proyectos">
            <h1>
                Mis Proyectos
            </h1>
            <div class="projectsContainer">
                <div class="projectCard">
                    <div class="projectImgWrapper">
                        <img src="img/proyects/otf.png" alt="Portada de One-Through-Five" class="projectImg">
                    </div>
                    <div class="projectContent">
                        <h2>One-Through-Five</h2>
                        <p>Aplicacion móvil para gestionar y facilitar la comunicación ciudadano-municipio de Campo Quijano.</p>
                        <a href="https://github.com/PedroxVA/OTF-user" class="btnProject">Ver Proyecto</a>
                    </div>
                </div>

                <div class="projectCard">
                    <div class="projectImgWrapper">
                        <img src="img/proyects/videogame.png" alt="Portada de mi videojuego 2D" class="projectImg">
                    </div>
                    <div class="projectContent">
                        <h2>Videojuego 2D</h2>
                        <p>Videojuego 2D desarrollado en Unity basado en el famoso juego para celulares Angry Birds</p>
                        <a href="https://github.com/Muze32/Mi-primer-videojuego" class="btnProject">Ver Proyecto</a>
                    </div>
                </div>

                <div class="projectCard">
                    <div class="projectImgWrapper">
                        <img src="img/proyects/battleship.png" alt="Version Web del videojuego battleship" class="projectImg">
                    </div>
                    <div class="projectContent">
                        <h2>Battleship</h2>
                        <p>Juego de Batalla Naval con lógica orientada a objetos y representación gráfica.</p>
                        <a href="https://github.com/Muze32/Battleship" class="btnProject">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </section>

        <?php require __DIR__ . "/progreso.php" ?>
    </main>

<?php require __DIR__ . "/../layouts/footer.php" ?>
