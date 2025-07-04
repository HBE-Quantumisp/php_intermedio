<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-code me-2"></i>
            <?php
            if (isset($_GET['page']) and $_GET['page'] != "inicio") {
                if ($_GET['page'] == "sistema_de_archivos") {
                    echo "Sistema de Archivos";
                } elseif ($_GET['page'] == "subida_de_archivos") {
                    echo "Subida de Archivos";
                } elseif ($_GET['page'] == "php_mysql") {
                    echo "PHP y MySQL";
                } else {
                    echo ucfirst($_GET['page']);
                }
            } else {
                echo "PHP Intermedio";
            }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="" method="get">
                        <input type="hidden" name="page" value="inicio">
                        <button type="submit" class="btn btn-link nav-link active"><i class="fas fa-home me-1"></i>
                            Inicio</button>
                    </form>
                </li>
                <li class="nav-item">
                    <span class="nav-link">
                        <?php
                        if (isset($_GET['page']) and $_GET['page'] != "inicio") {
                            if ($_GET['page'] == "sistema_de_archivos") {
                                echo "Sistema de Archivos";
                            } elseif ($_GET['page'] == "subida_de_archivos") {
                                echo "Subida de Archivos";
                            } elseif ($_GET['page'] == "php_mysql") {
                                echo "PHP y MySQL";
                            } else {
                                echo ucfirst($_GET['page']);
                            }
                        } else {
                            echo "";
                        }
                        ?>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>