<?php
if (file_exists('./ASSETS/datos.json')) {
    $_SESSION['usuarios'] = json_decode(file_get_contents('./ASSETS/datos.json'), true);
}
?>