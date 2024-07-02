    
    <?php
        require 'includes/funciones.php';
        incluirTemplate( 'header' );
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        
        <picture>
            <source srcset="build/img/destacada.webp" type="image.webp">
            <source srcset="build/img/destacada.jpg" type="image.jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3'000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
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
     incluirTemplate( 'header' );
    ?>