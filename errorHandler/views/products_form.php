
<?php include_once __DIR__ . '/header.php' ?>
<form enctype="multipart/form-data" method="POST" action="/products/create">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Articul</label>
    <input name="sku" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
        <input name="image" class="form-control" type="file">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include_once __DIR__ . '/footer.php' ?>