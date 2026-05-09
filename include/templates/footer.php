<!-- FOOTER -->

<footer class="footer">
  <div class="container footer-content">

    <div>
      <h3>🍴 Foodie</h3>
      <p>Comida casera con sabor auténtico.</p>
    </div>

    <div>
      <h4>Enlaces</h4>
      <a href="index.php">Inicio</a>
      <a href="index.php#menu">Menú</a>
      <a href="index.php#galeria">Galeria</a>
      <a href="contacto.php">Contacto</a>
    </div>

    <div>
      <h4>Contacto</h4>
      <p>📍 Medellín, Colombia</p>
      <p>📞 +57 300 000 0000</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© <?php echo date('Y') ?> Foodie - Todos los derechos reservados</p>
  </div>
</footer>


<?php
$scripts = $scripts ?? [];

foreach ($scripts as $script):
?>
  <script src="<?php echo BASE_URL . "js/$script.js"; ?>"></script>
<?php endforeach; ?>

</body>

</html>