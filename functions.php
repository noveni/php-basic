<?php
function storeRecipes($recipes) {
    $fp = fopen('./recipes.json', 'w');
    fwrite($fp, json_encode($recipes));
    fclose($fp);
}


?>