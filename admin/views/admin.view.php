<?php
require_once __DIR__ . '/../../inc/all.php' ?>


<section style="display: flex; flex-direction: column;">
    <section>
        <h2>Produkte bearbeiten oder löschen</h2>
        <?php if(isset($products) && !empty($products)) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Upvotes</th>
                        <th>Downvotes</th>
                        <th>Image</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <?php foreach($products as $product) : ?>
                    <tr>
                        <td><?= e($product->name)?></td>
                        <td><?= e($product->upvotes) ?></td>
                        <td><?= e($product->downvotes) ?></td>
                        <td>
                            <?php if ($product->image): ?>
                                <img src="<?= e($product->getImage()) ?>" alt="<?= e($product->image->alt) ?>" style="max-width: 100px; max-height: 100px;">
                            <?php else: ?>
                                No image
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="delete.php" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?= e($product->id )?>">
                                <button style="margin: 10px; padding: 5px;">Delete</button>
                                <span style="color: red"><?= $delete_error ?? '' ?></span>
                            </form>
                            <form action="edit.php" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                <button style="margin: 10px; padding: 5px;">Edit</button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        <?php else : ?>
            <p>Es wurden keine Produkte gefunden</p>
        <?php endif ?>
    </section>
    <section>
            <h2>Produkt hinzufügen</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="product">Name</label>
                <input type="text" name="product" id="product">
                <label for="alt">Image Alt Text (optional):</label>
                <input type="text" name="alt" id="alt">   
                <label for="image">Upload Image (optional):</label>
                <input type="file" name="image" id="image">

                <input type="submit" value="Hochladen">
            </form>
    </section>
</section> 