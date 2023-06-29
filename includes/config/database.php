<?php

function conectarDB() : mysqli {
    $db = new mysqli('162.241.217.234', 'ddcodeco_root', 'Alejandroe2004ms*', 'ddcodeco_startup');

    if (!$db) {
        echo "ERROR no se pudo conectar";
        exit;
    }

    return $db;
}