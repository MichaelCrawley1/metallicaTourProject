<?php

// displaying errors on the browser here, the ini_set tries to override the configuration found in your php ini file.

//The display errors and the display start up errors are just two of the directives available. 1 turns it on, 0 turns it off.  It is best practice to turn these errors off after development has been done.  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// this line shows all error warnings and notices, it doesn't mean your app will not work, it is warning you that errors may happen in certain conditions. 
error_reporting(E_ALL);

// this code down below encourages php to throw an error exception  in case of a database error

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>