<?php

// Prefix Adscripcion
// adm
// aux
// data

function locked(){
    if(empty($_SESSION)) {
        header("Location: index.php");
        exit();
    }
}

