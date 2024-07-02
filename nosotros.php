    <?php
        require 'includes/funciones.php';
        incluirTemplate( 'header' );
    ?>
    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil obcaecati quo omnis, illo tenetur
                    tempora harum cumque sapiente exercitationem! Distinctio nostrum praesentium voluptatum aspernatur
                    doloribus voluptates tenetur labore neque! Cumque vero nihil illum! Autem suscipit molestias
                    voluptas dolore veritatis, laborum alias voluptates laudantium? Inventore, quam perferendis! Ipsa
                    suscipit quaerat accusantium cupiditate excepturi repellat eius, obcaecati corporis maxime sequi?
                    Facilis accusamus odit quis. Esse provident quidem in voluptas, delectus maxime nam ut dolore?
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit neque molestiae ea explicabo
                    in ratione corrupti, temporibus eum laboriosam, voluptas ducimus. Illo expedita id qui deleniti nam
                    culpa, ea consectetur distinctio est voluptatibus eum incidunt dignissimos. Magni nostrum doloremque
                    tempore fugiat, vero, praesentium nulla ab mollitia sunt ipsa incidunt officiis.</p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nulla tempora assumenda sint provident
                porro praesentium officiis fuga perferendis explicabo expedita nulla dolorum
                Doloremque temporibus, dicta odit magnam tenetur, quia ratione
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nulla tempora assumenda sint provident
                porro praesentium officiis fuga perferendis explicabo expedita nulla dolorum
                Doloremque temporibus, dicta odit magnam tenetur, quia ratione
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3> A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nulla tempora assumenda sint provident
                porro praesentium officiis fuga perferendis explicabo expedita nulla dolorum
                Doloremque temporibus, dicta odit magnam tenetur, quia ratione
                </p>
            </div>
        </div>
    </section>

    <?php
    
      incluirTemplate('footer');
    ?>