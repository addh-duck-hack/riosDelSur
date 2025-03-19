    <!-- Footer -->
    <footer class="nav-custom">
      <div class="container text-center">
        <p>&copy; <span id="current-year"></span> Rios del Sur. Todos los derechos reservados.</p>
        <p>Designed by
          <a href="https://mx.duck-hack.cloud" target="_blank" class="link-duck-hack">Duck Hack</a>
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- Bootstrap y Scripts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.getElementById("current-year").textContent = new Date().getFullYear();
      const options = { day: 'numeric', month: 'long', year: 'numeric' };
    const date = new Date().toLocaleDateString('es-ES', options).replace(/ de /g, ' ');
    document.getElementById("full-date").textContent = date;
    </script>
    <!-- JavaScript para controlar el sidebar -->
    <script>
        function openSidebar() {
            document.getElementById("mySidebar").classList.add("active");
        }

        function closeSidebar() {
            document.getElementById("mySidebar").classList.remove("active");
        }
    </script>
  </body>
</html>