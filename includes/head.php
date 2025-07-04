<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP intermedio</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Custom CSS -->

    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <!-- CSS de la página actual -->
    <?php if (isset($_GET['page']) && file_exists("./css/{$_GET['page']}.css")): ?>
        <link rel="stylesheet" href="./css/<?= htmlspecialchars($_GET['page']) ?>.css">
    <?php else: ?>
        <link rel="stylesheet" href="./css/index.css">
    <?php endif; ?>
</head>