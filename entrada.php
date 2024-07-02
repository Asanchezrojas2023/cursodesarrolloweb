    <?php
        require 'includes/funciones.php';
        incluirTemplate( 'header' );
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image.webp">
            <source srcset="build/img/destacada2.jpg" type="image.jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>10/06/24</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            
            <p>
                lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil obcaecati quo omnis, illo tenetur
                tempora harum cumque sapiente exercitationem! Distinctio nostrum praesentium voluptatum aspernatur
                doloribus voluptates tenetur labore neque! Cumque vero nihil illum! Autem suscipit molestias
                voluptas dolore veritatis, laborum alias voluptates laudantium? Inventore, quam perferendis! Ipsa
                suscipit quaerat accusantium cupiditate excepturi repellat eius, obcaecati corporis maxime sequi?
                Facilis accusamus odit quis. Esse provident quidem in voluptas, delectus maxime nam ut dolore?
            </p>
            <p>
                orem, ipsum dolor sit amet consectetur adipisicing elit. Nihil obcaecati quo omnis, illo tenetur
                tempora harum cumque sapiente exercitationem! Distinctio nostrum praesentium voluptatum aspernatur
                doloribus voluptates tenetur labore neque! Cumque vero nihil illum! Autem suscipit molestias
                voluptas dolore veritatis, laborum alias voluptates laudantium? Inventore, quam perferendis! Ipsa
                suscipit quaerat accusantium cupiditate excepturi repellat eius, obcaecati corporis maxime sequi?
                Facilis accusamus odit quis. Esse provident quidem in voluptas, delectus maxime nam ut dolore?
            </p>
        </div>

    </main>

    <?php
     incluirTemplate( 'footer' );
    ?>