<?php
$scripts = ['app', 'crear']; // global + específico
require  '../../include/funciones.php';
incluirTemplates('header');

// include '../../include/templates/header.php'
?>

<body>
     <section class="container container_admin">
        <div>
            <h1>CREAR MENÚ</h1>
        </div>

       
    <section class="admin-container admin-container-admin">
        
        <main class="admin-card">
            <h1>Crear Plato</h1>

            <form class="admin-form" method="POST" enctype="multipart/form-data">

                <label for="nombre">Nombre del Plato</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" required></textarea>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" required>

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpg, image/png, image/avif, image/webp" required>

                <img id="preview" class="admin-preview">

                <input type="submit" value="Crear Plato" class="admin-btn">

            </form>
        </main>

    </section>


<?php
include '../../include/templates/footer.php'
?>

     </section>
</body>

<?php
include '../../include/templates/footer.php'
?>