<?php include_once __DIR__ . '/header.php' ?>
<div class="container">
    <form action="product_create.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" value="<?= old('name') ?>" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Articul</label>
            <input name="articul" value="<?= old('articul') ?>" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"><?= old('description') ?></textarea>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Small file input example</label>
            <input class="form-control form-control-sm" name="image" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once __DIR__ . '/footer.php' ?>