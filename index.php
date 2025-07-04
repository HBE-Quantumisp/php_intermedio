<!DOCTYPE html>
<html lang="es">

<?php include_once "./includes/head.php"; ?>

<body>
  <?php include_once "./includes/navbar.php"; ?>

  <!-- Main Content -->
  <div class="container page-content">
    <?php if (!empty($_GET['page'])) {
      $page = htmlspecialchars($_GET['page']);
      $file = "./pages/{$page}.php";
      if (file_exists($file)) {
        include $file;
      } else {
        echo "<h2 class='text-center'>Página no encontrada</h2>";
      }
    } else {
      include "./pages/inicio.php";
    }
    ?>
  </div>

  <!-- Footer -->
  <?php include_once "./includes/footer.php"; ?>

  <!-- Bootstrap 5 JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Agrega interactividad al menú
    document.addEventListener("DOMContentLoaded", function () {
      // Resalta el elemento del menú activo
      const navLinks = document.querySelectorAll(".nav-link");

      navLinks.forEach((link) => {
        link.addEventListener("click", function () {
          navLinks.forEach((l) => l.classList.remove("active"));
          this.classList.add("active");
        });
      });

      // Efecto hover en las tarjetas
      const cards = document.querySelectorAll(".card");

      cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
          this.style.transform = "translateY(-5px)";
        });

        card.addEventListener("mouseleave", function () {
          this.style.transform = "";
        });
      });
    });
  </script>
</body>

</html>