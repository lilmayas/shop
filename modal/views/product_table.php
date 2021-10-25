<?php include_once __DIR__ . '/header.php' ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Articul</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        <?php if ($products = getProducts()) { ?>
            <tbody>
                <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['articul'] ?></td>
                    <td><?= mb_substr($product['description'], 0, 10) . '...' ?></td>
                </tr>
                <?php } ?>
            </tbody>
        <?php } else { ?>
            <tr>
                <td colspan="3">Empty Table</td>
            </tr> 
        <?php } ?>
    </table>
</div>
<?php include_once __DIR__ . '/footer.php' ?>