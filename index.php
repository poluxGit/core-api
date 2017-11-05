<?php

/**
 * CorePHP@PoLuX API Main Index Page
 *
 * Script principal d'accès à l'API
 * @author poluxGit
 */

// Autoload!
require_once __DIR__.'/vendor/autoload.php';

// Démarrage de l'API
echo "Hello API";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";


?>
