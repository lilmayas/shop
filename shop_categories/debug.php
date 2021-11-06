<?php
include_once __DIR__ . '/bootstrap.php';
echo '<pre>';
foreach(getCategoriesTree() as $root) {
    var_dump(getChildren($root, 3));
}
echo '</pre>';