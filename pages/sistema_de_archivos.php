<!-- Sección Hero -->
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Sistema de Archivos</h1>
        <p class="lead mb-4">Aprende a manipular archivos, directorios y formularios con PHP de manera eficiente y
            segura</p>
    </div>
</section>

<!-- Contenido Principal -->
<div class="container">
    <!-- Sistema de Archivos -->
    <section id="filesystem" class="py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">Sistema de Archivos en PHP</h2>
                <p>PHP proporciona un conjunto completo de funciones para interactuar con el sistema de archivos del
                    servidor. Estas funciones permiten crear, leer, escribir y manipular archivos y directorios.</p>

                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-hdd me-2"></i> Conceptos Clave
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="feature-icon mx-auto">
                                        <i class="fas fa-file"></i>
                                    </div>
                                    <h5>Archivos</h5>
                                    <p>Unidades de almacenamiento que contienen datos e información</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="feature-icon mx-auto">
                                        <i class="fas fa-folder"></i>
                                    </div>
                                    <h5>Directorios</h5>
                                    <p>Contenedores que organizan archivos y otros directorios</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="feature-icon mx-auto">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h5>Jerarquía</h5>
                                    <p>Estructura en árbol con directorios padres e hijos</p>
                                </div>
                            </div>
                        </div>

                        <div class="file-explorer">
                            <div class="file-item">
                                <i class="fas fa-folder file-icon"></i>
                                <span>Documentos/</span>
                            </div>
                            <div class="file-item">
                                <i class="fas fa-folder file-icon"></i>
                                <span>Imágenes/</span>
                            </div>
                            <div class="file-item">
                                <i class="fas fa-file-pdf file-icon"></i>
                                <span>informe.pdf</span>
                            </div>
                            <div class="file-item">
                                <i class="fas fa-file-code file-icon"></i>
                                <span>script.php</span>
                            </div>
                            <div class="file-item">
                                <i class="fas fa-file-excel file-icon"></i>
                                <span>datos.xlsx</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manipulación de Archivos -->
    <section id="manipulation" class="py-5 bg-light">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">Manipulación de Archivos</h2>
                <p>PHP ofrece diversas funciones para trabajar con archivos. Las operaciones más comunes incluyen
                    lectura, escritura y modificación de archivos.</p>

                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-tasks me-2"></i> Operaciones Básicas
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-book-open text-primary me-2"></i>
                                <strong>Abrir archivo:</strong> <code>fopen()</code>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-book text-success me-2"></i>
                                <strong>Leer archivo:</strong> <code>fread()</code>, <code>file_get_contents()</code>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-edit text-warning me-2"></i>
                                <strong>Escribir archivo:</strong> <code>fwrite()</code>,
                                <code>file_put_contents()</code>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-times-circle text-danger me-2"></i>
                                <strong>Cerrar archivo:</strong> <code>fclose()</code>
                            </li>
                        </ul>

                        <div class="mt-4">
                            <h5>Ejemplo: Lectura de archivo</h5>
                            <div class="code-block">
                                <span class="text-info">// Abrir archivo para lectura</span><br>
                                <span class="text-warning">$archivo</span> = <span
                                    class="text-danger">fopen</span>(<span class="text-success">"datos.txt"</span>,
                                <span class="text-success">"r"</span>);<br><br>

                                <span class="text-info">// Leer contenido</span><br>
                                <span class="text-warning">$contenido</span> = <span
                                    class="text-danger">fread</span>(<span class="text-warning">$archivo</span>, <span
                                    class="text-danger">filesize</span>(<span
                                    class="text-success">"datos.txt"</span>));<br><br>

                                <span class="text-info">// Cerrar archivo</span><br>
                                <span class="text-danger">fclose</span>(<span
                                    class="text-warning">$archivo</span>);<br><br>

                                <span class="text-info">// Mostrar contenido</span><br>
                                <span class="text-danger">echo</span> <span class="text-warning">$contenido</span>;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprobación de existencia -->
    <section id="existence" class="py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">Comprobar Existencia de Archivos</h2>
                <p>Antes de realizar cualquier operación con un archivo, es importante verificar su existencia para
                    evitar errores.</p>

                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-check-circle me-2"></i> Funciones de Comprobación
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><code>file_exists()</code></h5>
                                        <p>Verifica si un archivo o directorio existe</p>
                                        <div class="code-block">
                                            <span class="text-warning">$existe</span> = <span
                                                class="text-danger">file_exists</span>(<span
                                                class="text-success">"archivo.txt"</span>);<br>
                                            <span class="text-danger">if</span> (<span
                                                class="text-warning">$existe</span>) {<br>
                                            &nbsp;&nbsp;<span class="text-danger">echo</span> <span
                                                class="text-success">"El archivo existe!"</span>;<br>
                                            }
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><code>is_file()</code> y <code>is_dir()</code></h5>
                                        <p>Verifica si la ruta es un archivo o directorio</p>
                                        <div class="code-block">
                                            <span class="text-danger">if</span> (<span
                                                class="text-danger">is_file</span>(<span
                                                class="text-success">"archivo.txt"</span>)) {<br>
                                            &nbsp;&nbsp;<span class="text-danger">echo</span> <span
                                                class="text-success">"Es un archivo"</span>;<br>
                                            }<br>
                                            <span class="text-danger">if</span> (<span
                                                class="text-danger">is_dir</span>(<span
                                                class="text-success">"carpeta"</span>)) {<br>
                                            &nbsp;&nbsp;<span class="text-danger">echo</span> <span
                                                class="text-success">"Es un directorio"</span>;<br>
                                            }
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="example-box mt-4">
                            <h5><i class="fas fa-lightbulb me-2"></i> Buena Práctica</h5>
                            <p>Siempre verifica la existencia de un archivo antes de intentar abrirlo para evitar
                                errores y advertencias en tu aplicación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Directorios -->
    <section id="directories" class="py-5 bg-light">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">Trabajo con Directorios</h2>
                <p>PHP ofrece funciones para crear, listar y eliminar directorios, así como para navegar por la
                    estructura de directorios.</p>

                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-folder-open me-2"></i> Operaciones con Directorios
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h5><i class="fas fa-plus-circle text-success me-2"></i> Crear</h5>
                                <p><code>mkdir("nuevo_directorio");</code></p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5><i class="fas fa-list text-primary me-2"></i> Listar</h5>
                                <p><code>scandir("directorio");</code></p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5><i class="fas fa-trash-alt text-danger me-2"></i> Eliminar</h5>
                                <p><code>rmdir("directorio");</code></p>
                            </div>
                        </div>

                        <h5 class="mt-4">Ejemplo: Listar contenido de un directorio</h5>
                        <div class="code-block">
                            <span class="text-info">// Obtener lista de archivos en directorio</span><br>
                            <span class="text-warning">$archivos</span> = <span class="text-danger">scandir</span>(<span
                                class="text-success">"."</span>);<br><br>

                            <span class="text-danger">echo</span> <span class="text-success">"Contenido del
                                directorio:&lt;ul&gt;"</span>;<br>
                            <span class="text-danger">foreach</span> (<span class="text-warning">$archivos</span> <span
                                class="text-danger">as</span> <span class="text-warning">$archivo</span>) {<br>
                            &nbsp;&nbsp;<span class="text-danger">if</span> (<span class="text-warning">$archivo</span>
                            != <span class="text-success">"."</span> &amp;&amp; <span
                                class="text-warning">$archivo</span> != <span class="text-success">".."</span>) {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">echo</span> <span
                                class="text-success">"&lt;li&gt;"</span> . <span class="text-warning">$archivo</span> .
                            <span class="text-success">"&lt;/li&gt;"</span>;<br>
                            &nbsp;&nbsp;}<br>
                            }<br>
                            <span class="text-danger">echo</span> <span class="text-success">"&lt;/ul&gt;"</span>;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formularios -->
    <section id="forms" class="py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title">Formularios en PHP</h2>
                <p class="lead">Los formularios son elementos fundamentales en el desarrollo web que permiten a los
                    usuarios interactuar con las aplicaciones enviando datos al servidor.</p>

                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-window-restore me-2"></i> ¿Qué son los Formularios?
                    </div>
                    <div class="card-body">
                        <p>Un formulario HTML es un conjunto de campos (como inputs, selects, textareas) que permite a
                            los usuarios introducir información que será enviada a un servidor para su procesamiento.
                        </p>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5>Elementos de un Formulario:</h5>
                                <ul>
                                    <li><strong>Método (GET/POST):</strong> Define cómo se envían los datos</li>
                                    <li><strong>Action:</strong> URL que procesa el formulario</li>
                                    <li><strong>Campos de entrada:</strong> Inputs, selects, textareas, etc.</li>
                                    <li><strong>Botón de envío:</strong> Para enviar el formulario</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Flujo de un Formulario:</h5>
                                <ol>
                                    <li>Usuario completa el formulario</li>
                                    <li>Datos se envían al servidor</li>
                                    <li>PHP procesa la información</li>
                                    <li>Servidor responde al usuario</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Diagrama vectorial de formularios -->
                        <div class="diagram-container mt-5">
                            <h5 class="text-center mb-4"><i class="fas fa-project-diagram me-2"></i> Diagrama de
                                Funcionamiento de Formularios</h5>
                            <svg viewBox="0 0 800 400" xmlns="http://www.w3.org/2000/svg" class="w-100">
                                <!-- Cliente -->
                                <rect x="50" y="150" width="150" height="100" rx="10" fill="#e0f2fe" stroke="#0ea5e9"
                                    stroke-width="2" />
                                <text x="125" y="200" text-anchor="middle" fill="#0c4a6e"
                                    font-weight="bold">Cliente</text>
                                <text x="125" y="230" text-anchor="middle" fill="#0c4a6e">(Navegador)</text>

                                <!-- Servidor -->
                                <rect x="600" y="150" width="150" height="100" rx="10" fill="#ede9fe" stroke="#8b5cf6"
                                    stroke-width="2" />
                                <text x="675" y="200" text-anchor="middle" fill="#4c1d95"
                                    font-weight="bold">Servidor</text>
                                <text x="675" y="230" text-anchor="middle" fill="#4c1d95">(PHP)</text>

                                <!-- Flecha GET/POST -->
                                <line x1="200" y1="200" x2="600" y2="200" stroke="#0ea5e9" stroke-width="3"
                                    stroke-dasharray="5,5" />
                                <polygon points="600,200 590,195 590,205" fill="#0ea5e9" />
                                <text x="400" y="190" text-anchor="middle" fill="#0c4a6e" font-weight="bold">Datos del
                                    formulario (GET/POST)</text>

                                <!-- Flecha Respuesta -->
                                <line x1="600" y1="250" x2="200" y2="250" stroke="#8b5cf6" stroke-width="3" />
                                <polygon points="200,250 210,245 210,255" fill="#8b5cf6" />
                                <text x="400" y="260" text-anchor="middle" fill="#4c1d95" font-weight="bold">Respuesta
                                    (HTML/JSON)</text>

                                <!-- Formulario -->
                                <rect x="100" y="50" width="250" height="70" rx="5" fill="#dbeafe" stroke="#3b82f6"
                                    stroke-width="2" />
                                <text x="225" y="80" text-anchor="middle" fill="#1e3a8a" font-weight="bold">Formulario
                                    HTML</text>
                                <line x1="225" y1="120" x2="225" y2="150" stroke="#3b82f6" stroke-width="2" />

                                <!-- Procesamiento PHP -->
                                <rect x="550" y="50" width="250" height="70" rx="5" fill="#ede9fe" stroke="#8b5cf6"
                                    stroke-width="2" />
                                <text x="675" y="80" text-anchor="middle" fill="#4c1d95"
                                    font-weight="bold">Procesamiento PHP</text>
                                <line x1="675" y1="120" x2="675" y2="150" stroke="#8b5cf6" stroke-width="2" />
                            </svg>
                        </div>

                        <div class="mt-5">
                            <h4>Métodos de Envío: GET vs POST</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Característica</th>
                                            <th>GET</th>
                                            <th>POST</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Visibilidad de datos</td>
                                            <td>Datos visibles en URL</td>
                                            <td>Datos ocultos en cuerpo de solicitud</td>
                                        </tr>
                                        <tr>
                                            <td>Seguridad</td>
                                            <td>Menos seguro</td>
                                            <td>Más seguro</td>
                                        </tr>
                                        <tr>
                                            <td>Tamaño máximo</td>
                                            <td>Limitado (2048 caracteres)</td>
                                            <td>Ilimitado (configurable)</td>
                                        </tr>
                                        <tr>
                                            <td>Uso recomendado</td>
                                            <td>Solicitudes sin efectos secundarios</td>
                                            <td>Enviar datos sensibles o grandes</td>
                                        </tr>
                                        <tr>
                                            <td>Acceso en PHP</td>
                                            <td><code>$_GET</code></td>
                                            <td><code>$_POST</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="interactive-example mt-5">
                            <h4 class="mb-4">Ejemplo Interactivo: Formulario de Contacto</h4>

                            <ul class="nav nav-tabs" id="formTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-tab" data-bs-toggle="tab"
                                        data-bs-target="#html" type="button">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="php-tab" data-bs-toggle="tab" data-bs-target="#php"
                                        type="button">PHP</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="result-tab" data-bs-toggle="tab"
                                        data-bs-target="#result" type="button">Resultado</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="formTabContent">
                                <div class="tab-pane fade show active" id="html">
                                    <div class="code-block">
                                        <span class="text-info">&lt;!-- Formulario HTML --&gt;</span><br>
                                        &lt;<span class="text-danger">form</span> <span
                                            class="text-warning">method</span>=<span class="text-success">"POST"</span>
                                        <span class="text-warning">action</span>=<span
                                            class="text-success">"procesar.php"</span>&gt;<br>
                                        &nbsp;&nbsp;&lt;<span class="text-danger">div</span> <span
                                            class="text-warning">class</span>=<span
                                            class="text-success">"mb-3"</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">label</span> <span
                                            class="text-warning">for</span>=<span class="text-success">"nombre"</span>
                                        <span class="text-warning">class</span>=<span
                                            class="text-success">"form-label"</span>&gt;Nombre&lt;/<span
                                            class="text-danger">label</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">input</span> <span
                                            class="text-warning">type</span>=<span class="text-success">"text"</span>
                                        <span class="text-warning">class</span>=<span
                                            class="text-success">"form-control"</span> <span
                                            class="text-warning">id</span>=<span class="text-success">"nombre"</span>
                                        <span class="text-warning">name</span>=<span
                                            class="text-success">"nombre"</span> <span
                                            class="text-warning">required</span>&gt;<br>
                                        &nbsp;&nbsp;&lt;/<span class="text-danger">div</span>&gt;<br>
                                        <br>
                                        &nbsp;&nbsp;&lt;<span class="text-danger">div</span> <span
                                            class="text-warning">class</span>=<span
                                            class="text-success">"mb-3"</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">label</span> <span
                                            class="text-warning">for</span>=<span class="text-success">"email"</span>
                                        <span class="text-warning">class</span>=<span
                                            class="text-success">"form-label"</span>&gt;Email&lt;/<span
                                            class="text-danger">label</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">input</span> <span
                                            class="text-warning">type</span>=<span class="text-success">"email"</span>
                                        <span class="text-warning">class</span>=<span
                                            class="text-success">"form-control"</span> <span
                                            class="text-warning">id</span>=<span class="text-success">"email"</span>
                                        <span class="text-warning">name</span>=<span class="text-success">"email"</span>
                                        <span class="text-warning">required</span>&gt;<br>
                                        &nbsp;&nbsp;&lt;/<span class="text-danger">div</span>&gt;<br>
                                        <br>
                                        &nbsp;&nbsp;&lt;<span class="text-danger">div</span> <span
                                            class="text-warning">class</span>=<span
                                            class="text-success">"mb-3"</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">label</span> <span
                                            class="text-warning">for</span>=<span class="text-success">"mensaje"</span>
                                        <span class="text-warning">class</span>=<span
                                            class="text-success">"form-label"</span>&gt;Mensaje&lt;/<span
                                            class="text-danger">label</span>&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">textarea</span> <span
                                            class="text-warning">class</span>=<span
                                            class="text-success">"form-control"</span> <span
                                            class="text-warning">id</span>=<span class="text-success">"mensaje"</span>
                                        <span class="text-warning">name</span>=<span
                                            class="text-success">"mensaje"</span> <span
                                            class="text-warning">rows</span>=<span class="text-success">"3"</span> <span
                                            class="text-warning">required</span>&gt;&lt;/<span
                                            class="text-danger">textarea</span>&gt;<br>
                                        &nbsp;&nbsp;&lt;/<span class="text-danger">div</span>&gt;<br>
                                        <br>
                                        &nbsp;&nbsp;&lt;<span class="text-danger">button</span> <span
                                            class="text-warning">type</span>=<span class="text-success">"submit"</span>
                                        <span class="text-warning">class</span>=<span class="text-success">"btn
                                            btn-primary"</span>&gt;Enviar&lt;/<span
                                            class="text-danger">button</span>&gt;<br>
                                        &lt;/<span class="text-danger">form</span>&gt;
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="php">
                                    <div class="code-block">
                                        <span class="text-info">// procesar.php</span><br>
                                        <span class="text-danger">&lt;?php</span><br>
                                        <span class="text-danger">if</span> (<span
                                            class="text-danger">$_SERVER</span>[<span
                                            class="text-success">'REQUEST_METHOD'</span>] == <span
                                            class="text-success">'POST'</span>) {<br>
                                        &nbsp;&nbsp;<span class="text-info">// Recuperar datos del formulario</span><br>
                                        &nbsp;&nbsp;<span class="text-warning">$nombre</span> = <span
                                            class="text-danger">htmlspecialchars</span>(<span
                                            class="text-danger">$_POST</span>[<span
                                            class="text-success">'nombre'</span>]);<br>
                                        &nbsp;&nbsp;<span class="text-warning">$email</span> = <span
                                            class="text-danger">htmlspecialchars</span>(<span
                                            class="text-danger">$_POST</span>[<span
                                            class="text-success">'email'</span>]);<br>
                                        &nbsp;&nbsp;<span class="text-warning">$mensaje</span> = <span
                                            class="text-danger">htmlspecialchars</span>(<span
                                            class="text-danger">$_POST</span>[<span
                                            class="text-success">'mensaje'</span>]);<br><br>

                                        &nbsp;&nbsp;<span class="text-info">// Validar datos (ejemplo
                                            simplificado)</span><br>
                                        &nbsp;&nbsp;<span class="text-warning">$errores</span> = [];<br>
                                        &nbsp;&nbsp;<span class="text-danger">if</span> (empty(<span
                                            class="text-warning">$nombre</span>)) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">$errores</span>[] = <span
                                            class="text-success">"El nombre es obligatorio"</span>;<br>
                                        &nbsp;&nbsp;}<br>
                                        &nbsp;&nbsp;<span class="text-danger">if</span> (!<span
                                            class="text-danger">filter_var</span>(<span
                                            class="text-warning">$email</span>, <span
                                            class="text-danger">FILTER_VALIDATE_EMAIL</span>)) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">$errores</span>[] = <span
                                            class="text-success">"Email inválido"</span>;<br>
                                        &nbsp;&nbsp;}<br><br>

                                        &nbsp;&nbsp;<span class="text-danger">if</span> (empty(<span
                                            class="text-warning">$errores</span>)) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">// Guardar en archivo o base de
                                            datos</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">$datos</span> = <span
                                            class="text-danger">date</span>(<span class="text-success">'Y-m-d
                                            H:i:s'</span>) . <span class="text-success">" | Nombre: $nombre | Email:
                                            $email | Mensaje: $mensaje"</span> . <span
                                            class="text-success">PHP_EOL</span>;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">file_put_contents</span>(<span
                                            class="text-success">'contactos.txt'</span>, <span
                                            class="text-warning">$datos</span>, <span
                                            class="text-danger">FILE_APPEND</span>);<br><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">// Redirigir a página de
                                            éxito</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">header</span>(<span
                                            class="text-success">'Location: gracias.html'</span>);<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">exit</span>;<br>
                                        &nbsp;&nbsp;}<br>
                                        }<br>
                                        <span class="text-danger">?&gt;</span>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="result">
                                    <h5 class="mb-3">Formulario de Contacto</h5>
                                    <form class="needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label for="nombreInput" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombreInput" required>
                                            <div class="invalid-feedback">
                                                Por favor ingresa tu nombre.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" required>
                                            <div class="invalid-feedback">
                                                Por favor ingresa un email válido.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mensajeInput" class="form-label">Mensaje</label>
                                            <textarea class="form-control" id="mensajeInput" rows="3"
                                                required></textarea>
                                            <div class="invalid-feedback">
                                                Por favor escribe tu mensaje.
                                            </div>
                                        </div>

                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="terminosCheck" required>
                                            <label class="form-check-label" for="terminosCheck">Acepto los términos y
                                                condiciones</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="example-box mt-5">
                            <h5><i class="fas fa-shield-alt me-2"></i> Seguridad en Formularios</h5>
                            <p>Es crucial validar y sanitizar todos los datos recibidos de formularios para prevenir
                                ataques como XSS (Cross-Site Scripting) e inyecciones SQL:</p>
                            <ul>
                                <li>Usa <code>htmlspecialchars()</code> para evitar ataques XSS</li>
                                <li>Para base de datos, utiliza consultas preparadas</li>
                                <li>Valida el tipo y formato de los datos</li>
                                <li>Implementa CSRF tokens para prevenir ataques CSRF</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Botón flotante -->
<a href="#" class="floating-btn">
    <i class="fas fa-arrow-up"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Validación de formulario interactivo
    (function () {
        'use strict'

        // Seleccionar todos los formularios con clase needs-validation
        var forms = document.querySelectorAll('.needs-validation')

        // Agregar validación a cada formulario
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    // Scroll suave para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Botón flotante - Scroll to top
    document.querySelector('.floating-btn').addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Mostrar botón flotante después de cierto scroll
    window.addEventListener('scroll', function () {
        const floatingBtn = document.querySelector('.floating-btn');
        if (window.scrollY > 300) {
            floatingBtn.style.display = 'flex';
        } else {
            floatingBtn.style.display = 'none';
        }
    });
</script>