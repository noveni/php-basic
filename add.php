<?php

require_once('./functions.php');
require_once('./getRecipes.inc.php');

// Save the newly created recipe in this variable
$newRecipe;

array_push($recipes, $newRecipe);
storeRecipes($recipes);
// Redirect to index

require_once('./includes/header.inc.php');
?>
<h3>Add one recipe</h3>
<?php
include('./includes/footer.inc.php')
?>