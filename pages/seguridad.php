<!-- Hero Section -->
<header class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Seguridad en Aplicaciones PHP</h1>
        <p class="lead mb-5">Protege tus aplicaciones web contra las vulnerabilidades más comunes con buenas prácticas
            de seguridad</p>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <!-- Formularios Section -->
    <section id="formularios" class="mb-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-file-alt me-2"></i>Formularios en PHP</h2>

                    <p>Los formularios son elementos esenciales en las aplicaciones web que permiten a los usuarios
                        enviar datos al servidor. En PHP, los formularios son la principal forma de interactuar con los
                        usuarios y recopilar información.</p>

                    <div class="info-box">
                        <i class="fas fa-info-circle me-2"></i>
                        Un formulario HTML se define con la etiqueta <code>&lt;form&gt;</code> y contiene campos de
                        entrada como <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> y
                        <code>&lt;textarea&gt;</code>.
                    </div>

                    <h3 class="mt-5">Partes de un formulario</h3>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <h5>Método de Envío</h5>
                                <p>GET (datos visibles en URL) o POST (datos en cuerpo de petición)</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h5>Destino</h5>
                                <p>Archivo PHP que procesará los datos enviados</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h5>Validación</h5>
                                <p>Comprobación de datos en cliente y servidor</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h5>Protección</h5>
                                <p>Medidas contra ataques (XSS, CSRF, SQLi)</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Flujo de un formulario</h3>
                    <div class="svg-container">
                        <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
                            <!-- Cliente -->
                            <rect x="50" y="100" width="150" height="80" rx="10" fill="#3498db" stroke="#2c3e50"
                                stroke-width="2" />
                            <text x="125" y="140" text-anchor="middle" fill="white" font-weight="bold">Cliente</text>
                            <text x="125" y="165" text-anchor="middle" fill="white">(Navegador)</text>

                            <!-- Servidor -->
                            <rect x="350" y="100" width="150" height="80" rx="10" fill="#e74c3c" stroke="#2c3e50"
                                stroke-width="2" />
                            <text x="425" y="140" text-anchor="middle" fill="white" font-weight="bold">Servidor</text>
                            <text x="425" y="165" text-anchor="middle" fill="white">(PHP)</text>

                            <!-- Base de datos -->
                            <rect x="600" y="100" width="150" height="80" rx="10" fill="#2ecc71" stroke="#2c3e50"
                                stroke-width="2" />
                            <text x="675" y="140" text-anchor="middle" fill="white" font-weight="bold">Base de</text>
                            <text x="675" y="165" text-anchor="middle" fill="white">Datos</text>

                            <!-- Flechas -->
                            <path d="M200 140 L340 140" stroke="#2c3e50" stroke-width="2"
                                marker-end="url(#arrowhead)" />
                            <path d="M500 140 L600 140" stroke="#2c3e50" stroke-width="2"
                                marker-end="url(#arrowhead)" />
                            <path d="M600 180 L500 180 L500 220 L340 220 L340 180 L200 180" stroke="#2c3e50"
                                stroke-width="2" marker-end="url(#arrowhead)" />

                            <!-- Labels -->
                            <text x="270" y="135" text-anchor="middle" fill="#2c3e50">1. Envío de datos</text>
                            <text x="550" y="135" text-anchor="middle" fill="#2c3e50">2. Procesamiento</text>
                            <text x="420" y="240" text-anchor="middle" fill="#2c3e50">3. Respuesta</text>

                            <defs>
                                <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5"
                                    orient="auto">
                                    <polygon points="0 0, 10 3.5, 0 7" fill="#2c3e50" />
                                </marker>
                            </defs>
                        </svg>
                    </div>

                    <h4 class="mt-4">Ejemplo de formulario básico</h4>
                    <div class="code-block">
                        <span class="code-comment">&lt;!-- Formulario HTML --&gt;</span><br>
                        &lt;form <span class="code-keyword">method</span>=<span class="code-string">"POST"</span> <span
                            class="code-keyword">action</span>=<span class="code-string">"procesar.php"</span>&gt;<br>
                        &nbsp;&nbsp;&lt;label <span class="code-keyword">for</span>=<span
                            class="code-string">"nombre"</span>&gt;Nombre:&lt;/label&gt;<br>
                        &nbsp;&nbsp;&lt;input <span class="code-keyword">type</span>=<span
                            class="code-string">"text"</span> <span class="code-keyword">id</span>=<span
                            class="code-string">"nombre"</span> <span class="code-keyword">name</span>=<span
                            class="code-string">"nombre"</span> required&gt;<br>
                        <br>
                        &nbsp;&nbsp;&lt;label <span class="code-keyword">for</span>=<span
                            class="code-string">"email"</span>&gt;Email:&lt;/label&gt;<br>
                        &nbsp;&nbsp;&lt;input <span class="code-keyword">type</span>=<span
                            class="code-string">"email"</span> <span class="code-keyword">id</span>=<span
                            class="code-string">"email"</span> <span class="code-keyword">name</span>=<span
                            class="code-string">"email"</span> required&gt;<br>
                        <br>
                        &nbsp;&nbsp;&lt;button <span class="code-keyword">type</span>=<span
                            class="code-string">"submit"</span>&gt;Enviar&lt;/button&gt;<br>
                        &lt;/form&gt;
                    </div>

                    <div class="warning-box mt-4">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Importante:</strong> Nunca confíes en los datos enviados por el usuario. Siempre valida
                        y sanitiza la entrada en el servidor.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CSRF Section -->
    <section id="csrf" class="mb-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-user-shield me-2"></i>Tokens CSRF</h2>

                    <p>Los ataques CSRF (Cross-Site Request Forgery) obligan a un usuario autenticado a ejecutar
                        acciones no deseadas en una aplicación web. Un token CSRF es una medida de seguridad que protege
                        contra este tipo de ataques.</p>

                    <h3 class="mt-5">¿Cómo funciona un ataque CSRF?</h3>
                    <div class="svg-container">
                        <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
                            <!-- Usuario -->
                            <circle cx="150" cy="150" r="40" fill="#3498db" stroke="#2c3e50" stroke-width="2" />
                            <text x="150" y="150" text-anchor="middle" fill="white" font-weight="bold">Usuario</text>

                            <!-- Sitio legítimo -->
                            <rect x="300" y="100" width="150" height="100" rx="10" fill="#2ecc71" stroke="#2c3e50"
                                stroke-width="2" />
                            <text x="375" y="150" text-anchor="middle" fill="white" font-weight="bold">Sitio A</text>

                            <!-- Sitio malicioso -->
                            <rect x="550" y="100" width="150" height="100" rx="10" fill="#e74c3c" stroke="#2c3e50"
                                stroke-width="2" />
                            <text x="625" y="150" text-anchor="middle" fill="white" font-weight="bold">Sitio B</text>

                            <!-- Flechas -->
                            <path d="M190 150 L300 150" stroke="#2c3e50" stroke-width="2"
                                marker-end="url(#arrowhead)" />
                            <path d="M450 150 L550 150" stroke="#2c3e50" stroke-width="2"
                                marker-end="url(#arrowhead)" />
                            <path d="M625 100 L625 50 L150 50 L150 110" stroke="#2c3e50" stroke-width="2"
                                stroke-dasharray="5,5" marker-end="url(#arrowhead)" />

                            <!-- Labels -->
                            <text x="245" y="140" text-anchor="middle" fill="#2c3e50">1. Autenticación</text>
                            <text x="500" y="140" text-anchor="middle" fill="#2c3e50">2. Visita sitio malicioso</text>
                            <text x="400" y="40" text-anchor="middle" fill="#2c3e50">3. Solicitud no autorizada</text>

                            <defs>
                                <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5"
                                    orient="auto">
                                    <polygon points="0 0, 10 3.5, 0 7" fill="#2c3e50" />
                                </marker>
                            </defs>
                        </svg>
                    </div>

                    <h3 class="mt-5">Implementación de tokens CSRF en PHP</h3>
                    <div class="code-block">
                        <span class="code-comment">// Generar token CSRF (al cargar el formulario)</span><br>
                        <span class="code-keyword">session_start</span>();<br>
                        <span class="code-keyword">if</span> (empty(<span class="code-keyword">$_SESSION</span>[<span
                            class="code-string">'csrf_token'</span>])) {<br>
                        &nbsp;&nbsp;<span class="code-keyword">$_SESSION</span>[<span
                            class="code-string">'csrf_token'</span>] = <span class="code-function">bin2hex</span>(<span
                            class="code-function">random_bytes</span>(32));<br>
                        }<br>
                        <br>
                        <span class="code-comment">// En el formulario HTML</span><br>
                        &lt;input <span class="code-keyword">type</span>=<span class="code-string">"hidden"</span> <span
                            class="code-keyword">name</span>=<span class="code-string">"csrf_token"</span> <span
                            class="code-keyword">value</span>=<span class="code-string">"&lt;?php echo
                            $_SESSION['csrf_token']; ?&gt;"</span>&gt;<br>
                        <br>
                        <span class="code-comment">// Validación al procesar el formulario</span><br>
                        <span class="code-keyword">if</span> (<span class="code-keyword">$_SERVER</span>[<span
                            class="code-string">'REQUEST_METHOD'</span>] === <span class="code-string">'POST'</span>)
                        {<br>
                        &nbsp;&nbsp;<span class="code-keyword">if</span> (!<span
                            class="code-function">hash_equals</span>(<span class="code-keyword">$_SESSION</span>[<span
                            class="code-string">'csrf_token'</span>], <span class="code-keyword">$_POST</span>[<span
                            class="code-string">'csrf_token'</span>])) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment">// Token inválido, abortar</span><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-function">die</span>(<span class="code-string">'Token
                            CSRF inválido'</span>);<br>
                        &nbsp;&nbsp;}<br>
                        &nbsp;&nbsp;<span class="code-comment">// Procesar formulario...</span><br>
                        }
                    </div>

                    <div class="accordion mt-4" id="csrfAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#csrfBestPractices">
                                    <i class="fas fa-lightbulb me-2"></i>Mejores prácticas para tokens CSRF
                                </button>
                            </h2>
                            <div id="csrfBestPractices" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Genera un token único por sesión de usuario</li>
                                        <li>Almacena el token en la sesión del servidor</li>
                                        <li>Incluye el token en todos los formularios y solicitudes AJAX</li>
                                        <li>Verifica el token en cada solicitud POST, PUT, DELETE</li>
                                        <li>Regenera el token después de su uso o después de un tiempo</li>
                                        <li>Usa la función <code>hash_equals()</code> para comparación segura</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SQL Injection Section -->
    <section id="sql" class="mb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-database me-2"></i>Prevención de SQL Injection</h2>

                    <p>SQL Injection es una vulnerabilidad que permite a un atacante interferir con las consultas que
                        una aplicación realiza a su base de datos, pudiendo acceder, modificar o eliminar datos
                        sensibles.</p>

                    <h3 class="mt-5">Ejemplo de vulnerabilidad</h3>
                    <div class="code-block">
                        <span class="code-comment">// Código vulnerable a SQL Injection</span><br>
                        <span class="code-keyword">$username</span> = <span class="code-keyword">$_POST</span>[<span
                            class="code-string">'username'</span>];<br>
                        <span class="code-keyword">$password</span> = <span class="code-keyword">$_POST</span>[<span
                            class="code-string">'password'</span>];<br>
                        <br>
                        <span class="code-keyword">$query</span> = <span class="code-string">"SELECT * FROM users WHERE
                            username = '</span> . <span class="code-keyword">$username</span> . <span
                            class="code-string">' AND password = '</span> . <span class="code-keyword">$password</span>
                        . <span class="code-string">"'"</span>;<br>
                        <span class="code-comment">// Si username = ' OR '1'='1' --</span><br>
                        <span class="code-comment">// La consulta se convierte en:</span><br>
                        <span class="code-comment">// SELECT * FROM users WHERE username = '' OR '1'='1' --' AND
                            password = ''</span>
                    </div>

                    <h3 class="mt-5">Prevención con consultas preparadas</h3>
                    <ul class="nav nav-tabs mt-4" id="sqlTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pdo-tab" data-bs-toggle="tab" data-bs-target="#pdo"
                                type="button">PDO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mysqli-tab" data-bs-toggle="tab" data-bs-target="#mysqli"
                                type="button">MySQLi</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="sqlTabContent">
                        <div class="tab-pane fade show active" id="pdo">
                            <div class="code-block">
                                <span class="code-comment">// Conexión con PDO</span><br>
                                <span class="code-keyword">$pdo</span> = new <span
                                    class="code-function">PDO</span>(<span
                                    class="code-string">'mysql:host=localhost;dbname=test;charset=utf8'</span>, <span
                                    class="code-string">'user'</span>, <span class="code-string">'pass'</span>);<br>
                                <br>
                                <span class="code-comment">// Consulta preparada</span><br>
                                <span class="code-keyword">$stmt</span> = <span
                                    class="code-keyword">$pdo</span>-&gt;<span
                                    class="code-function">prepare</span>(<span class="code-string">'SELECT * FROM users
                                    WHERE username = :username AND password = :password'</span>);<br>
                                <br>
                                <span class="code-comment">// Vincular parámetros</span><br>
                                <span class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">bindParam</span>(<span class="code-string">':username'</span>,
                                <span class="code-keyword">$_POST</span>[<span
                                    class="code-string">'username'</span>]);<br>
                                <span class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">bindParam</span>(<span class="code-string">':password'</span>,
                                <span class="code-keyword">$_POST</span>[<span
                                    class="code-string">'password'</span>]);<br>
                                <br>
                                <span class="code-comment">// Ejecutar consulta</span><br>
                                <span class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">execute</span>();<br>
                                <br>
                                <span class="code-comment">// Obtener resultados</span><br>
                                <span class="code-keyword">$user</span> = <span
                                    class="code-keyword">$stmt</span>-&gt;<span class="code-function">fetch</span>();
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mysqli">
                            <div class="code-block">
                                <span class="code-comment">// Conexión con MySQLi</span><br>
                                <span class="code-keyword">$mysqli</span> = new <span
                                    class="code-function">mysqli</span>(<span class="code-string">'localhost'</span>,
                                <span class="code-string">'user'</span>, <span class="code-string">'pass'</span>, <span
                                    class="code-string">'test'</span>);<br>
                                <br>
                                <span class="code-comment">// Consulta preparada</span><br>
                                <span class="code-keyword">$stmt</span> = <span
                                    class="code-keyword">$mysqli</span>-&gt;<span
                                    class="code-function">prepare</span>(<span class="code-string">'SELECT * FROM users
                                    WHERE username = ? AND password = ?'</span>);<br>
                                <br>
                                <span class="code-comment">// Vincular parámetros</span><br>
                                <span class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">bind_param</span>(<span class="code-string">'ss'</span>, <span
                                    class="code-keyword">$_POST</span>[<span class="code-string">'username'</span>],
                                <span class="code-keyword">$_POST</span>[<span
                                    class="code-string">'password'</span>]);<br>
                                <br>
                                <span class="code-comment">// Ejecutar consulta</span><br>
                                <span class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">execute</span>();<br>
                                <br>
                                <span class="code-comment">// Obtener resultados</span><br>
                                <span class="code-keyword">$result</span> = <span
                                    class="code-keyword">$stmt</span>-&gt;<span
                                    class="code-function">get_result</span>();<br>
                                <span class="code-keyword">$user</span> = <span
                                    class="code-keyword">$result</span>-&gt;<span
                                    class="code-function">fetch_assoc</span>();
                            </div>
                        </div>
                    </div>

                    <div class="info-box mt-4">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Recomendación:</strong> Siempre utiliza consultas preparadas con parámetros en lugar de
                        concatenar variables directamente en tus consultas SQL.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- XSS Section -->
    <section id="xss" class="mb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-code me-2"></i>Prevención de XSS (Cross-Site Scripting)
                    </h2>

                    <p>XSS permite a los atacantes inyectar scripts maliciosos en páginas web vistas por otros usuarios.
                        Esto puede robar cookies, secuestrar sesiones o redirigir a sitios maliciosos.</p>

                    <h3 class="mt-5">Tipos de XSS</h3>
                    <div class="row mt-4">
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3 border rounded h-100">
                                <div class="feature-icon" style="background: #e74c3c;">
                                    <i class="fas fa-arrow-right-to-bracket"></i>
                                </div>
                                <h5>Reflejado</h5>
                                <p>El script malicioso se refleja en la respuesta inmediata del servidor</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3 border rounded h-100">
                                <div class="feature-icon" style="background: #f39c12;">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h5>Almacenado</h5>
                                <p>El script se almacena en la base de datos y se sirve a múltiples usuarios</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3 border rounded h-100">
                                <div class="feature-icon" style="background: #9b59b6;">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h5>Basado en DOM</h5>
                                <p>La vulnerabilidad está en el cliente, sin enviar datos al servidor</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Prevención de XSS en PHP</h3>
                    <div class="code-block">
                        <span class="code-comment">// Sanitizar salida con htmlspecialchars()</span><br>
                        <span class="code-keyword">$user_input</span> = <span class="code-keyword">$_POST</span>[<span
                            class="code-string">'comment'</span>];<br>
                        <span class="code-keyword">$safe_output</span> = <span
                            class="code-function">htmlspecialchars</span>(<span class="code-keyword">$user_input</span>,
                        ENT_QUOTES | ENT_HTML5, <span class="code-string">'UTF-8'</span>);<br>
                        <br>
                        <span class="code-comment">// Usar en HTML</span><br>
                        echo <span class="code-string">"&lt;div class='comment'&gt;"</span> . <span
                            class="code-keyword">$safe_output</span> . <span
                            class="code-string">"&lt;/div&gt;"</span>;<br>
                        <br>
                        <span class="code-comment">// Para atributos HTML</span><br>
                        <span class="code-keyword">$safe_attribute</span> = <span
                            class="code-function">htmlspecialchars</span>(<span class="code-keyword">$user_input</span>,
                        ENT_QUOTES, <span class="code-string">'UTF-8'</span>);<br>
                        echo <span class="code-string">'&lt;input type="text" value="'</span> . <span
                            class="code-keyword">$safe_attribute</span> . <span class="code-string">'"&gt;'</span>;<br>
                        <br>
                        <span class="code-comment">// Para contextos JavaScript (usar json_encode)</span><br>
                        <span class="code-keyword">$js_variable</span> = <span
                            class="code-function">json_encode</span>(<span class="code-keyword">$user_input</span>);<br>
                        echo <span class="code-string">'&lt;script&gt;var userInput = '</span> . <span
                            class="code-keyword">$js_variable</span> . <span
                            class="code-string">';&lt;/script&gt;'</span>;
                    </div>

                    <div class="info-box mt-4">
                        <i class="fas fa-shield-alt me-2"></i>
                        <strong>Protección adicional:</strong> Usa Content Security Policy (CSP) para restringir los
                        orígenes desde los que se pueden cargar scripts.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exposición de Datos Section -->
    <section id="exposicion" class="mb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-lock me-2"></i>Prevención de Exposición de Datos</h2>

                    <p>La exposición de datos sensibles ocurre cuando información confidencial como contraseñas, datos
                        personales o información financiera es accesible a usuarios no autorizados.</p>

                    <h3 class="mt-5">Protección de datos sensibles</h3>
                    <div class="row mt-4">
                        <div class="col-md-12 mb-4">
                            <div class="p-4 border rounded h-100">
                                <h5><i class="fas fa-key me-2"></i>Almacenamiento seguro de contraseñas</h5>
                                <p>Nunca almacenes contraseñas en texto plano. Utiliza funciones de hash seguras como
                                    password_hash() y password_verify().</p>
                                <div class="code-block mt-3">
                                    <span class="code-comment">// Crear hash de contraseña</span><br>
                                    <span class="code-keyword">$hash</span> = <span
                                        class="code-function">password_hash</span>(<span
                                        class="code-keyword">$password</span>, PASSWORD_DEFAULT);<br>
                                    <br>
                                    <span class="code-comment">// Verificar contraseña</span><br>
                                    <span class="code-keyword">if</span> (<span
                                        class="code-function">password_verify</span>(<span
                                        class="code-keyword">$password</span>, <span class="code-keyword">$hash</span>))
                                    {<br>
                                    &nbsp;&nbsp;<span class="code-comment">// Contraseña válida</span><br>
                                    }
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="p-4 border rounded h-100">
                                <h5><i class="fas fa-user-secret me-2"></i>Protección de datos personales</h5>
                                <p>Cifra datos sensibles como números de identificación, tarjetas de crédito o
                                    información médica antes de almacenarlos.</p>
                                <div class="code-block mt-3">
                                    <span class="code-comment">// Cifrar datos</span><br>
                                    <span class="code-keyword">$cipher</span> = <span
                                        class="code-string">"aes-256-gcm"</span>;<br>
                                    <span class="code-keyword">$key</span> = <span
                                        class="code-function">openssl_random_pseudo_bytes</span>(32);<br>
                                    <span class="code-keyword">$iv</span> = <span
                                        class="code-function">openssl_random_pseudo_bytes</span>(<span
                                        class="code-function">openssl_cipher_iv_length</span>(<span
                                        class="code-keyword">$cipher</span>));<br>
                                    <span class="code-keyword">$encrypted</span> = <span
                                        class="code-function">openssl_encrypt</span>(<span
                                        class="code-keyword">$data</span>, <span class="code-keyword">$cipher</span>,
                                    <span class="code-keyword">$key</span>, 0, <span class="code-keyword">$iv</span>,
                                    <span class="code-keyword">$tag</span>);
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Buenas prácticas generales</h3>
                    <ul class="list-group mt-4">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                            <div>
                                <strong>Principio de mínimo privilegio:</strong> Otorga solo los permisos necesarios a
                                usuarios y procesos
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                            <div>
                                <strong>Actualizaciones:</strong> Mantén PHP y todas las dependencias actualizadas
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                            <div>
                                <strong>Configuración segura:</strong> Desactiva display_errors en producción y usa
                                error_log
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                            <div>
                                <strong>Validación de entrada:</strong> Valida todos los datos de entrada en el servidor
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                            <div>
                                <strong>Sanitización de salida:</strong> Escapa todo el output según el contexto (HTML,
                                JS, SQL)
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Scroll to Top Button -->
<div class="scroll-top" id="scrollTop">
    <i class="fas fa-arrow-up"></i>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Scroll to top button
    const scrollTopButton = document.getElementById('scrollTop');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollTopButton.classList.add('show');
        } else {
            scrollTopButton.classList.remove('show');
        }
    });

    scrollTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Activate Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>