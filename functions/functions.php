<?php

function dd($data) {

    echo '<pre>';
    var_dump($data);
    echo '</pre>';

}

function view($filename, $data = []) {

    extract($data);
    
    require '../app/templates/header.php';
    require '../app/views/' . $filename . '.view.php';
    require '../app/templates/footer.php';

}