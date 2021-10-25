<?php include_once __DIR__ . '/header.php' ?>
<?php include_once __DIR__ . '/home.php' ?>
<div id="myModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $title ?></h5>
            </div>
            <div class="modal-body">
                <p><?= $message ?></p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"><?= $btn ?></button>
            </div>
        </div>
    </div>
</div>
<script>
document.onclick = function() {
    location.href = "/";
};
var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
    keyboard: false
});
myModal.show();
</script>
<?php include_once __DIR__ . '/footer.php' ?>