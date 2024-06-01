<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/pico.css" />
    <link rel="stylesheet" href="../../css/pico.classless.min.css" />
    <title>Edit Produkt</title>
</head>
<body>
    <section>
    <h2>Edit Produkt</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= e($error) ?></p>
    <?php endif; ?>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product->id ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $product->name ?>">
        <button type="submit" name="update">Update</button>
    </form>
    </section>
    
</body>
</html>