<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pico.css" />
    <link rel="stylesheet" href="../../css/pico.classless.min.css" />
    <title>Admin Bereich</title>
</head>
<body>
    <header>
        <h1>Produkte</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../login/login.php">Login</a></li>
                <li><a href="../../login/logout.php">Logout</a></li>
                <li><a href="../../admin/admin.php"></a></li>
            </ul>
        </nav>
    </header>
    <main class="grid">
        <?= $content ?? ''; ?>
    </main>
</body>

</html>