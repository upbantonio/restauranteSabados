<?php
$scripts = ['app', 'contacto']; // global + específico
require  'include/funciones.php';
incluirTemplates('header');
?>

    <section class="contacto container" id="contacto">
      <h2>Contáctanos</h2>
      <p>Déjanos tu mensaje y te responderemos pronto</p>

      <form class="formulario">
        <div class="fila">
          <div class="campo">
            <label for="nombre">Nombre *</label>
            <input type="text" id="nombre" placeholder="Tu nombre" value="" />
          </div>

          <div class="campo">
            <label for="apellido">Apellido *</label>
            <input
              type="text"
              id="apellido"
              placeholder="Tu apellido"
            
              
            />
          </div>
        </div>

        <div class="fila">
          <div class="campo">
            <label for="celular">Celular (opcional)</label>
            <input type="tel" id="celular" placeholder="Ej: 3001234567" />
          </div>

          <div class="campo">
            <label for="email">Email *</label>
            <input
              type="email"
              id="email"
              placeholder="correo@email.com"
              
            />
          </div>
        </div>

        <div class="campo">
          <label for="mensaje">Mensaje *</label>
          <textarea
            id="mensaje"
            rows="5"
            placeholder="Escribe tu mensaje..."
            
          ></textarea>
        </div>
        <button type="submit" class="btn-enviar">Enviar mensaje</button>
      </form>
    </section>
<section class="container">
    <div class="tabs">
      <button class="tab-btn active" data-tab="tab1">📄 Información</button>
      <button class="tab-btn" data-tab="tab2">📊 Datos</button>
      <button class="tab-btn" data-tab="tab3">📞 Contacto</button>
    </div>


    <div id="tab1" class="tab-content active">
      <h2>Información</h2>
      <p>Contenido moderno con animación suave.</p>
    </div>

    <div id="tab2" class="tab-content">
      <h2>Datos</h2>
      <p>Aquí puedes mostrar estadísticas o información.</p>
    </div>

    <div id="tab3" class="tab-content">
      <h2>Contacto</h2>
      <p>Formulario o datos de contacto.</p>
    </div>
    </div>
  </section>

<?php
include 'include/templates/footer.php'
?>
