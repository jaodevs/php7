
<?php

session_id('oafi7jak2bjhc54o99vb3jionh');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

