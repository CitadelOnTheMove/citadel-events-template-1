<?php
/*
 * Configuration settings
*/

// directories
define("HTDOCS_ROOT", "");
define("BASE_DIR", "Citadel-Events-Template/" );
define("CLASSES_DIR", "php/");
define("CLASSES", HTDOCS_ROOT . BASE_DIR . CLASSES_DIR);


// database
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_HOSTNAME", "127.0.0.1");
define("DB_PORT", "3306");
define("DB_NAME", "citadel");

define("DEBUG", true);

// views
define("MAP_CENTER_LATITUDE", 48.8275910);
define("MAP_CENTER_LONGITUDE", 2.27699460);
define("MAP_ZOOM", 16);

// dataset
define("DATASET_FILE", HTDOCS_ROOT . BASE_DIR ."data/Citadel-POI-common-event-Issy.json");
define("DATASET_ID", 30);
define("DATASET_URL", "http://localhost/" . BASE_DIR . "dataset.php");
define("USE_DATABASE", false);

?>
