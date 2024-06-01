<section class="gallery grid">
    <?php if(!empty($products)) : ?>
        <?php foreach($products as $product) : ?>
            <div class="gallery-item"  style="max-width: 300px;">
                <?php if ($product->getImage() != null) : ?>
                    <img src="<?= e($product->getImage()) ?>" alt="<?= e($product->image->alt) ?>">
                <?php endif; ?>
                <p><?= e($product->name) ?></p>
                <?php if(isset($_SESSION['logged_in'])) : ?>
                <input type="button" name="upvote" value="<?= $product->upvotes ?>">
                <input type="button" name="downvotes" value="<?= $product->downvotes ?>">
                <?php endif; ?>
                <p>votings: <?= e(($product->upvotes - $product->downvotes)) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p style="color: white;">Es wurden keine Produkte erfasst.</p>
    <?php endif; ?>
</section>
