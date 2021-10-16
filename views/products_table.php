<?php include_once __DIR__ . '/header.php' ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Articul</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < 20; $i++) { ?>
                <tr>
                    <td>1</td>
                    <td>mark</td>
                    <td>Otto</td>
                    <td>mdo</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include_once __DIR__ . '/footer.php' ?>