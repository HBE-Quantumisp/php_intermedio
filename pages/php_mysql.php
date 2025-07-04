<!-- Sección Hero -->
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">PHP y MySQL</h1>
        <p class="lead">Aprende a crear aplicaciones web dinámicas con PHP y MySQL</p>
    </div>
</section>

<div class="container">
    <!-- Introducción a PHP y MySQL -->
    <section id="introduccion" class="mb-5">
        <div class="section-card">
            <div class="card-header">
                <h2><i class="fas fa-info-circle me-2"></i>Introducción a PHP y MySQL</h2>
            </div>
            <div class="card-body">
                <p>PHP y MySQL forman una combinación poderosa para el desarrollo web. PHP es un lenguaje de
                    programación del lado del servidor, mientras que MySQL es un sistema de gestión de bases de
                    datos relacionales.</p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="fab fa-php"></i>
                            <h4>PHP</h4>
                            <p>Lenguaje de scripting del lado del servidor diseñado para desarrollo web. Se ejecuta
                                en el servidor y genera HTML que se envía al cliente.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="fas fa-database"></i>
                            <h4>MySQL</h4>
                            <p>Sistema de gestión de bases de datos relacionales de código abierto. Almacena datos
                                de forma estructurada y permite consultas eficientes.</p>
                        </div>
                    </div>
                </div>

                <h4 class="mt-4">¿Cómo trabajan juntos?</h4>
                <div class="diagram-container">
                    <div class="progress-container">
                        <div class="progress-title">
                            <span>Cliente envía solicitud</span>
                            <span>100%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%"></div>
                        </div>

                        <div class="progress-title">
                            <span>PHP procesa la solicitud</span>
                            <span>100%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%"></div>
                        </div>

                        <div class="progress-title">
                            <span>PHP consulta MySQL</span>
                            <span>100%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                        </div>

                        <div class="progress-title">
                            <span>PHP envía respuesta al cliente</span>
                            <span>100%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-4">Ventajas de usar PHP con MySQL</h4>
                <ul>
                    <li>Ambos son de código abierto y gratuitos</li>
                    <li>Combinación probada y estable durante décadas</li>
                    <li>Gran comunidad de desarrolladores</li>
                    <li>Amplia documentación y recursos disponibles</li>
                    <li>Compatibilidad con la mayoría de los servidores web</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- MySQLi -->
    <section id="mysqli" class="mb-5">
        <div class="section-card">
            <div class="card-header">
                <h2><i class="fas fa-code me-2"></i>MySQLi</h2>
            </div>
            <div class="card-body">
                <p>MySQLi (MySQL Improved) es una extensión de PHP que permite interactuar con bases de datos MySQL.
                    Ofrece una interfaz tanto procedural como orientada a objetos.</p>

                <h4>Características principales:</h4>
                <ul>
                    <li>Soporte para programación procedural y orientada a objetos</li>
                    <li>Soporte para sentencias preparadas (prepared statements)</li>
                    <li>Soporte para transacciones</li>
                    <li>Manejo mejorado de errores</li>
                    <li>Soporte para múltiples sentencias</li>
                </ul>

                <h4 class="mt-4">Ejemplo de conexión con MySQLi (Orientado a objetos):</h4>
                <div class="code-block">
                    <pre><code>&lt;?php
$servidor = "localhost";
$usuario = "tu_usuario";
$password = "tu_contraseña";
$base_datos = "tu_basedatos";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa";
?&gt;</code></pre>
                </div>

                <h4 class="mt-4">Ejemplo de consulta con MySQLi:</h4>
                <div class="code-block">
                    <pre><code>&lt;?php
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar datos de cada fila
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Email: " . $fila["email"]. "&lt;br&gt;";
    }
} else {
    echo "0 resultados";
}
$conexion->close();
?&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- PDO -->
    <section id="pdo" class="mb-5">
        <div class="section-card">
            <div class="card-header">
                <h2><i class="fas fa-database me-2"></i>PDO (PHP Data Objects)</h2>
            </div>
            <div class="card-body">
                <p>PDO es una capa de abstracción de acceso a datos que proporciona una interfaz uniforme para
                    trabajar con múltiples bases de datos, incluyendo MySQL, PostgreSQL, SQLite y otras.</p>

                <h4>Ventajas de PDO:</h4>
                <ul>
                    <li>Abstracción de base de datos (funciona con múltiples sistemas)</li>
                    <li>Soporte para sentencias preparadas que previenen inyecciones SQL</li>
                    <li>Orientado completamente a objetos</li>
                    <li>Manejo de errores más robusto</li>
                    <li>Transacciones de base de datos</li>
                </ul>

                <h4 class="mt-4">Comparación entre MySQLi y PDO</h4>
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>MySQLi</th>
                            <th>PDO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Compatibilidad con bases de datos</td>
                            <td>Solo MySQL</td>
                            <td>Múltiples bases de datos</td>
                        </tr>
                        <tr>
                            <td>Interfaz</td>
                            <td>Procedural y OOP</td>
                            <td>Solo OOP</td>
                        </tr>
                        <tr>
                            <td>Sentencias preparadas</td>
                            <td>Sí</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>Transacciones</td>
                            <td>Sí</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>API</td>
                            <td>Específica de MySQL</td>
                            <td>Consistente entre bases de datos</td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">Ejemplo de conexión con PDO:</h4>
                <div class="code-block">
                    <pre><code>&lt;?php
$servidor = "localhost";
$base_datos = "tu_basedatos";
$usuario = "tu_usuario";
$password = "tu_contraseña";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $password);
    // Establecer el modo de error PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa"; 
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Conexión y consultas -->
    <section id="conexiones" class="mb-5">
        <div class="section-card">
            <div class="card-header">
                <h2><i class="fas fa-plug me-2"></i>Conexión y Consultas</h2>
            </div>
            <div class="card-body">
                <p>La conexión a una base de datos es el primer paso para interactuar con MySQL desde PHP. Una vez
                    establecida la conexión, podemos ejecutar consultas para recuperar, insertar, actualizar o
                    eliminar datos.</p>

                <h4>Tipos de consultas comunes:</h4>
                <div class="row mt-4">
                    <div class="col-md-3 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-search"></i>
                            <h5>SELECT</h5>
                            <p>Recuperar datos de la base de datos</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-plus-circle"></i>
                            <h5>INSERT</h5>
                            <p>Agregar nuevos registros</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-edit"></i>
                            <h5>UPDATE</h5>
                            <p>Modificar registros existentes</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-trash-alt"></i>
                            <h5>DELETE</h5>
                            <p>Eliminar registros</p>
                        </div>
                    </div>
                </div>

                <h4 class="mt-4">Insertar datos en la base de datos</h4>
                <p>Para insertar datos desde PHP a MySQL, necesitamos crear una consulta SQL INSERT y ejecutarla
                    usando MySQLi o PDO.</p>

                <h5>Ejemplo con MySQLi:</h5>
                <div class="code-block">
                    <pre><code>&lt;?php
// Datos a insertar
$nombre = "Juan Pérez";
$email = "juan@example.com";
$fecha_registro = date("Y-m-d H:i:s");

// Preparar la consulta
$sql = "INSERT INTO usuarios (nombre, email, fecha_registro) 
        VALUES ('$nombre', '$email', '$fecha_registro')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "&lt;br&gt;" . $conexion->error;
}

$conexion->close();
?&gt;</code></pre>
                </div>

                <div class="alert alert-warning mt-4">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Importante: Prevenir inyecciones SQL</h5>
                    <p>El ejemplo anterior es vulnerable a ataques de inyección SQL. Siempre debes usar sentencias
                        preparadas para proteger tu aplicación:</p>
                    <div class="code-block mt-3">
                        <pre><code>&lt;?php
// Usando sentencias preparadas con MySQLi
$stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, fecha_registro) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $fecha_registro);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Registro creado con seguridad";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formularios -->
    <section id="formularios" class="mb-5">
        <div class="section-card">
            <div class="card-header">
                <h2><i class="fas fa-edit me-2"></i>Formularios en PHP</h2>
            </div>
            <div class="card-body">
                <p>Los formularios HTML son la principal forma de recopilar datos de los usuarios en aplicaciones
                    web. PHP se utiliza para procesar estos datos y almacenarlos en bases de datos MySQL.</p>

                <div class="form-diagram">
                    <div class="form-step">
                        <div class="form-step-number">1</div>
                        <div class="form-step-text">Usuario completa formulario</div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-number">2</div>
                        <div class="form-step-text">Datos enviados al servidor</div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-number">3</div>
                        <div class="form-step-text">PHP valida y procesa datos</div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-number">4</div>
                        <div class="form-step-text">PHP guarda en MySQL</div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-number">5</div>
                        <div class="form-step-text">Respuesta al usuario</div>
                    </div>
                </div>

                <h4 class="mt-4">Componentes de un formulario</h4>
                <ul>
                    <li><strong>Elemento &lt;form&gt;:</strong> Contenedor que define el formulario</li>
                    <li><strong>Atributos importantes:</strong>
                        <ul>
                            <li><code>action</code>: Especifica dónde enviar los datos (archivo PHP)</li>
                            <li><code>method</code>: GET (datos en URL) o POST (datos en cuerpo de solicitud)</li>
                            <li><code>enctype</code>: Especifica cómo codificar los datos (importante para archivos)
                            </li>
                        </ul>
                    </li>
                    <li><strong>Campos de entrada:</strong> &lt;input&gt;, &lt;select&gt;, &lt;textarea&gt;, etc.
                    </li>
                    <li><strong>Botón de envío:</strong> &lt;button type="submit"&gt; o &lt;input type="submit"&gt;
                    </li>
                </ul>

                <h4 class="mt-4">Ejemplo de formulario</h4>
                <div class="form-example">
                    <form id="demo-form">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password">
                        </div>

                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Género</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="masculino"
                                    value="masculino">
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="femenino"
                                    value="femenino">
                                <label class="form-check-label" for="femenino">Femenino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="otro" value="otro">
                                <label class="form-check-label" for="otro">Otro</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pais" class="form-label">País</label>
                            <select class="form-select" id="pais">
                                <option selected disabled>Selecciona un país</option>
                                <option value="mx">México</option>
                                <option value="co">Colombia</option>
                                <option value="ar">Argentina</option>
                                <option value="es">España</option>
                                <option value="cl">Chile</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terminos">
                            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </form>
                </div>

                <h4 class="mt-4">Procesar formulario en PHP</h4>
                <p>Cuando se envía un formulario, PHP captura los datos mediante las superglobales $_GET o $_POST:
                </p>
                <div class="code-block">
                    <pre><code>&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar y sanitizar datos
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];
    $terminos = isset($_POST['terminos']) ? 1 : 0;
    
    // Validar datos
    $errores = [];
    
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no es válido";
    }
    
    // Si no hay errores, insertar en la base de datos
    if (empty($errores)) {
        // Usar sentencias preparadas para seguridad
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, password, fecha_nacimiento, genero, pais, terminos) 
                                   VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $nombre, $email, $password_hash, $fecha_nacimiento, $genero, $pais, $terminos);
        
        // Hashear la contraseña
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        if ($stmt->execute()) {
            echo "Registro exitoso!";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        // Mostrar errores
        foreach ($errores as $error) {
            echo "&lt;div class='error'&gt;$error&lt;/div&gt;";
        }
    }
}
?&gt;</code></pre>
                </div>

                <div class="alert alert-info mt-4">
                    <h5><i class="fas fa-lightbulb me-2"></i>Mejores prácticas para formularios</h5>
                    <ul>
                        <li>Usa siempre <code>POST</code> para formularios que envían datos sensibles</li>
                        <li>Valida los datos tanto en el cliente (JavaScript) como en el servidor (PHP)</li>
                        <li>Sanitiza todos los datos recibidos antes de procesarlos</li>
                        <li>Usa sentencias preparadas para prevenir inyecciones SQL</li>
                        <li>Hashea las contraseñas con <code>password_hash()</code></li>
                        <li>Proporciona feedback claro al usuario sobre el resultado</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Simulación de envío de formulario
    document.getElementById('demo-form').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Formulario enviado con éxito (simulación). En una aplicación real, los datos serían procesados por PHP.');
    });

    // Animación para las barras de progreso
    document.addEventListener('DOMContentLoaded', function () {
        const progressBars = document.querySelectorAll('.progress-bar');

        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';

            setTimeout(() => {
                bar.style.transition = 'width 1.5s ease-in-out';
                bar.style.width = width;
            }, 300);
        });
    });
</script>