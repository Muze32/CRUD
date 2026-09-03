<?php 
require __DIR__ . "/../layouts/header.php" 
?>
    <main>
        <section id="sobreMi">
            <div>
                <img src="img/pfp.jpg" alt="Profile picture" class="pfp">
            </div>

            <div>
                <h1>Sobre mi</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, suscipit quia esse in aut natus dolore iure amet aspernatur vero delectus necessitatibus ratione ut itaque laboriosam sapiente minus consectetur dignissimos.</p>
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
            <div>
            </div>
        </section>

        <?php require __DIR__ . "/progreso.php" ?>
        <?php require __DIR__ . "/contacto.php" ?>
    </main>

<?php require __DIR__ . "/../layouts/footer.php" ?>
