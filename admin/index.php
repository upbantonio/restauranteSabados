<?php
require  '../include/funciones.php';
incluirTemplates('header');

// include '../../include/templates/header.php'
?>

<body>
     <section class="container container_admin">
        <div>
            <h1>ADMINISTRADOR MENÚ</h1>
            <a href="<?php echo BASE_URL;?>index.php">Salir admin</a>
            <a href="<?php echo BASE_URL;?>admin/menu/crear.php">Crear</a>
          
            
        </div>
     </section>
</body>

<?php
include '../include/templates/footer.php'
?>