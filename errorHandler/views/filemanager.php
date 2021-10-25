<?php include_once __DIR__ . '/header.php' ?>
<form enctype="multipart/form-data" method="POST" action="/filemanager/upload">
    <div class="mb-3">
        <input type="file" name="image[]" class="form-control" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="container">
    <table class="table">
   
    <?  if(count($files) <= 0) { ?>
    <h4>No files</h4>
    <?php } else {   
        foreach($files as $file) { ?>
    <tr>
        <form action="/filemanager/delete" method="POST" >
            <td><img src="/storage/filemanager/<?= $file  ?>" style="height: 50px;"></td>
            <td><label><?= $file ?></label></td>
            <td><button name="file" value="<?= $file ?>">Delete</button></td>
        </form>
        
    </tr>
    <?php }
    } ?>
    </table>
</div>
<?php include_once __DIR__ . '/footer.php' ?>