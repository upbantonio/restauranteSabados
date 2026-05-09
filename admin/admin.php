<?php

require __DIR__ .'/../include/config/database.php';

$db = conectarDB();

$scripts = ['app', 'crear']; // global + específico
require  '../include/funciones.php';
incluirTemplates('header');
// include '../../include/templates/header.php'
?>

<body>
    <section class="admin-container admin-container-admin">
        
        <main class="admin-card">
            <h1>Admnistrador</h1>

            <div class="nav">
                <a href="<?php echo BASE_URL; ?>admin/menu/crear.php">Crear</a>
                <a href="">Editar</a>
                <a href="">principal</a>
            </div>
            
        </main>

    </section>

<?php
include '../include/templates/footer.php'
?>