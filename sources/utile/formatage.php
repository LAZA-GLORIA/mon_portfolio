<?php
function formatageTitre($titre){
    $txt = '<h2 class="mt-5 border-bottom pt-5">';
    $txt .= $titre;
    $txt .= '</h2>';
    return $txt;
}

function formatageSousTitre($titre){
    $txt = '<h3 class="mb-5 border-bottom pt-1">';
    $txt .= $titre;
    $txt .= '</h3>';
    return $txt;
}


?>