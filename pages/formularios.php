<!-- Hero Section -->
<section class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">Formularios Web en PHP</h1>
    <p class="lead mb-4">
      Aprende todo sobre formularios HTML, sus campos, atributos y cómo
      procesarlos con PHP
    </p>
  </div>
</section>

<!-- Contenido Principal -->
<div class="container">
  <!-- Introducción -->
  <section id="introduccion" class="section">
    <h2 class="section-title">
      <i class="fas fa-info-circle me-2"></i>¿Qué son los Formularios Web?
    </h2>
    <div class="row">
      <div class="col-lg-6">
        <p>
          Los formularios web son componentes esenciales de las aplicaciones
          web que permiten a los usuarios introducir y enviar información al
          servidor. Son la principal herramienta de interacción entre el
          usuario y el sistema.
        </p>

        <p>Un formulario típico consta de:</p>
        <ul>
          <li>
            <span class="highlight">Campos de entrada</span> (texto,
            contraseña, email, etc.)
          </li>
          <li>
            <span class="highlight">Áreas de texto</span> para entradas más
            largas
          </li>
          <li>
            <span class="highlight">Listas desplegables</span> (select)
          </li>
          <li>
            <span class="highlight">Botones</span> para enviar o resetear el
            formulario
          </li>
        </ul>

        <div class="alert alert-primary">
          <i class="fas fa-lightbulb me-2"></i>
          Los formularios son la base de aplicaciones como sistemas de
          login, registros de usuarios, encuestas, sistemas de compra y
          cualquier interacción que requiera entrada de datos.
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-diagram text-center">
          <h5 class="mb-3">Flujo de un formulario web</h5>
          <svg viewBox="0 0 500 200" xmlns="http://www.w3.org/2000/svg">
            <rect x="50" y="50" width="100" height="60" rx="10" fill="#4361ee" stroke="#3a0ca3" stroke-width="2">
            </rect>
            <text x="100" y="85" text-anchor="middle" fill="white" font-size="10">
              Formulario HTML
            </text>

            <path d="M150 80 L200 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)"></path>

            <rect x="200" y="50" width="100" height="60" rx="10" fill="#f72585" stroke="#b5179e" stroke-width="2">
            </rect>
            <text x="250" y="85" text-anchor="middle" fill="white" font-size="10">
              Envío (POST/GET)
            </text>

            <path d="M300 80 L350 80" stroke="#3a0ca3" stroke-width="2" marker-end="url(#arrow)"></path>

            <rect x="350" y="50" width="100" height="60" rx="10" fill="#4cc9f0" stroke="#4895ef" stroke-width="2">
            </rect>
            <text x="400" y="85" text-anchor="middle" fill="white" font-size="10">
              Procesamiento (PHP)
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

    <div class="mt-4">
      <h5>Estructura básica de un formulario:</h5>
      <div class="code-block">
        <span class="code-comment">&lt;!-- Etiqueta form que envuelve todo el formulario
          --&gt;</span><br />
        &lt;<span style="color: #63b3ed">form</span>
        <span style="color: #a78bfa">action</span>=<span style="color: #feb2b2">"procesar.php"</span>
        <span style="color: #a78bfa">method</span>=<span style="color: #feb2b2">"POST"</span>&gt;<br />
        <br />
        <span class="code-comment">&lt;!-- Campo de entrada de texto --&gt;</span><br />
        &lt;<span style="color: #63b3ed">label</span>
        <span style="color: #a78bfa">for</span>=<span style="color: #feb2b2">"nombre"</span>&gt;Nombre:&lt;/<span
          style="color: #63b3ed">label</span>&gt;<br />
        &lt;<span style="color: #63b3ed">input</span>
        <span style="color: #a78bfa">type</span>=<span style="color: #feb2b2">"text"</span>
        <span style="color: #a78bfa">id</span>=<span style="color: #feb2b2">"nombre"</span>
        <span style="color: #a78bfa">name</span>=<span style="color: #feb2b2">"nombre"</span>
        <span style="color: #a78bfa">required</span>&gt;<br />
        <br />
        <span class="code-comment">&lt;!-- Botón de envío --&gt;</span><br />
        &lt;<span style="color: #63b3ed">button</span>
        <span style="color: #a78bfa">type</span>=<span style="color: #feb2b2">"submit"</span>&gt;Enviar&lt;/<span
          style="color: #63b3ed">button</span>&gt;<br />
        <br />
        &lt;/<span style="color: #63b3ed">form</span>&gt;
      </div>
    </div>
  </section>

  <!-- Campos y Atributos -->
  <section id="campos" class="section">
    <h2 class="section-title">
      <i class="fas fa-keyboard me-2"></i>Campos y Atributos
    </h2>

    <div class="row mb-4">
      <div class="col-md-6">
        <h5>Atributos esenciales:</h5>
        <ul class="list-group">
          <li class="list-group-item">
            <span class="fw-bold">name:</span> Identificador del campo al
            procesar el formulario
          </li>
          <li class="list-group-item">
            <span class="fw-bold">id:</span> Identificador único en el
            documento HTML
          </li>
          <li class="list-group-item">
            <span class="fw-bold">type:</span> Define el tipo de campo
            (text, email, password, etc.)
          </li>
          <li class="list-group-item">
            <span class="fw-bold">value:</span> Valor inicial del campo
          </li>
          <li class="list-group-item">
            <span class="fw-bold">placeholder:</span> Texto de ejemplo que
            desaparece al escribir
          </li>
          <li class="list-group-item">
            <span class="fw-bold">required:</span> Indica que el campo es
            obligatorio
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5 class="text-center mb-3">Atributos en acción</h5>
          <div class="mb-3">
            <label for="ejemploNombre" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="ejemploNombre" name="nombre" placeholder="Ej: Juan Pérez"
              required />
            <div class="form-text">
              Atributos: type="text", name="nombre", placeholder, required
            </div>
          </div>

          <div class="mb-3">
            <label for="ejemploEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="ejemploEmail" name="email" placeholder="ejemplo@dominio.com"
              required />
            <div class="form-text">
              Atributos: type="email", name="email", placeholder, required
            </div>
          </div>
        </div>
      </div>
    </div>

    <h5 class="mt-4">Ejemplo de formulario con diversos campos:</h5>
    <div class="form-example">
      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required />
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" required />
        </div>

        <div class="mb-3">
          <label class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" name="fecha_nacimiento" />
        </div>

        <div class="mb-3">
          <label class="form-label">Color favorito</label>
          <input type="color" class="form-control form-control-color" name="color" value="#4361ee" />
        </div>

        <button type="" class="btn btn-primary">Registrarse</button>
      </form>
    </div>
  </section>

  <!-- Tipos de Campos -->
  <section id="tipos" class="section">
    <h2 class="section-title">
      <i class="fas fa-list-ul me-2"></i>Tipos de Campos
    </h2>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="feature-card card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-font"></i>
            </div>
            <h5>Textos</h5>
            <p>Campos para entrada de texto:</p>
            <ul class="text-start">
              <li>text (básico)</li>
              <li>email (validación de email)</li>
              <li>password (oculta caracteres)</li>
              <li>tel (números telefónicos)</li>
              <li>url (direcciones web)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h5>Fechas y Horas</h5>
            <p>Selección de fechas y horas:</p>
            <ul class="text-start">
              <li>date (fecha)</li>
              <li>time (hora)</li>
              <li>datetime-local (fecha y hora)</li>
              <li>month (mes y año)</li>
              <li>week (semana del año)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-sliders-h"></i>
            </div>
            <h5>Selección y Rangos</h5>
            <p>Elementos de selección:</p>
            <ul class="text-start">
              <li>checkbox (múltiple selección)</li>
              <li>radio (selección única)</li>
              <li>range (deslizador)</li>
              <li>file (subir archivos)</li>
              <li>color (selector de color)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <h5 class="mt-4">Ejemplo con diversos tipos:</h5>
    <div class="form-example">
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label">Búsqueda</label>
              <input type="search" class="form-control" placeholder="Buscar..." />
            </div>

            <div class="mb-3">
              <label class="form-label">Número (1-100)</label>
              <input type="number" class="form-control" min="1" max="100" />
            </div>

            <div class="mb-3">
              <label class="form-label">Rango</label>
              <input type="range" class="form-range" min="0" max="100" step="10" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label">Archivo</label>
              <input type="file" class="form-control" />
            </div>

            <div class="mb-3">
              <label class="form-label">Selección única</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioEjemplo" id="radio1" />
                <label class="form-check-label" for="radio1">Opción 1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioEjemplo" id="radio2" />
                <label class="form-check-label" for="radio2">Opción 2</label>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Selección múltiple</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" />
                <label class="form-check-label" for="check1">Opción A</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check2" />
                <label class="form-check-label" for="check2">Opción B</label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- Textarea -->
  <section id="textarea" class="section">
    <h2 class="section-title">
      <i class="fas fa-align-left me-2"></i>Textarea
    </h2>

    <div class="row">
      <div class="col-md-6">
        <p>
          El elemento <span class="highlight">textarea</span> se utiliza
          para entradas de texto multilínea, como comentarios, mensajes o
          descripciones largas.
        </p>

        <h5>Atributos importantes:</h5>
        <ul>
          <li>
            <span class="highlight">rows</span>: Define el número visible de
            líneas
          </li>
          <li>
            <span class="highlight">cols</span>: Define el ancho visible en
            caracteres
          </li>
          <li>
            <span class="highlight">wrap</span>: Controla cómo se envuelve
            el texto (soft/hard)
          </li>
          <li>
            <span class="highlight">maxlength</span>: Máximo número de
            caracteres permitidos
          </li>
        </ul>

        <div class="alert alert-info">
          <i class="fas fa-exclamation-circle me-2"></i>
          A diferencia del input, el textarea tiene una etiqueta de cierre y
          su contenido es el valor por defecto.
        </div>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5>Ejemplo de Textarea</h5>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Tu mensaje</label>
            <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
          </div>
          <div class="form-text">
            Este textarea tiene 4 filas visibles y un placeholder
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Código HTML:</h5>
      <div class="code-block">
        &lt;<span style="color: #63b3ed">label</span>
        <span style="color: #a78bfa">for</span>=<span
          style="color: #feb2b2">"comentario"</span>&gt;Comentario:&lt;/<span
          style="color: #63b3ed">label</span>&gt;<br />
        &lt;<span style="color: #63b3ed">textarea</span> <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">id</span>=<span style="color: #feb2b2">"comentario"</span>
        <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">name</span>=<span style="color: #feb2b2">"comentario"</span>
        <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">rows</span>=<span style="color: #feb2b2">"5"</span>
        <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">cols</span>=<span style="color: #feb2b2">"50"</span>
        <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">maxlength</span>=<span style="color: #feb2b2">"500"</span>
        <br />
        &nbsp;&nbsp;<span style="color: #a78bfa">placeholder</span>=<span style="color: #feb2b2">"Escribe tu
          comentario aquí (máx. 500 caracteres)"</span><br />
        &gt;&lt;/<span style="color: #63b3ed">textarea</span>&gt;
      </div>
    </div>
  </section>

  <!-- Select -->
  <section id="select" class="section">
    <h2 class="section-title">
      <i class="fas fa-caret-down me-2"></i>Elemento Select
    </h2>

    <div class="row">
      <div class="col-md-6">
        <p>
          El elemento <span class="highlight">select</span> crea una lista
          desplegable que permite a los usuarios elegir una o varias
          opciones de una lista.
        </p>

        <h5>Características principales:</h5>
        <ul>
          <li>
            Opciones definidas con <span class="highlight">option</span>
          </li>
          <li>
            Agrupación de opciones con
            <span class="highlight">optgroup</span>
          </li>
          <li>
            Selección múltiple con el atributo
            <span class="highlight">multiple</span>
          </li>
          <li>
            Valor pre-seleccionado con
            <span class="highlight">selected</span>
          </li>
          <li>
            Deshabilitar opciones con
            <span class="highlight">disabled</span>
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="visual-guide">
          <h5>Ejemplo de Select</h5>
          <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <select class="form-select" id="pais" name="pais">
              <option value="" disabled selected>Selecciona un país</option>
              <option value="mx">México</option>
              <option value="es">España</option>
              <option value="ar">Argentina</option>
              <option value="co">Colombia</option>
              <option value="cl">Chile</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="intereses" class="form-label">Intereses (múltiple)</label>
            <select class="form-select" id="intereses" name="intereses[]" multiple size="3">
              <option value="tecnologia">Tecnología</option>
              <option value="deportes">Deportes</option>
              <option value="musica">Música</option>
              <option value="viajes">Viajes</option>
              <option value="cocina">Cocina</option>
            </select>
            <div class="form-text">
              Mantén presionada la tecla Ctrl para seleccionar múltiples
              opciones
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Código HTML para select con grupos:</h5>
      <div class="code-block">
        &lt;<span style="color: #63b3ed">label</span>
        <span style="color: #a78bfa">for</span>=<span style="color: #feb2b2">"categoria"</span>&gt;Categoría:&lt;/<span
          style="color: #63b3ed">label</span>&gt;<br />
        &lt;<span style="color: #63b3ed">select</span>
        <span style="color: #a78bfa">id</span>=<span style="color: #feb2b2">"categoria"</span>
        <span style="color: #a78bfa">name</span>=<span style="color: #feb2b2">"categoria"</span>&gt;<br />
        <br />
        &nbsp;&nbsp;&lt;<span style="color: #63b3ed">optgroup</span>
        <span style="color: #a78bfa">label</span>=<span style="color: #feb2b2">"Tecnología"</span>&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style="color: #63b3ed">option</span>
        <span style="color: #a78bfa">value</span>=<span style="color: #feb2b2">"laptops"</span>&gt;Laptops&lt;/<span
          style="color: #63b3ed">option</span>&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style="color: #63b3ed">option</span>
        <span style="color: #a78bfa">value</span>=<span
          style="color: #feb2b2">"smartphones"</span>&gt;Smartphones&lt;/<span
          style="color: #63b3ed">option</span>&gt;<br />
        &nbsp;&nbsp;&lt;/<span style="color: #63b3ed">optgroup</span>&gt;<br />
        <br />
        &nbsp;&nbsp;&lt;<span style="color: #63b3ed">optgroup</span>
        <span style="color: #a78bfa">label</span>=<span style="color: #feb2b2">"Hogar"</span>&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style="color: #63b3ed">option</span>
        <span style="color: #a78bfa">value</span>=<span
          style="color: #feb2b2">"electrodomesticos"</span>&gt;Electrodomésticos&lt;/<span
          style="color: #63b3ed">option</span>&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style="color: #63b3ed">option</span>
        <span style="color: #a78bfa">value</span>=<span style="color: #feb2b2">"muebles"</span>&gt;Muebles&lt;/<span
          style="color: #63b3ed">option</span>&gt;<br />
        &nbsp;&nbsp;&lt;/<span style="color: #63b3ed">optgroup</span>&gt;<br />
        <br />
        &lt;/<span style="color: #63b3ed">select</span>&gt;
      </div>
    </div>
  </section>

  <!-- Procesamiento con PHP -->
  <section id="php" class="section">
    <h2 class="section-title">
      <i class="fab fa-php me-2"></i>Procesamiento con PHP
    </h2>

    <div class="row">
      <div class="col-lg-6">
        <p>
          PHP es un lenguaje de programación del lado del servidor ideal
          para procesar formularios. Los datos enviados desde el formulario
          son accesibles a través de las superglobales
          <span class="highlight">$_GET</span> y
          <span class="highlight">$_POST</span>.
        </p>

        <h5>Métodos de envío:</h5>
        <ul>
          <li>
            <span class="highlight">GET</span>: Los datos se envían en la
            URL (limitado en tamaño)
          </li>
          <li>
            <span class="highlight">POST</span>: Los datos se envían en el
            cuerpo de la solicitud (sin límites visibles)
          </li>
        </ul>

        <div class="alert alert-warning">
          <i class="fas fa-shield-alt me-2"></i>
          Siempre valida y sanitiza los datos del usuario para prevenir
          vulnerabilidades de seguridad como inyecciones SQL o XSS.
        </div>
      </div>
      <div class="col-lg-6">
        <div class="visual-guide">
          <h5>Flujo de procesamiento en PHP</h5>
          <ol>
            <li>Usuario envía formulario</li>
            <li>Servidor recibe los datos</li>
            <li>PHP accede a los datos con $_POST o $_GET</li>
            <li>Validar y sanitizar los datos</li>
            <li>
              Procesar la información (guardar en DB, enviar email, etc.)
            </li>
            <li>Mostrar resultado al usuario</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Ejemplo de código PHP para procesar un formulario:</h5>
      <div class="code-block">
        <span class="code-comment">&lt;?php</span><br />
        <span class="code-comment">// Verificar si se envió el formulario</span><br />
        <span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">$_SERVER</span>[<span
          style="color: #feb2b2">'REQUEST_METHOD'</span>] ==
        <span style="color: #feb2b2">'POST'</span>) {<br />
        <br />
        &nbsp;&nbsp;<span class="code-comment">// Recuperar y sanitizar datos</span><br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$nombre</span> =
        <span style="color: #90cdf4">htmlspecialchars</span>(<span style="color: #90cdf4">$_POST</span>[<span
          style="color: #feb2b2">'nombre'</span>]);<br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">$email</span> =
        <span style="color: #90cdf4">filter_var</span>(<span style="color: #90cdf4">$_POST</span>[<span
          style="color: #feb2b2">'email'</span>],
        <span style="color: #90cdf4">FILTER_SANITIZE_EMAIL</span>);<br />
        <br />
        &nbsp;&nbsp;<span class="code-comment">// Validar email</span><br />
        &nbsp;&nbsp;<span style="color: #f9a8d4">if</span> (<span style="color: #90cdf4">filter_var</span>(<span
          style="color: #f9a8d4">$email</span>,
        <span style="color: #90cdf4">FILTER_VALIDATE_EMAIL</span>)) {<br />
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment">// Procesamiento válido (ej: guardar en DB)</span><br />
        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #90cdf4">echo</span>
        <span style="color: #feb2b2">"&lt;div class='alert alert-success'&gt;Gracias </span><span
          style="color: #63b3ed">{$nombre}</span><span style="color: #feb2b2">, tu email </span><span
          style="color: #63b3ed">{$email}</span><span style="color: #feb2b2">
          ha sido registrado.&lt;/div&gt;"</span>;<br />
        &nbsp;&nbsp;} <span style="color: #f9a8d4">else</span> {<br />
        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #90cdf4">echo</span>
        <span style="color: #feb2b2">"&lt;div class='alert alert-danger'&gt;Por favor ingresa un email
          válido.&lt;/div&gt;"</span>;<br />
        &nbsp;&nbsp;}<br />
        }<br />
        <span class="code-comment">?&gt;</span>
      </div>
    </div>

    <div class="form-container">
      <h4 class="mb-4">Prueba un formulario con PHP (simulado)</h4>
      <form id="demoForm" action="formularios.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Nombre completo</label>
            <input type="text" class="form-control" name="nombre_prueba" required />
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="email_prueba" required />
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Mensaje</label>
          <textarea class="form-control" name="mensaje_prueba" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Tipo de consulta</label>
          <select class="form-select" name="consulta_prueba">
            <option value="informacion">Información general</option>
            <option value="soporte">Soporte técnico</option>
            <option value="ventas">Consultas de ventas</option>
            <option value="otro">Otro</option>
          </select>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter" checked />
          <label class="form-check-label" for="newsletter">Suscribirme al newsletter</label>
        </div>

        <button type="submit" class="btn btn-primary">
          Enviar mensaje
        </button>
      </form>

      <div id="resultado" class="mt-4">
        <?php if (isset($respose) && $respose == true): ?>
          <div class="alert alert-success">
            <h5><i class="fas fa-check-circle me-2"></i>¡Formulario enviado correctamente!</h5>
            <p>Hola <?= $nombre ?>, gracias por tu mensaje. Esta información fue procesada por PHP en el servidor.</p>
            <p class="mb-0">Los datos fueron validados, sanitizados y luego devueltos por el servidor en un HTML</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Simulación de envío de formulario
  document
    .getElementById("demoForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      // Simular procesamiento
      const nombre = document.querySelector('input[name="nombre"]').value;
      const resultadoDiv = document.getElementById("resultado");

      resultadoDiv.innerHTML = `
              <div class="alert alert-success">
                  <h5><i class="fas fa-check-circle me-2"></i>¡Formulario enviado correctamente!</h5>
                  <p>Hola ${nombre}, gracias por tu mensaje. En un entorno real, esta información sería procesada por PHP en el servidor.</p>
                  <p class="mb-0">Los datos serían validados, sanitizados y luego almacenados en una base de datos o enviados por correo electrónico.</p>
              </div>
          `;

      // Desplazar a los resultados
      resultadoDiv.scrollIntoView({ behavior: "smooth" });
    });

  // Smooth scrolling para enlaces de navegación
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  // Cambiar el navbar al hacer scroll
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-scrolled");
    } else {
      navbar.classList.remove("navbar-scrolled");
    }
  });
</script>