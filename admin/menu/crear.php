<?php
require __DIR__ .'/../../include/config/database.php';

$db = conectarDB();

// echo "✅ Conectado correctamente";
// exit;


$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitizar datos
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $precio = floatval($_POST['precio']);

    // Imagen
    $imagen = $_FILES['imagen'];

    // Validación básica
    if (!$nombre || !$descripcion || $precio <= 0) {
        $mensaje = "Todos los campos son obligatorios";
    } else {

        // Ruta física (servidor)
        $carpetaImagenes = $_SERVER['DOCUMENT_ROOT'] . '/restauranteSabados/assets/imagenes/platos/';

        // Crear carpeta si no existe
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes, 0755, true);
        }

        // Obtener extensión real
        $extension = strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));

        // Validar tipo de imagen
        $tiposPermitidos = ['jpg', 'jpeg', 'png', 'webp', 'avif'];

        if (!in_array($extension, $tiposPermitidos)) {
            $mensaje = "Formato de imagen no permitido";
        } else {

            // Generar nombre único seguro
            do {
                $nombreImagen = md5(uniqid(rand(), true)) . "." . $extension;
                $rutaCompleta = $carpetaImagenes . $nombreImagen;
            } while (file_exists($rutaCompleta));

            // Subir imagen
            if (move_uploaded_file($imagen['tmp_name'], $rutaCompleta)) {

                // Ruta que se guarda en BD
                $rutaDB = 'assets/imagenes/platos/' . $nombreImagen;

                // INSERT
                $query = "INSERT INTO platos 
                    (nombre, descripcion, precio, imagen, activo, orden)
                    VALUES ('$nombre', '$descripcion', '$precio', '$rutaDB', 1, 0)";

                $resultado = mysqli_query($db, $query);

                if ($resultado) {
                    $mensaje = "✅ Plato creado correctamente";
                } else {
                    $mensaje = "Error al guardar en BD";
                }

            } else {
                $mensaje = "Error al subir la imagen";
            }
        }
    }
}
$scripts = ['app', 'crear']; // global + específico
require  '../../include/funciones.php';
incluirTemplates('header');

?>

<body>
    <section class="admin-container admin-container-admin">
        
        <main class="admin-card">
            <h1>Crear Plato</h1>

            <form class="admin-form" method="POST"  enctype="multipart/form-data">

                <label for="nombre">Nombre del Plato</label>
                <input type="text" id="nombre" name="nombre" >

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" ></textarea>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" >

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