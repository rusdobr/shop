<?php
//database connection settings

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    include("./cfg/connect.dev.inc.php");
} else {
    include("./cfg/connect.prod.inc.php");
}
//database tables
include("./cfg/tables.inc.php");

?>