<!-- Header -->
<header class="header text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3"><i class="fas fa-cloud-upload-alt me-3"></i>Subidas de Archivos en PHP</h1>
        <p class="lead mb-0">Aprende a subir archivos de forma segura</p>
    </div>
</header>

<div class="container">
    <!-- Introducción -->
    <section class="section-card">
        <h2 class="section-title">Introducción a las Subidas de Archivos</h2>
        <p class="lead">La capacidad de subir archivos es esencial en aplicaciones web modernas. PHP proporciona
            herramientas poderosas para manejar este proceso de forma segura y eficiente.</p>

        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="step-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-upload"></i>
                    </div>
                    <h4>Subida de Archivos</h4>
                    <p>Permite a los usuarios enviar imágenes, documentos y otros tipos de archivos al servidor.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="step-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Seguridad</h4>
                    <p>Implementa medidas para prevenir ataques y proteger tu servidor de archivos maliciosos.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="step-card">
                    <div class="feature-icon">
                        <i class="fas fa-image"></i>
                    </div>
                    <h4>Visualización</h4>
                    <p>Muestra los archivos subidos en tu aplicación web, especialmente útil para imágenes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formularios HTML -->
    <section class="section-card">
        <h2 class="section-title">Formularios HTML para Subida de Archivos</h2>
        <p>Los formularios HTML son la interfaz entre el usuario y el servidor. Para subir archivos, necesitas
            configurar correctamente el formulario:</p>

        <div class="diagram-container">
            <h4 class="text-center mb-4">Componentes de un formulario para subida de archivos</h4>
            <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg" class="w-100">
                <!-- Form Tag -->
                <rect x="50" y="50" width="200" height="60" rx="10" fill="#4361ee" opacity="0.8" />
                <text x="150" y="85" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">FORM</text>

                <!-- Attributes -->
                <text x="50" y="130" fill="var(--primary)" font-weight="bold">method="POST"</text>
                <text x="50" y="160" fill="var(--primary)" font-weight="bold">enctype="multipart/form-data"</text>

                <!-- Input File -->
                <rect x="300" y="50" width="200" height="60" rx="10" fill="#4895ef" opacity="0.8" />
                <text x="400" y="85" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">INPUT</text>
                <text x="400" y="120" text-anchor="middle" fill="var(--dark)" font-family="Arial">type="file"</text>

                <!-- Submit Button -->
                <rect x="550" y="50" width="200" height="60" rx="10" fill="#3f37c9" opacity="0.8" />
                <text x="650" y="85" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">BUTTON</text>
                <text x="650" y="120" text-anchor="middle" fill="var(--dark)" font-family="Arial">type="submit"</text>

                <!-- Arrows -->
                <line x1="250" y1="80" x2="300" y2="80" stroke="#333" stroke-width="2" />
                <line x1="500" y1="80" x2="550" y2="80" stroke="#333" stroke-width="2" />
            </svg>
        </div>

        <h4 class="mt-4">Atributos esenciales:</h4>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card mb-3 border-primary">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-code me-2"></i>method="POST"
                    </div>
                    <div class="card-body">
                        <p class="card-text">Especifica que los datos del formulario se enviarán mediante el método HTTP
                            POST, necesario para enviar archivos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 border-primary">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-code me-2"></i>enctype="multipart/form-data"
                    </div>
                    <div class="card-body">
                        <p class="card-text">Permite la codificación de archivos para su envío. Sin este atributo, los
                            archivos no se transferirán correctamente.</p>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mt-4">Ejemplo de formulario HTML:</h4>
        <div class="code-block">
            <code>
                    &lt;form action="upload.php" method="POST" enctype="multipart/form-data"&gt;<br>
                    &nbsp;&nbsp;&lt;label for="archivo"&gt;Selecciona un archivo:&lt;/label&gt;<br>
                    &nbsp;&nbsp;&lt;input type="file" name="archivo" id="archivo"&gt;<br>
                    &nbsp;&nbsp;&lt;button type="submit"&gt;Subir Archivo&lt;/button&gt;<br>
                    &lt;/form&gt;
                </code>
        </div>
    </section>

    <!-- Proceso de Subida -->
    <section class="section-card">
        <h2 class="section-title">Proceso de Subida de Archivos</h2>
        <p class="mb-4">El proceso de subir un archivo desde el cliente al servidor involucra varios pasos:</p>

        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Selección</h4>
                    <p>El usuario selecciona un archivo usando el input de tipo "file".</p>
                    <i class="fas fa-mouse-pointer fa-2x text-primary"></i>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Envio</h4>
                    <p>El formulario se envía al servidor con el archivo adjunto.</p>
                    <i class="fas fa-paper-plane fa-2x text-primary"></i>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Recepción</h4>
                    <p>PHP recibe el archivo en la variable global $_FILES.</p>
                    <i class="fas fa-server fa-2x text-primary"></i>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Almacenamiento</h4>
                    <p>El archivo se mueve a su ubicación permanente.</p>
                    <i class="fas fa-hdd fa-2x text-primary"></i>
                </div>
            </div>
        </div>

        <div class="diagram-container">
            <h4 class="text-center mb-4">Flujo de Subida de Archivos</h4>
            <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg" class="w-100">
                <!-- Client -->
                <rect x="50" y="100" width="150" height="80" rx="10" fill="#4361ee" opacity="0.8" />
                <text x="125" y="140" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">Cliente</text>
                <text x="125" y="165" text-anchor="middle" fill="white" font-family="Arial">(Navegador)</text>

                <!-- Arrow -->
                <line x1="200" y1="140" x2="280" y2="140" stroke="#333" stroke-width="2" />
                <polygon points="280,140 270,135 270,145" fill="#333" />

                <!-- Server -->
                <rect x="280" y="100" width="150" height="80" rx="10" fill="#4895ef" opacity="0.8" />
                <text x="355" y="140" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">Servidor</text>
                <text x="355" y="165" text-anchor="middle" fill="white" font-family="Arial">(PHP)</text>

                <!-- Arrow -->
                <line x1="430" y1="140" x2="510" y2="140" stroke="#333" stroke-width="2" />
                <polygon points="510,140 500,135 500,145" fill="#333" />

                <!-- Storage -->
                <rect x="510" y="100" width="150" height="80" rx="10" fill="#3f37c9" opacity="0.8" />
                <text x="585" y="140" text-anchor="middle" fill="white" font-weight="bold"
                    font-family="Arial">Almacenamiento</text>

                <!-- File -->
                <rect x="90" y="50" width="70" height="30" rx="5" fill="#4cc9f0" />
                <text x="125" y="70" text-anchor="middle" fill="white" font-family="Arial">archivo.jpg</text>

                <!-- File moving -->
                <animateMotion xlink:href="#movingFile" begin="0s" dur="3s" repeatCount="indefinite"
                    path="M 125,80 C 200,80 300,140 400,140 500,140 600,140 650,140" />
                <circle id="movingFile" cx="0" cy="0" r="7" fill="#4cc9f0">
                    <animate attributeName="opacity" values="0.7;1;0.7" dur="1.5s" repeatCount="indefinite" />
                </circle>
            </svg>
        </div>
    </section>

    <!-- Subir Archivos al Servidor -->
    <section class="section-card">
        <h2 class="section-title">Subir Archivos al Servidor con PHP</h2>
        <p>PHP maneja los archivos subidos a través de la superglobal $_FILES. Esta variable contiene toda la
            información sobre el archivo subido.</p>

        <div class="important-note">
            <h5><i class="fas fa-exclamation-circle me-2"></i>Importante:</h5>
            <p>El archivo subido se almacena temporalmente en el servidor. Debes moverlo a una ubicación permanente
                usando <code>move_uploaded_file()</code>.</p>
        </div>

        <h4 class="mt-4">Estructura de $_FILES:</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Campo</th>
                        <th>Descripción</th>
                        <th>Ejemplo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>name</code></td>
                        <td>Nombre original del archivo</td>
                        <td>mi_imagen.jpg</td>
                    </tr>
                    <tr>
                        <td><code>type</code></td>
                        <td>Tipo MIME del archivo</td>
                        <td>image/jpeg</td>
                    </tr>
                    <tr>
                        <td><code>tmp_name</code></td>
                        <td>Ruta temporal en el servidor</td>
                        <td>/tmp/php3tR2xW</td>
                    </tr>
                    <tr>
                        <td><code>error</code></td>
                        <td>Código de error (0 = éxito)</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>Tamaño en bytes</td>
                        <td>102400</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4 class="mt-4">Ejemplo de código PHP:</h4>
        <div class="code-block">
            <code>
                    &lt;?php<br>
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {<br>
                    &nbsp;&nbsp;$directorio = 'uploads/';<br>
                    &nbsp;&nbsp;$archivo = $directorio . basename($_FILES['archivo']['name']);<br>
                    <br>
                    &nbsp;&nbsp;// Verificar si es una imagen real<br>
                    &nbsp;&nbsp;$check = getimagesize($_FILES['archivo']['tmp_name']);<br>
                    &nbsp;&nbsp;if ($check === false) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo 'El archivo no es una imagen.';<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
                    &nbsp;&nbsp;}<br>
                    <br>
                    &nbsp;&nbsp;// Limitar tamaño (ej: 2MB)<br>
                    &nbsp;&nbsp;if ($_FILES['archivo']['size'] > 2000000) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo 'El archivo es demasiado grande.';<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
                    &nbsp;&nbsp;}<br>
                    <br>
                    &nbsp;&nbsp;// Mover archivo a ubicación permanente<br>
                    &nbsp;&nbsp;if (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo 'El archivo se subió correctamente.';<br>
                    &nbsp;&nbsp;} else {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo 'Error al subir el archivo.';<br>
                    &nbsp;&nbsp;}<br>
                    }<br>
                    ?&gt;
                </code>
        </div>
    </section>

    <!-- Subir Archivos - Demo -->
    <section class="section-card">
        <h2 class="section-title">Demo: Subir Archivos</h2>
        <div class="upload-container">
            <h4 class="text-center mb-4">Prueba nuestro formulario de subida</h4>

            <form id="uploadForm">
                <div class="file-input-container mb-4">
                    <div class="file-input-label p-4">
                        <i class="fas fa-cloud-upload-alt fa-3x mb-3 text-primary"></i>
                        <h5>Arrastra y suelta tu archivo aquí</h5>
                        <p class="text-muted mb-2">o haz clic para seleccionar</p>
                        <p class="small text-muted">Formatos soportados: JPG, PNG, GIF (Máx. 2MB)</p>
                        <input type="file" id="fileInput" name="archivo" accept="image/*">
                    </div>
                </div>

                <div class="d-grid">
                    <button type="button" class="btn-upload" id="uploadBtn">
                        <i class="fas fa-upload me-2"></i>Subir Archivo
                    </button>
                </div>
            </form>

            <div class="progress mt-4" style="height: 8px; display: none;" id="progressContainer">
                <div class="progress-bar" role="progressbar" style="width: 0%" id="progressBar"></div>
            </div>

            <div class="alert mt-3 mb-0" role="alert" id="uploadMessage" style="display: none;"></div>
        </div>
    </section>

    <!-- Mostrar Imágenes en la Web -->
    <section class="section-card">
        <h2 class="section-title">Mostrar Imágenes en la Web</h2>
        <p>Una vez que las imágenes están almacenadas en el servidor, puedes mostrarlas fácilmente en tu aplicación web
            usando la etiqueta <code>&lt;img&gt;</code> de HTML.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Ejemplo básico:</h4>
                <div class="code-block">
                    <code>
                            &lt;?php<br>
                            $imagen = 'uploads/mi_imagen.jpg';<br>
                            ?&gt;<br>
                            &lt;img src="&lt;?php echo $imagen; ?&gt;" alt="Imagen subida"&gt;
                        </code>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Mostrando múltiples imágenes:</h4>
                <div class="code-block">
                    <code>
                            &lt;?php<br>
                            $directorio = 'uploads/';<br>
                            $imagenes = glob($directorio . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);<br>
                            <br>
                            foreach($imagenes as $imagen) {<br>
                            &nbsp;&nbsp;echo '&lt;img src="' . $imagen . '"&gt;';<br>
                            }<br>
                            ?&gt;
                        </code>
                </div>
            </div>
        </div>

        <h4 class="mt-4">Galería de Imágenes Subidas:</h4>
        <div class="gallery" id="imageGallery">
            <!-- Images will be dynamically added here -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    alt="Paisaje 1">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    alt="Paisaje 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    alt="Paisaje 3">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    alt="Paisaje 4">
            </div>
        </div>
    </section>

    <!-- Consideraciones de Seguridad -->
    <section class="section-card">
        <h2 class="section-title">Consideraciones de Seguridad</h2>
        <p>Subir archivos puede ser un riesgo de seguridad si no se implementa correctamente. Sigue estas mejores
            prácticas:</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card border-danger mb-3">
                    <div class="card-header bg-danger text-white">
                        <i class="fas fa-shield-alt me-2"></i>Medidas de Seguridad
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Validar tipo de archivo (extensiones y MIME type)</li>
                        <li class="list-group-item">Limitar tamaño máximo de archivo</li>
                        <li class="list-group-item">Renombrar archivos para evitar conflictos</li>
                        <li class="list-group-item">Almacenar archivos fuera del directorio raíz</li>
                        <li class="list-group-item">Usar permisos de archivo adecuados</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-success mb-3">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-check-circle me-2"></i>Validación de Imágenes
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Usar <code>getimagesize()</code> para verificar que es una imagen
                        </li>
                        <li class="list-group-item">Verificar dimensiones máximas</li>
                        <li class="list-group-item">Usar <code>exif_imagetype()</code> para verificar el tipo real</li>
                        <li class="list-group-item">Considerar usar librerías como GD o Imagick para reprocesar imágenes
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Simulación de subida de archivos para la demo
    document.getElementById('uploadBtn').addEventListener('click', function () {
        const fileInput = document.getElementById('fileInput');
        const progressBar = document.getElementById('progressBar');
        const progressContainer = document.getElementById('progressContainer');
        const uploadMessage = document.getElementById('uploadMessage');

        if (fileInput.files.length === 0) {
            uploadMessage.textContent = 'Por favor, selecciona un archivo primero.';
            uploadMessage.className = 'alert alert-danger';
            uploadMessage.style.display = 'block';
            return;
        }

        const file = fileInput.files[0];
        const validTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Validar tipo de archivo
        if (!validTypes.includes(file.type)) {
            uploadMessage.textContent = 'Formato de archivo no válido. Solo se permiten JPG, PNG o GIF.';
            uploadMessage.className = 'alert alert-danger';
            uploadMessage.style.display = 'block';
            return;
        }

        // Validar tamaño (2MB)
        if (file.size > 2 * 1024 * 1024) {
            uploadMessage.textContent = 'El archivo es demasiado grande. Máximo permitido: 2MB.';
            uploadMessage.className = 'alert alert-danger';
            uploadMessage.style.display = 'block';
            return;
        }

        // Mostrar barra de progreso
        progressContainer.style.display = 'block';
        uploadMessage.style.display = 'none';

        // Simular progreso de subida
        let width = 0;
        const interval = setInterval(() => {
            if (width >= 100) {
                clearInterval(interval);

                // Simular éxito después de completar
                setTimeout(() => {
                    progressBar.style.width = '100%';

                    // Mostrar mensaje de éxito
                    uploadMessage.textContent = `¡Archivo "${file.name}" subido correctamente!`;
                    uploadMessage.className = 'alert alert-success';
                    uploadMessage.style.display = 'block';

                    // Resetear formulario después de 3 segundos
                    setTimeout(() => {
                        fileInput.value = '';
                        progressBar.style.width = '0%';
                        progressContainer.style.display = 'none';
                    }, 3000);
                }, 500);
            } else {
                width += 10;
                progressBar.style.width = width + '%';
            }
        }, 100);
    });

    // Cambiar estilo cuando se selecciona un archivo
    document.getElementById('fileInput').addEventListener('change', function () {
        if (this.files.length > 0) {
            const fileName = this.files[0].name;
            const fileSize = (this.files[0].size / 1024 / 1024).toFixed(2);

            const label = document.querySelector('.file-input-label');
            label.innerHTML = `
                    <i class="fas fa-file-image fa-2x mb-2 text-primary"></i>
                    <h5>${fileName}</h5>
                    <p class="mb-0">Tamaño: ${fileSize} MB</p>
                `;

            // Ocultar mensaje previo
            document.getElementById('uploadMessage').style.display = 'none';
        }
    });
</script>