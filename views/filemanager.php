<?php include_once __DIR__ . '/header.php' ?>
<form enctype="multipart/form-data" method="POST" action="filemanager/upload">
    <div class="mb-3">
        <input type="file" name="image[]" class="form-control" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if ($files) { ?>
<div class="row">
    <?php foreach ($files as $file) { ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= fileUrl($file, 'filemanager') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php } ?>
<?php include_once __DIR__ . '/footer.php' ?>