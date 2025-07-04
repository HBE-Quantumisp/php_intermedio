<!-- Hero Section -->
<section class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">Validación de Formularios</h1>
    <p class="lead mb-4">
      Aprende técnicas esenciales para validar formularios en el cliente y
      el servidor
    </p>
  </div>
</section>

<!-- Contenido Principal -->
<div class="container">
  <!-- Introducción -->
  <section id="introduccion" class="section">
    <h2 class="section-title">
      <i class="fas fa-info-circle me-2"></i>¿Qué es la Validación de
      Formularios?
    </h2>
    <div class="row">
      <div class="col-lg-6">
        <p>
          La validación de formularios es el proceso de verificar que los
          datos ingresados por un usuario cumplen con los requisitos
          específicos antes de ser enviados al servidor. Es una parte
          crítica del desarrollo web que garantiza:
        </p>

        <ul>
          <li>
            <span class="highlight">Integridad de datos</span>: La
            información cumple con el formato requerido
          </li>
          <li>
            <span class="highlight">Seguridad</span>: Prevención de
            inyecciones de código y otros ataques
          </li>
          <li>
            <span class="highlight">Experiencia de usuario</span>:
            Retroalimentación inmediata sobre errores
          </li>
          <li>
            <span class="highlight">Eficiencia</span>: Reduce errores y
            reprocesamiento en el servidor
          </li>
        </ul>

        <div class="alert alert-primary">
          <i class="fas fa-lightbulb me-2"></i>
          Una estrategia robusta de validación siempre incluye validación
          tanto en el cliente (JavaScript) como en el servidor (PHP, Python,
          etc.).
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-diagram text-center">
          <h5 class="mb-3">Proceso de Validación</h5>
          <svg viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg">
            <rect x="50" y="50" width="100" height="60" rx="10" fill="#4361ee" stroke="#3a0ca3" stroke-width="2"></rect>
            <text x="100" y="85" text-anchor="middle" fill="white" font-size="10">
              Entrada de Datos
            </text>

            <path d="M150 80 L200 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)"></path>

            <rect x="200" y="50" width="100" height="60" rx="10" fill="#f72585" stroke="#b5179e" stroke-width="2">
            </rect>
            <text x="250" y="85" text-anchor="middle" fill="white" font-size="10">
              Validación Cliente
            </text>

            <path d="M300 80 L350 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)"></path>

            <rect x="350" y="50" width="100" height="60" rx="10" fill="#4cc9f0" stroke="#4895ef" stroke-width="2">
            </rect>
            <text x="400" y="85" text-anchor="middle" fill="white" font-size="10">
              Validación Servidor
            </text>

            <defs>
              <marker id="arrow" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto"
                markerUnits="strokeWidth">
                <path d="M0,0 L0,6 L9,3 z" fill="#3a0ca3"></path>
              </marker>
            </defs>
          </svg>
        </div>
      </div>
    </div>

    <div class="validation-methods">
      <div class="method-card client-side">
        <i class="fas fa-desktop method-icon"></i>
        <h4>Validación en el Cliente</h4>
        <p>
          Ocurre en el navegador antes de enviar datos al servidor.
          Proporciona retroalimentación inmediata al usuario.
        </p>
        <ul>
          <li>HTML5 validation attributes</li>
          <li>JavaScript personalizado</li>
          <li>Bibliotecas como jQuery Validation</li>
          <li>Respuesta inmediata</li>
        </ul>
      </div>

      <div class="method-card server-side">
        <i class="fas fa-server method-icon"></i>
        <h4>Validación en el Servidor</h4>
        <p>
          Ocurre después de que los datos llegan al servidor. Es esencial
          para seguridad e integridad de datos.
        </p>
        <ul>
          <li>PHP filter functions</li>
          <li>Expresiones regulares</li>
          <li>Validación de tipos de datos</li>
          <li>Protección contra ataques</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Recibir datos del formulario -->
  <section id="recibir-datos" class="section">
    <h2 class="section-title">
      <i class="fas fa-download me-2"></i>Recibir los Datos del Formulario
    </h2>

    <div class="row">
      <div class="col-md-6">
        <p>
          El primer paso en el proceso de validación es recibir
          correctamente los datos enviados por el usuario. En PHP, esto se
          hace a través de las superglobales:
        </p>

        <ul>
          <li>
            <span class="highlight">$_GET</span>: Para datos enviados
            mediante el método GET (parámetros en la URL)
          </li>
          <li>
            <span class="highlight">$_POST</span>: Para datos enviados
            mediante el método POST (cuerpo de la solicitud)
          </li>
        </ul>

        <div class="alert alert-warning">
          <i class="fas fa-exclamation-triangle me-2"></i>
          Nunca confíes en los datos del usuario. Siempre asume que los
          datos recibidos podrían ser maliciosos o estar mal formados.
        </div>

        <h5 class="mt-4">Mejores prácticas:</h5>
        <ul>
          <li>Verifica que los campos esperados existen</li>
          <li>Asigna valores a variables locales</li>
          <li>Considera valores predeterminados para campos opcionales</li>
          <li>Limpia los datos antes de validarlos</li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5>Ejemplo de recepción de datos en PHP</h5>
          <div class="code-block">
            <span class="code-comment">&lt;?php</span><br />
            <span class="code-comment">// Verificar si se envió el formulario</span><br />
            <span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">$_SERVER</span>[<span
              style="color: #feb2b2">'REQUEST_METHOD'</span>] ==
            <span style="color: #feb2b2">'POST'</span>) {<br />
            <br />
            &nbsp;&nbsp;<span class="code-comment">// Recibir datos del formulario</span><br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$nombre</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'nombre'</span>] ?? <span
              style="color: #feb2b2">''</span>;<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$email</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'email'</span>] ?? <span
              style="color: #feb2b2">''</span>;<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$password</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'password'</span>] ?? <span
              style="color: #feb2b2">''</span>;<br />
            <br />
            &nbsp;&nbsp;<span class="code-comment">// Limpieza básica de datos</span><br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$nombre</span> =
            <span style="color: #90cdf4">trim</span>(<span style="color: #f9a8d4">$nombre</span>);<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$email</span> =
            <span style="color: #90cdf4">trim</span>(<span style="color: #f9a8d4">$email</span>);<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$password</span> =
            <span style="color: #90cdf4">trim</span>(<span style="color: #f9a8d4">$password</span>);<br />
            <br />
            &nbsp;&nbsp;<span class="code-comment">// Continuar con validación...</span><br />
            }<br />
            <span class="code-comment">?&gt;</span>
          </div>
        </div>
      </div>
    </div>

    <div class="validation-process">
      <div class="validation-step">
        <div class="step-number">1</div>
        <h5>Enviar Formulario</h5>
        <p>Usuario completa y envía el formulario</p>
      </div>
      <div class="validation-step">
        <div class="step-number">2</div>
        <h5>Recibir Datos</h5>
        <p>Servidor recibe datos a través de $_POST o $_GET</p>
      </div>
      <div class="validation-step">
        <div class="step-number">3</div>
        <h5>Limpieza</h5>
        <p>Eliminar espacios y caracteres innecesarios</p>
      </div>
      <div class="validation-step">
        <div class="step-number">4</div>
        <h5>Asignar Variables</h5>
        <p>Guardar datos en variables para validación</p>
      </div>
    </div>
  </section>

  <!-- Validación Parte 1 -->
  <section id="validar-p1" class="section">
    <h2 class="section-title">
      <i class="fas fa-check-circle me-2"></i>Validar el Formulario (Primera
      Parte)
    </h2>

    <div class="row">
      <div class="col-md-6">
        <p>
          La primera parte de la validación se centra en comprobar los
          requisitos básicos de cada campo:
        </p>

        <h5>Validaciones esenciales:</h5>
        <ul>
          <li>
            <span class="highlight">Campo obligatorio</span>: Verificar que
            los campos requeridos no estén vacíos
          </li>
          <li>
            <span class="highlight">Longitud mínima/máxima</span>: Comprobar
            que el texto tiene el tamaño adecuado
          </li>
          <li>
            <span class="highlight">Formato básico</span>: Validar emails,
            URLs, números telefónicos
          </li>
          <li>
            <span class="highlight">Tipos de datos</span>: Asegurar que
            números sean numéricos, fechas válidas, etc.
          </li>
        </ul>

        <div class="alert alert-info">
          <i class="fas fa-exclamation-circle me-2"></i>
          Esta validación inicial elimina los errores más evidentes antes de
          realizar comprobaciones más complejas.
        </div>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5>Validación en el cliente</h5>
          <div class="mb-3">
            <label for="emailEjemplo" class="form-label">Correo electrónico *</label>
            <input type="email" class="form-control" id="emailEjemplo" required />
            <div class="invalid-feedback">
              Por favor ingresa un email válido.
            </div>
          </div>

          <div class="mb-3">
            <label for="passEjemplo" class="form-label">Contraseña (6-20 caracteres) *</label>
            <input type="password" class="form-control" id="passEjemplo" minlength="6" maxlength="20" required />
            <div class="invalid-feedback">
              La contraseña debe tener entre 6 y 20 caracteres.
            </div>
          </div>

          <button class="btn btn-primary" onclick="validarEjemplo()">
            Validar
          </button>
        </div>
      </div>
    </div>

    <div class="step-content">
      <h5>Cómo implementar validación básica en PHP:</h5>
      <div class="code-block">
        <span class="code-comment">// Validar campos obligatorios</span><br />
        <span style="color: #f9a8d4">$errores</span> = [];<br />
        <br />
        <span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">empty</span>(<span
          style="color: #f9a8d4">$nombre</span>)) {<br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
        <span style="color: #feb2b2">"El nombre es obligatorio."</span>;<br />
        }<br />
        <br />
        <span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">empty</span>(<span
          style="color: #f9a8d4">$email</span>)) {<br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
        <span style="color: #feb2b2">"El email es obligatorio."</span>;<br />
        } <span style="color: #f9a8d4">elseif</span> (!<span style="color: #90cdf4">filter_var</span>(<span
          style="color: #f9a8d4">$email</span>,
        <span style="color: #90cdf4">FILTER_VALIDATE_EMAIL</span>)) {<br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
        <span style="color: #feb2b2">"El formato del email es inválido."</span>;<br />
        }<br />
        <br />
        <span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">strlen</span>(<span
          style="color: #f9a8d4">$password</span>)
        < 6) {<br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
        <span style="color: #feb2b2">"La contraseña debe tener al menos 6 caracteres."</span>;<br />
        }
      </div>
    </div>
  </section>

  <!-- Validación Parte 2 -->
  <section id="validar-p2" class="section">
    <h2 class="section-title">
      <i class="fas fa-check-double me-2"></i>Validación de Formularios
      (Segunda Parte)
    </h2>

    <div class="row">
      <div class="col-md-6">
        <p>
          La segunda parte de la validación implica comprobaciones más
          avanzadas y específicas del dominio:
        </p>

        <h5>Validaciones avanzadas:</h5>
        <ul>
          <li>
            <span class="highlight">Expresiones regulares</span>: Para
            patrones complejos como números de tarjeta de crédito
          </li>
          <li>
            <span class="highlight">Unicidad</span>: Verificar si un email o
            nombre de usuario ya existe
          </li>
          <li>
            <span class="highlight">Coherencia</span>: Confirmar que dos
            campos coinciden (ej: contraseñas)
          </li>
          <li>
            <span class="highlight">Validación de archivos</span>: Comprobar
            tipo, tamaño y dimensiones de imágenes
          </li>
          <li>
            <span class="highlight">Seguridad</span>: Prevenir inyecciones
            SQL y XSS
          </li>
        </ul>

        <div class="alert alert-danger">
          <i class="fas fa-shield-alt me-2"></i>
          La validación en el servidor es imprescindible para seguridad, ya
          que la validación en el cliente puede ser evitada.
        </div>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5>Validación avanzada en PHP</h5>
          <div class="code-block">
            <span class="code-comment">// Validar formato de teléfono con expresión regular</span><br />
            <span style="color: #f9a8d4">$telefono</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'telefono'</span>];<br />
            <span style="color: #f9a8d4">$patron</span> =
            <span style="color: #feb2b2">'/^[0-9]{9}$/'</span>;
            <span class="code-comment">// 9 dígitos</span><br />
            <br />
            <span style="color: #f9a8d4">if</span> (!<span style="color: #90cdf4">preg_match</span>(<span
              style="color: #f9a8d4">$patron</span>,
            <span style="color: #f9a8d4">$telefono</span>)) {<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
            <span style="color: #feb2b2">"Formato de teléfono inválido."</span>;<br />
            }<br />
            <br />
            <span class="code-comment">// Verificar que las contraseñas coinciden</span><br />
            <span style="color: #f9a8d4">$password</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'password'</span>];<br />
            <span style="color: #f9a8d4">$confirm_password</span> =
            <span style="color: #90cdf4">$_POST</span>[<span style="color: #feb2b2">'confirm_password'</span>];<br />
            <br />
            <span style="color: #f9a8d4">if</span> (<span style="color: #f9a8d4">$password</span>
            !== <span style="color: #f9a8d4">$confirm_password</span>) {<br />
            &nbsp;&nbsp;<span style="color: #f9a8d4">$errores</span>[] =
            <span style="color: #feb2b2">"Las contraseñas no coinciden."</span>;<br />
            }<br />
            <br />
            <span class="code-comment">// Sanitizar para prevenir XSS</span><br />
            <span style="color: #f9a8d4">$comentario</span> =
            <span style="color: #90cdf4">htmlspecialchars</span>(<span style="color: #90cdf4">$_POST</span>[<span
              style="color: #feb2b2">'comentario'</span>],
            <span style="color: #90cdf4">ENT_QUOTES</span>,
            <span style="color: #feb2b2">'UTF-8'</span>);
          </div>
        </div>
      </div>
    </div>

    <div class="validation-diagram">
      <h5 class="text-center mb-4">Flujo de Validación en el Servidor</h5>
      <svg viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
        <rect x="50" y="50" width="100" height="60" rx="10" fill="#4361ee" stroke="#3a0ca3" stroke-width="2" />
        <text x="100" y="85" text-anchor="middle" fill="white" font-size="12">
          Recibir Datos
        </text>

        <path d="M150 80 L200 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />

        <rect x="200" y="50" width="100" height="60" rx="10" fill="#4cc9f0" stroke="#4895ef" stroke-width="2" />
        <text x="250" y="85" text-anchor="middle" fill="white" font-size="12">
          Validación Básica
        </text>

        <path d="M300 80 L350 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />

        <rect x="350" y="50" width="100" height="60" rx="10" fill="#4895ef" stroke="#4361ee" stroke-width="2" />
        <text x="400" y="85" text-anchor="middle" fill="white" font-size="12">
          Validación Avanzada
        </text>

        <path d="M450 80 L500 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />

        <rect x="500" y="50" width="100" height="60" rx="10" fill="#f72585" stroke="#b5179e" stroke-width="2" />
        <text x="550" y="85" text-anchor="middle" fill="white" font-size="12">
          Sanitización
        </text>

        <path d="M300 150 L300 200" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />
        <path d="M300 200 L100 200 L100 250" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />
        <path d="M300 200 L500 200 L500 250" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)" />

        <rect x="50" y="250" width="100" height="60" rx="10" fill="#e63946" stroke="#d00000" stroke-width="2" />
        <text x="100" y="285" text-anchor="middle" fill="white" font-size="12">
          Mostrar Errores
        </text>

        <rect x="450" y="250" width="100" height="60" rx="10" fill="#2a9d8f" stroke="#1d7870" stroke-width="2" />
        <text x="500" y="285" text-anchor="middle" fill="white" font-size="12">
          Procesar Datos
        </text>

        <text x="100" y="210" text-anchor="middle" fill="#e63946" font-size="12" font-weight="bold">
          Errores
        </text>
        <text x="500" y="210" text-anchor="middle" fill="#2a9d8f" font-size="12" font-weight="bold">
          Éxito
        </text>

        <defs>
          <marker id="arrow" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto"
            markerUnits="strokeWidth">
            <path d="M0,0 L0,6 L9,3 z" fill="#3a0ca3" />
          </marker>
        </defs>
      </svg>
    </div>
  </section>

  <!-- Ejemplo Práctico -->
  <section id="ejemplo" class="section">
    <h2 class="section-title">
      <i class="fas fa-laptop-code me-2"></i>Ejemplo Práctico de Validación
    </h2>

    <div class="row">
      <div class="col-lg-6">
        <p>
          Este formulario demuestra validación en tiempo real tanto en el
          cliente como en el servidor (simulado).
        </p>

        <h5>Características implementadas:</h5>
        <ul>
          <li>Validación en tiempo real con JavaScript</li>
          <li>Mensajes de error específicos</li>
          <li>Validación de formato de email</li>
          <li>Comprobación de fortaleza de contraseña</li>
          <li>Confirmación de contraseña</li>
          <li>Términos y condiciones requeridos</li>
          <li>Simulación de validación en servidor</li>
        </ul>

        <div class="alert alert-success">
          <i class="fas fa-check-circle me-2"></i>
          Observa cómo los campos se validan a medida que escribes y cómo se
          muestran mensajes de error específicos.
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-container">
          <form id="registrationForm" novalidate>
            <div class="mb-3">
              <label for="fullName" class="form-label">Nombre completo *</label>
              <input type="text" class="form-control" id="fullName" name="fullName" required />
              <div class="invalid-feedback">
                Por favor ingresa tu nombre completo.
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico *</label>
              <input type="email" class="form-control" id="email" name="email" required />
              <div class="invalid-feedback">
                Por favor ingresa un email válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{9}"
                placeholder="Ej: 612345678" />
              <div class="invalid-feedback">
                Por favor ingresa un número de 9 dígitos.
              </div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña *</label>
              <input type="password" class="form-control" id="password" name="password" minlength="8" required />
              <div class="invalid-feedback">
                La contraseña debe tener al menos 8 caracteres.
              </div>
              <div class="form-text">
                Debe contener al menos: 8 caracteres, 1 mayúscula, 1 número
              </div>
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirmar contraseña *</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required />
              <div class="invalid-feedback">
                Las contraseñas no coinciden.
              </div>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="terms" name="terms" required />
              <label class="form-check-label" for="terms">Acepto los términos y condiciones *</label>
              <div class="invalid-feedback">
                Debes aceptar los términos para continuar.
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Registrarse
            </button>
          </form>

          <div id="formResult" class="mt-4"></div>
        </div>
      </div>
    </div>
  </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Validación del formulario de ejemplo
  const registrationForm = document.getElementById("registrationForm");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");
  const formResult = document.getElementById("formResult");

  // Validación en tiempo real
  passwordInput.addEventListener("input", function () {
    validatePasswordStrength();
  });

  confirmPasswordInput.addEventListener("input", function () {
    validatePasswordMatch();
  });

  // Validar fortaleza de contraseña
  function validatePasswordStrength() {
    const password = passwordInput.value;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasNumber = /[0-9]/.test(password);

    if (password.length >= 8 && hasUpperCase && hasNumber) {
      passwordInput.classList.remove("is-invalid");
      passwordInput.classList.add("is-valid");
    } else {
      passwordInput.classList.remove("is-valid");
      if (password.length > 0) {
        passwordInput.classList.add("is-invalid");
      }
    }
  }

  // Validar coincidencia de contraseñas
  function validatePasswordMatch() {
    if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordInput.classList.add("is-invalid");
      confirmPasswordInput.classList.remove("is-valid");
    } else {
      confirmPasswordInput.classList.remove("is-invalid");
      if (confirmPasswordInput.value.length > 0) {
        confirmPasswordInput.classList.add("is-valid");
      }
    }
  }

  // Manejar envío del formulario
  registrationForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Validar todo el formulario
    if (!registrationForm.checkValidity()) {
      e.stopPropagation();
      registrationForm.classList.add("was-validated");
      return;
    }

    // Validación personalizada adicional
    validatePasswordStrength();
    validatePasswordMatch();

    if (
      passwordInput.classList.contains("is-invalid") ||
      confirmPasswordInput.classList.contains("is-invalid")
    ) {
      formResult.innerHTML = `
                    <div class="alert alert-danger">
                        <h5><i class="fas fa-exclamation-triangle me-2"></i>Errores en el formulario</h5>
                        <p>Por favor corrige los errores resaltados antes de enviar.</p>
                    </div>
                `;
      return;
    }

    // Simular envío al servidor
    formResult.innerHTML = `
                <div class="alert alert-info">
                    <h5><i class="fas fa-sync-alt fa-spin me-2"></i>Validando en el servidor...</h5>
                    <p>Simulando validación del lado del servidor.</p>
                </div>
            `;

    // Simular retraso de servidor
    setTimeout(function () {
      formResult.innerHTML = `
                    <div class="alert alert-success">
                        <h5><i class="fas fa-check-circle me-2"></i>¡Registro exitoso!</h5>
                        <p>Tu cuenta ha sido creada correctamente.</p>
                        <p class="mb-0">En un entorno real, los datos serían almacenados en la base de datos después de pasar todas las validaciones.</p>
                    </div>
                `;

      // Desplazar a los resultados
      formResult.scrollIntoView({ behavior: "smooth" });
    }, 2000);
  });

  // Función para validar ejemplo anterior
  function validarEjemplo() {
    const email = document.getElementById("emailEjemplo");
    const pass = document.getElementById("passEjemplo");

    if (!email.checkValidity()) {
      email.classList.add("is-invalid");
    } else {
      email.classList.remove("is-invalid");
    }

    if (!pass.checkValidity()) {
      pass.classList.add("is-invalid");
    } else {
      pass.classList.remove("is-invalid");
    }
  }

  // Smooth scrolling para enlaces de navegación
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
</script>