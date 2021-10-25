<?php include_once __DIR__ . '/header.php' ?>

<div class="container" style="padding-top: 40px;">
    <form method="post" action="/modal">
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <input name="message"  type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Btn</label>
            <input name="btn" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>
<?php include_once __DIR__ . '/footer.php' ?>