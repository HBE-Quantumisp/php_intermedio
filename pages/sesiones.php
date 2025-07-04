<!-- Hero Section -->
<section class="hero-section" id="introduccion">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-4">Variables de Sesión en PHP</h1>
    <p class="lead mb-4">
      Mantén el estado de tu aplicación web entre diferentes páginas y
      visitas
    </p>
  </div>
</section>

<!-- Main Content -->
<div class="container my-5">
  <!-- What are sessions -->
  <section class="mb-5">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-4">
          <i class="fas fa-question-circle text-primary me-2"></i> ¿Qué son
          las sesiones?
        </h2>
        <p>
          Las sesiones en PHP son un mecanismo para preservar datos entre
          diferentes peticiones HTTP. A diferencia de las cookies que se
          almacenan en el navegador del usuario, los datos de sesión se
          almacenan en el servidor.
        </p>

        <div class="card mt-4">
          <div class="card-header">
            <i class="fas fa-info-circle me-2"></i>Características clave
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fas fa-check text-success me-2"></i>
                Mantienen el estado entre páginas
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success me-2"></i>
                Seguras (datos en el servidor)
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success me-2"></i>
                Fáciles de implementar
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success me-2"></i>
                Compatibles con la mayoría de navegadores
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="diagram-container">
          <h5 class="text-center mb-4">
            <i class="fas fa-project-diagram me-2"></i>Flujo de una sesión
            PHP
          </h5>
          <svg width="100%" height="300" viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
            <!-- Estilos -->
            <style>
              .arrow {
                marker-end: url(#arrowhead);
              }

              .step {
                font-family: Arial;
                font-size: 12px;
                fill: #333;
              }

              .box {
                fill: #f8f9fa;
                stroke: #3498db;
                stroke-width: 2;
                rx: 5;
                ry: 5;
              }

              .server {
                fill: #e3f2fd;
              }

              .client {
                fill: #fff8e1;
              }

              .arrow-line {
                stroke: #2c3e50;
                stroke-width: 2;
                fill: none;
              }
            </style>

            <!-- Definición de flecha -->
            <defs>
              <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5" orient="auto">
                <polygon points="0 0, 10 3.5, 0 7" fill="#2c3e50" />
              </marker>
            </defs>

            <!-- Cliente -->
            <rect x="50" y="50" width="150" height="200" class="box client" />
            <text x="125" y="80" text-anchor="middle" class="step" font-weight="bold">
              Navegador
            </text>

            <!-- Servidor -->
            <rect x="600" y="50" width="150" height="200" class="box server" />
            <text x="675" y="80" text-anchor="middle" class="step" font-weight="bold">
              Servidor PHP
            </text>

            <!-- Paso 1: Primera solicitud -->
            <path d="M200 100 L300 100 L300 150 L350 150" class="arrow-line arrow" />
            <text x="250" y="95" text-anchor="middle" class="step">
              1. Solicitud HTTP
            </text>

            <!-- Paso 2: Crear ID de sesión -->
            <circle cx="400" cy="150" r="30" fill="#3498db" stroke="#2c3e50" stroke-width="2" />
            <text x="400" y="155" text-anchor="middle" class="step" fill="white">
              ID Sesión
            </text>

            <!-- Paso 3: Respuesta con cookie -->
            <path d="M350 150 L300 150 L300 200 L200 200" class="arrow-line arrow" />
            <text x="250" y="215" text-anchor="middle" class="step">
              2. Cookie PHPSESSID
            </text>

            <!-- Paso 4: Solicitudes posteriores -->
            <path d="M200 250 L300 250 L300 150 L350 150" class="arrow-line arrow" />
            <text x="250" y="245" text-anchor="middle" class="step">
              3. Envía PHPSESSID
            </text>

            <!-- Archivo de sesión en servidor -->
            <rect x="550" y="120" width="100" height="30" class="box" />
            <text x="600" y="140" text-anchor="middle" class="step">
              session_data
            </text>

            <!-- Conexión a base de datos (opcional) -->
            <rect x="550" y="170" width="100" height="30" class="box" />
            <text x="600" y="190" text-anchor="middle" class="step">
              BD (opcional)
            </text>

            <!-- Flecha ID a archivo -->
            <path d="M430 150 L480 150 L480 135 L550 135" class="arrow-line arrow" stroke-dasharray="5,5" />

            <!-- Explicación -->
            <text x="400" y="280" text-anchor="middle" class="step" font-size="10">
              El servidor usa el ID para acceder a los datos de sesión
              almacenados
            </text>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- Variables de Sesión -->
  <section id="variables" class="mb-5 py-4">
    <h2 class="fw-bold mb-4">
      <i class="fas fa-cogs text-primary me-2"></i> Variables de Sesión
    </h2>
    <p>
      Las variables de sesión son el mecanismo principal para almacenar y
      acceder a datos persistentes durante la visita de un usuario a tu
      sitio web.
    </p>

    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <i class="fas fa-sitemap me-2"></i>Estructura de $_SESSION
          </div>
          <div class="card-body">
            <p>
              Las variables de sesión se almacenan en el array superglobal
              <code>$_SESSION</code>. Este array persiste a través de
              múltiples peticiones mientras la sesión esté activa.
            </p>

            <svg width="100%" height="200" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
              <style>
                .array-box {
                  fill: #e3f2fd;
                  stroke: #3498db;
                  stroke-width: 2;
                }

                .key {
                  font-family: monospace;
                  font-size: 12px;
                  fill: #2c3e50;
                }

                .value {
                  font-family: monospace;
                  font-size: 12px;
                  fill: #e74c3c;
                }

                .bracket {
                  font-family: monospace;
                  font-size: 24px;
                  fill: #333;
                }
              </style>

              <!-- Array $_SESSION -->
              <rect x="50" y="50" width="300" height="150" class="array-box" rx="5" ry="5" />
              <text x="60" y="80" class="key">'usuario_id'</text>
              <text x="180" y="80" class="value">= 12345</text>

              <text x="60" y="110" class="key">'nombre'</text>
              <text x="180" y="110" class="value">= 'Juan Pérez'</text>

              <text x="60" y="140" class="key">'ultimo_acceso'</text>
              <text x="180" y="140" class="value">
                = '2023-06-15 14:30'
              </text>

              <text x="60" y="170" class="key">'carrito'</text>
              <text x="180" y="170" class="value">= Array(3 items)</text>

              <text x="20" y="100" class="bracket">[</text>
              <text x="20" y="180" class="bracket">]</text>

              <text x="200" y="30" class="key" font-size="14" font-weight="bold">
                $_SESSION
              </text>
            </svg>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <i class="fas fa-code me-2"></i>Funciones Principales
          </div>
          <div class="card-body">
            <div class="accordion" id="functionsAccordion">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#functionOne">
                    <i class="fas fa-play-circle me-2"></i>session_start()
                  </button>
                </h3>
                <div id="functionOne" class="accordion-collapse collapse show" data-bs-parent="#functionsAccordion">
                  <div class="accordion-body">
                    Inicia una nueva sesión o reanuda la existente. Debe
                    llamarse antes de cualquier output.
                    <div class="code-block mt-2">
                      <code>&lt;?php<br />session_start(); // Siempre al inicio
                            del script<br />?&gt;</code>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#functionTwo">
                    <i class="fas fa-edit me-2"></i>$_SESSION['clave']
                  </button>
                </h3>
                <div id="functionTwo" class="accordion-collapse collapse" data-bs-parent="#functionsAccordion">
                  <div class="accordion-body">
                    Accede o establece variables de sesión.
                    <div class="code-block mt-2">
                      <code>&lt;?php<br />$_SESSION['usuario'] = 'admin'; //
                            Establecer<br />$nombre = $_SESSION['usuario']; //
                            Obtener<br />?&gt;</code>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#functionThree">
                    <i class="fas fa-trash-alt me-2"></i>session_destroy()
                  </button>
                </h3>
                <div id="functionThree" class="accordion-collapse collapse" data-bs-parent="#functionsAccordion">
                  <div class="accordion-body">
                    Elimina todos los datos asociados con la sesión actual.
                    <div class="code-block mt-2">
                      <code>&lt;?php<br />session_start();<br />session_destroy();
                            // Elimina la sesión<br />?&gt;</code>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ejemplos Prácticos -->
  <section id="ejemplos" class="mb-5 py-4">
    <h2 class="fw-bold mb-4">
      <i class="fas fa-laptop-code text-primary me-2"></i> Ejemplo Práctico
    </h2>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-user me-2"></i>Sistema de Login Básico
          </div>
          <div class="card-body">
            <div class="d-flex mb-3">
              <div class="example-tab active" onclick="changeExample('login')">
                Login
              </div>
              <div class="example-tab" onclick="changeExample('verify')">
                Verificar
              </div>
              <div class="example-tab" onclick="changeExample('logout')">
                Logout
              </div>
            </div>

            <div id="login-example" class="tab-content">
              <h5>Página de login (login.php)</h5>
              <div class="code-block">
                <code>&lt;?php<br />session_start();<br /><br />if
                      ($_SERVER['REQUEST_METHOD'] == 'POST') {<br />
                      $usuario = $_POST['usuario'];<br />
                      $pass = $_POST['password'];<br /><br />
                      // Validación básica (en producción usar
                      password_hash/verify)<br />
                      if ($usuario === 'admin' && $pass === '1234') {<br />
                      $_SESSION['loggedin'] = true;<br />
                      $_SESSION['username'] = $usuario;<br />
                      header('Location: perfil.php');<br />
                      exit;<br />
                      } else {<br />
                      $error = "Credenciales incorrectas";<br />
                      }<br />}<br />?&gt;</code>
              </div>
            </div>

            <div id="verify-example" class="tab-content" style="display: none">
              <h5>Página protegida (perfil.php)</h5>
              <div class="code-block">
                <code>&lt;?php<br />session_start();<br /><br />// Verificar si
                      el usuario está logueado<br />if
                      (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']
                      !== true) {<br />
                      header('Location: login.php');<br />
                      exit;<br />}<br /><br />echo "Bienvenido,
                      ".htmlspecialchars($_SESSION['username']);<br />?&gt;<br /><br />&lt;a
                      href="logout.php">Cerrar sesión&lt;/a&gt;</code>
              </div>
            </div>

            <div id="logout-example" class="tab-content" style="display: none">
              <h5>Cerrar sesión (logout.php)</h5>
              <div class="code-block">
                <code>&lt;?php<br />session_start();<br /><br />// Eliminar
                      todas las variables de sesión<br />$_SESSION = array();<br /><br />//
                      Destruir la sesión<br />session_destroy();<br /><br />//
                      Redirigir al login<br />header('Location: login.php');<br />exit;<br />?&gt;</code>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function changeExample(example) {
    // Ocultar todos los contenidos
    document.querySelectorAll(".tab-content").forEach((content) => {
      content.style.display = "none";
    });

    // Mostrar el contenido seleccionado
    document.getElementById(example + "-example").style.display = "block";

    // Actualizar pestañas activas
    document.querySelectorAll(".example-tab").forEach((tab) => {
      tab.classList.remove("active");
    });

    event.currentTarget.classList.add("active");
  }
</script>