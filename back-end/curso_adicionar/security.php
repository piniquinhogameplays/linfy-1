<?php

require 'config_db.php';

$urls_permitidas = [
    'cursos' => 'http:/localhost/linfy/back-end/curso/e/user/index.php',
    'login' => 'http/linfy/back-end/login_sistem/login.php', 
    'register' => 'http/linfy/back-end/login_sistem/register.php',
];

function validaUrl($destino, $urls_permitidas): void   {
    if(array_key_exists(key: $destino, array: $urls_permitidas)) {
        header(header: "location" . $urls_permitidas[$destino]);
        exit();
    } else {
        die('DEDSEC_system: (Blocked acces)' . $conn->error);
    } 
}
?>