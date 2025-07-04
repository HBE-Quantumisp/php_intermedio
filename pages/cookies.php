<div class="container">
  <!-- Header -->
  <div class="header text-center">
    <div class="icon-container mx-auto mb-3">
      <i class="fas fa-cookie-bite"></i>
    </div>
    <h1>Cookies en PHP</h1>
    <p class="lead">Entender y utilizar cookies en PHP</p>
  </div>

  <!-- Introducción -->
  <div class="section-card">
    <div class="card-header">
      <i class="fas fa-info-circle me-2"></i>¿Qué son las Cookies?
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <p>
            Las cookies son pequeños fragmentos de datos que un servidor web
            envía al navegador del usuario y que se almacenan localmente en
            el dispositivo. Estas cookies son reenviadas automáticamente al
            servidor con cada solicitud posterior, permitiendo mantener
            información entre diferentes peticiones HTTP.
          </p>

          <div class="best-practice">
            <h5>
              <i class="fas fa-lightbulb me-2"></i>Características clave:
            </h5>
            <ul>
              <li>Almacenamiento limitado (generalmente 4KB por cookie)</li>
              <li>Almacenadas en el lado del cliente</li>
              <li>
                Enviadas automáticamente con cada solicitud al dominio
              </li>
              <li>Pueden tener fecha de expiración</li>
              <li>
                Pueden ser restringidas a rutas o dominios específicos
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="interactive-demo">
            <h5><i class="fas fa-flask me-2"></i>Ejemplo de uso común:</h5>
            <div class="d-flex justify-content-around text-center my-4">
              <div>
                <div class="icon-container mx-auto mb-2">
                  <i class="fas fa-user"></i>
                </div>
                <div>Autenticación</div>
              </div>
              <div>
                <div class="icon-container mx-auto mb-2">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div>Carritos de compra</div>
              </div>
              <div>
                <div class="icon-container mx-auto mb-2">
                  <i class="fas fa-cog"></i>
                </div>
                <div>Preferencias</div>
              </div>
            </div>
            <p class="text-center">
              Las cookies permiten recordar información entre visitas para
              personalizar la experiencia del usuario.
            </p>
          </div>
        </div>
      </div>

      <!-- Diagrama de flujo de cookies -->
      <h4 class="mt-5 mb-3">Flujo de comunicación con cookies:</h4>
      <div class="cookie-diagram">
        <div class="diagram-row">
          <div class="diagram-box">
            <i class="fas fa-user"></i>
            <h5>Cliente</h5>
            <p>Solicita página web</p>
          </div>
          <div class="diagram-arrow">
            <i class="fas fa-arrow-right"></i>
          </div>
          <div class="diagram-box">
            <i class="fas fa-server"></i>
            <h5>Servidor</h5>
            <p>Responde con página + cookie</p>
          </div>
        </div>

        <div class="diagram-row">
          <div class="diagram-box">
            <i class="fas fa-user"></i>
            <h5>Cliente</h5>
            <p>Almacena cookie localmente</p>
          </div>
        </div>

        <div class="diagram-row">
          <div class="diagram-box">
            <i class="fas fa-user"></i>
            <h5>Cliente</h5>
            <p>Envía nueva solicitud con cookie</p>
          </div>
          <div class="diagram-arrow">
            <i class="fas fa-arrow-right"></i>
          </div>
          <div class="diagram-box">
            <i class="fas fa-server"></i>
            <h5>Servidor</h5>
            <p>Lee cookie y personaliza respuesta</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Creación de Cookies -->
  <div class="section-card">
    <div class="card-header">
      <i class="fas fa-plus-circle me-2"></i>Creación de Cookies
    </div>
    <div class="card-body">
      <p>
        En PHP, las cookies se crean usando la función
        <code>setcookie()</code>. Es importante llamar a esta función antes
        de enviar cualquier salida al navegador (antes de cualquier HTML o
        espacios en blanco).
      </p>

      <div class="code-block">
        <span class="code-comment">// Crear una cookie básica</span><br />
        <span class="code-function">setcookie</span>(<span class="code-string">"nombre_usuario"</span>, <span
          class="code-string">"JuanPerez"</span>);<br /><br />

        <span class="code-comment">// Crear una cookie con expiración (1 hora)</span><br />
        <span class="code-function">setcookie</span>(<span class="code-string">"preferencia_idioma"</span>, <span
          class="code-string">"es"</span>,
        <span class="code-function">time</span>() +
        <span class="code-variable">3600</span>);<br /><br />

        <span class="code-comment">// Crear una cookie con más parámetros</span><br />
        <span class="code-function">setcookie</span>(<br />
        &nbsp;&nbsp;<span class="code-string">"ultima_visita"</span>, <br />
        &nbsp;&nbsp;<span class="code-function">date</span>(<span class="code-string">"Y-m-d H:i:s"</span>), <br />
        &nbsp;&nbsp;<span class="code-function">time</span>() + (<span class="code-variable">86400</span>
        * <span class="code-variable">30</span>),
        <span class="code-comment">// 30 días</span><br />
        &nbsp;&nbsp;<span class="code-string">"/"</span>,
        <span class="code-comment">// Disponible en todo el sitio</span><br />
        &nbsp;&nbsp;<span class="code-string">"midominio.com"</span>,
        <span class="code-comment">// Dominio</span><br />
        &nbsp;&nbsp;<span class="code-variable">true</span>,
        <span class="code-comment">// Solo HTTPS</span><br />
        &nbsp;&nbsp;<span class="code-variable">true</span>
        <span class="code-comment">// Accesible solo por HTTP (no por JavaScript)</span><br />
        );
      </div>

      <div class="row mt-4">
        <div class="col-md-6">
          <div class="best-practice">
            <h5>
              <i class="fas fa-check-circle me-2"></i>Parámetros de
              setcookie()
            </h5>
            <ol>
              <li><strong>Nombre</strong>: Identificador de la cookie</li>
              <li><strong>Valor</strong>: Datos a almacenar (string)</li>
              <li>
                <strong>Expiración</strong>: Timestamp UNIX (time() +
                segundos)
              </li>
              <li>
                <strong>Ruta</strong>: Ámbito de la cookie ('/' para todo el
                sitio)
              </li>
              <li><strong>Dominio</strong>: Dominio donde es válida</li>
              <li><strong>Secure</strong>: Solo enviar sobre HTTPS</li>
              <li>
                <strong>HttpOnly</strong>: Inaccesible desde JavaScript
              </li>
            </ol>
          </div>
        </div>
        <div class="col-md-6">
          <div class="best-practice">
            <h5>
              <i class="fas fa-exclamation-triangle me-2"></i>Consideraciones importantes
            </h5>
            <ul>
              <li>
                Las cookies deben establecerse antes de cualquier salida
                HTML
              </li>
              <li>Los valores se almacenan como strings</li>
              <li>El límite de tamaño es aproximadamente 4KB</li>
              <li>
                Los navegadores pueden rechazar cookies o los usuarios
                pueden deshabilitarlas
              </li>
              <li>Usar HttpOnly aumenta la seguridad contra XSS</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lectura de Cookies -->
  <div class="section-card">
    <div class="card-header">
      <i class="fas fa-book-open me-2"></i>Lectura de Cookies
    </div>
    <div class="card-body">
      <p>
        Las cookies establecidas están disponibles en el array superglobal
        <code>$_COOKIE</code>. Siempre debes verificar si una cookie existe
        antes de intentar acceder a su valor.
      </p>

      <div class="code-block">
        <span class="code-comment">// Verificar si existe una cookie</span><br />
        <span class="code-keyword">if</span>(<span class="code-function">isset</span>(<span
          class="code-variable">$_COOKIE</span>[<span class="code-string">'nombre_usuario'</span>])) {<br />
        &nbsp;&nbsp;<span class="code-variable">$usuario</span> =
        <span class="code-variable">$_COOKIE</span>[<span class="code-string">'nombre_usuario'</span>];<br />
        &nbsp;&nbsp;<span class="code-function">echo</span>
        <span class="code-string">"Bienvenido de nuevo, "</span> .
        <span class="code-function">htmlspecialchars</span>(<span class="code-variable">$usuario</span>);<br />
        } <span class="code-keyword">else</span> {<br />
        &nbsp;&nbsp;<span class="code-function">echo</span>
        <span class="code-string">"Bienvenido, invitado!"</span>;<br />
        }<br /><br />

        <span class="code-comment">// Iterar sobre todas las cookies</span><br />
        <span class="code-keyword">foreach</span>(<span class="code-variable">$_COOKIE</span>
        <span class="code-keyword">as</span>
        <span class="code-variable">$nombre</span> =>
        <span class="code-variable">$valor</span>) {<br />
        &nbsp;&nbsp;<span class="code-function">echo</span>
        <span class="code-string">"Cookie: "</span> .
        <span class="code-function">htmlspecialchars</span>(<span class="code-variable">$nombre</span>) . <span
          class="code-string">" = "</span> .
        <span class="code-function">htmlspecialchars</span>(<span class="code-variable">$valor</span>) . <span
          class="code-string">"&lt;br&gt;"</span>;<br />
        }
      </div>

      <div class="best-practice mt-4">
        <h5>
          <i class="fas fa-shield-alt me-2"></i>Seguridad en la lectura de
          cookies
        </h5>
        <ul>
          <li>
            Siempre usa <code>htmlspecialchars()</code> al mostrar valores
            de cookies para prevenir XSS
          </li>
          <li>
            Nunca confíes en los valores de las cookies para operaciones
            críticas
          </li>
          <li>Considera validar y filtrar los valores de las cookies</li>
          <li>
            Recuerda que los usuarios pueden modificar las cookies en su
            navegador
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modificación y Eliminación -->
  <div class="section-card">
    <div class="card-header">
      <i class="fas fa-edit me-2"></i>Modificación y Eliminación
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h4>Modificación de Cookies</h4>
          <p>
            Para modificar una cookie, simplemente establece una nueva
            cookie con el mismo nombre y diferentes parámetros o valores.
          </p>

          <div class="code-block">
            <span class="code-comment">// Modificar una cookie existente</span><br />
            <span class="code-keyword">if</span>(<span class="code-function">isset</span>(<span
              class="code-variable">$_COOKIE</span>[<span class="code-string">'contador_visitas'</span>])) {<br />
            &nbsp;&nbsp;<span class="code-variable">$contador</span> =
            <span class="code-variable">$_COOKIE</span>[<span class="code-string">'contador_visitas'</span>] + <span
              class="code-variable">1</span>;<br />
            } <span class="code-keyword">else</span> {<br />
            &nbsp;&nbsp;<span class="code-variable">$contador</span> =
            <span class="code-variable">1</span>;<br />
            }<br />
            <br />
            <span class="code-function">setcookie</span>(<span class="code-string">"contador_visitas"</span>, <span
              class="code-variable">$contador</span>,
            <span class="code-function">time</span>() +
            <span class="code-variable">86400</span>);<br />
            <span class="code-function">echo</span>
            <span class="code-string">"Visitas: "</span> .
            <span class="code-variable">$contador</span>;
          </div>
        </div>
        <div class="col-md-6">
          <h4>Eliminación de Cookies</h4>
          <p>
            Para eliminar una cookie, establece una fecha de expiración en
            el pasado. También debes pasar los mismos parámetros de ruta y
            dominio que usaste al crear la cookie.
          </p>

          <div class="code-block">
            <span class="code-comment">// Eliminar una cookie</span><br />
            <span class="code-keyword">if</span>(<span class="code-function">isset</span>(<span
              class="code-variable">$_COOKIE</span>[<span class="code-string">'preferencia_tema'</span>])) {<br />
            &nbsp;&nbsp;<span class="code-comment">// Establecer expiración en el pasado</span><br />
            &nbsp;&nbsp;<span class="code-function">setcookie</span>(<span
              class="code-string">"preferencia_tema"</span>, <span class="code-string">""</span>,
            <span class="code-function">time</span>() -
            <span class="code-variable">3600</span>,
            <span class="code-string">"/"</span>);<br />
            &nbsp;&nbsp;<span class="code-function">echo</span>
            <span class="code-string">"Cookie eliminada!"</span>;<br />
            } <span class="code-keyword">else</span> {<br />
            &nbsp;&nbsp;<span class="code-function">echo</span>
            <span class="code-string">"La cookie no existe"</span>;<br />
            }
          </div>
        </div>
      </div>

      <div class="best-practice mt-4">
        <h5><i class="fas fa-info-circle me-2"></i>Notas importantes</h5>
        <ul>
          <li>
            La eliminación de una cookie no surte efecto inmediato - el
            cambio se reflejará en la siguiente página
          </li>
          <li>
            Para asegurar la eliminación, establece el valor a una cadena
            vacía y la expiración en el pasado
          </li>
          <li>
            Si estableciste parámetros adicionales al crear la cookie, debes
            incluirlos también al eliminarla
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Buenas Prácticas -->
  <div class="section-card">
    <div class="card-header">
      <i class="fas fa-star me-2"></i>Buenas Prácticas y Seguridad
    </div>
    <div class="card-body">
      <div class="accordion" id="bestPracticesAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#practiceOne">
              <i class="fas fa-shield-alt me-2"></i>1. Uso de Cookies
              HttpOnly
            </button>
          </h2>
          <div id="practiceOne" class="accordion-collapse collapse show" data-bs-parent="#bestPracticesAccordion">
            <div class="accordion-body">
              <p>
                Establece el flag HttpOnly para prevenir que las cookies
                sean accedidas a través de JavaScript. Esto mitiga ataques
                XSS (Cross-Site Scripting).
              </p>
              <div class="code-block">
                <span class="code-function">setcookie</span>(<span class="code-string">"cookie_segura"</span>, <span
                  class="code-string">"valor"</span>,
                <span class="code-function">time</span>() +
                <span class="code-variable">3600</span>,
                <span class="code-string">"/"</span>,
                <span class="code-string">""</span>,
                <span class="code-variable">true</span>,
                <span class="code-variable">true</span>);
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#practiceTwo">
              <i class="fas fa-lock me-2"></i>2. Cookies solo para HTTPS
            </button>
          </h2>
          <div id="practiceTwo" class="accordion-collapse collapse" data-bs-parent="#bestPracticesAccordion">
            <div class="accordion-body">
              <p>
                Si tu sitio usa HTTPS, establece el flag Secure para
                asegurar que las cookies solo se envíen a través de
                conexiones encriptadas.
              </p>
              <div class="code-block">
                <span class="code-comment">// Último parámetro: secure = true</span><br />
                <span class="code-function">setcookie</span>(<span class="code-string">"cookie_https"</span>, <span
                  class="code-string">"valor"</span>,
                <span class="code-function">time</span>() +
                <span class="code-variable">3600</span>,
                <span class="code-string">"/"</span>,
                <span class="code-string">""</span>,
                <span class="code-variable">true</span>,
                <span class="code-variable">true</span>);
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#practiceThree">
              <i class="fas fa-user-secret me-2"></i>3. No almacenar
              información sensible
            </button>
          </h2>
          <div id="practiceThree" class="accordion-collapse collapse" data-bs-parent="#bestPracticesAccordion">
            <div class="accordion-body">
              <p>
                Nunca almacenes información sensible como contraseñas,
                números de tarjeta de crédito o datos personales en cookies.
                En su lugar, almacena un token de sesión y guarda los datos
                sensibles en el servidor.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#practiceFour">
              <i class="fas fa-code me-2"></i>4. Validación de valores de
              cookies
            </button>
          </h2>
          <div id="practiceFour" class="accordion-collapse collapse" data-bs-parent="#bestPracticesAccordion">
            <div class="accordion-body">
              <p>
                Siempre valida y sanitiza los valores de las cookies antes
                de usarlos, ya que pueden haber sido modificados por el
                usuario.
              </p>
              <div class="code-block">
                <span class="code-keyword">if</span>(<span class="code-function">isset</span>(<span
                  class="code-variable">$_COOKIE</span>[<span class="code-string">'user_id'</span>])) {<br />
                &nbsp;&nbsp;<span class="code-comment">// Validar que sea un número entero</span><br />
                &nbsp;&nbsp;<span class="code-variable">$user_id</span> =
                <span class="code-function">filter_var</span>(<span class="code-variable">$_COOKIE</span>[<span
                  class="code-string">'user_id'</span>],
                <span class="code-variable">FILTER_VALIDATE_INT</span>);<br />
                &nbsp;&nbsp;<span class="code-keyword">if</span>(<span class="code-variable">$user_id</span>
                === <span class="code-variable">false</span>) {<br />
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment">// Valor inválido - manejar el error</span><br />
                &nbsp;&nbsp;}<br />
                }
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6">
          <div class="best-practice">
            <h5>
              <i class="fas fa-check-circle me-2"></i>¿Cuándo usar cookies?
            </h5>
            <ul>
              <li>Preferencias de usuario (tema, idioma)</li>
              <li>Carritos de compra</li>
              <li>Seguimiento de sesiones (con tokens)</li>
              <li>Recordar información de inicio de sesión</li>
              <li>Personalización de contenido</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="best-practice">
            <h5><i class="fas fa-ban me-2"></i>¿Cuándo evitar cookies?</h5>
            <ul>
              <li>Almacenamiento de datos sensibles</li>
              <li>Información que requiere alta seguridad</li>
              <li>Grandes cantidades de datos</li>
              <li>Datos que no necesitan persistencia</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>