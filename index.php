<?php
// require  'include/funciones.php';
// incluirTemplates('header');

include 'include/templates/header.php'

?>

  <!-- HERO -->
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Sabores que enamoran</h1>
      <p>Descubre la mejor comida casera con ingredientes frescos</p>
      <a href="#menu" class="button">Ver menú</a>
    </div>
  </section>

  <!-- SECCIÓN PLATOS -->
  <section class="menu container" id="menu">
    <h2>Nuestros Platos</h2>

    <div class="cards">

      <div class="card">
        <img src="img/image3.svg" alt="plato3">
        <div class="card-body">
          <h3>Bandeja Paisa</h3>
          <p>Plato tradicional colombiano lleno de sabor.</p>
          <span>$18.000</span>
        </div>
      </div>

      <div class="card">
        <img src="img/image4.svg" alt="plato4">
        <div class="card-body">
          <h3>Sancocho</h3>
          <p>Sopa casera perfecta para compartir en familia.</p>
          <span>$15.000</span>
        </div>
      </div>

      <div class="card">
        <img src="img/image5.svg" alt="plato5">
        <div class="card-body">
          <h3>Arroz con Pollo</h3>
          <p>Clásico arroz con pollo al estilo casero.</p>
          <span>$14.000</span>
        </div>
      </div>

    </div>
  </section>
  <!-- GALERÍA -->
  <section class="galeria container" id="galeria">
    <h2>Galería</h2>

    <div class="grid-galeria">
      <img src="img/image6.svg" alt="plato1">
      <img src="img/image7.svg" alt="plato1">
      <img src="img/image8.svg" alt="plato1">
      <img src="img/image9.svg" alt="plato1">
      <img src="img/image10.svg" alt="plato1">
      <img src="img/image11.svg" alt="plato1">
      <img src="img/image12.svg" alt="plato1">
      <img src="img/image13.svg" alt="plato1">
      <img src="img/image14.svg" alt="plato1">
      <img src="img/image15.svg" alt="plato1">
      <img src="img/image16.svg" alt="plato1">
      <img src="img/image17.svg" alt="plato1">

    </div>
  </section>

<?php
include 'include/templates/footer.php'
?>

  
  