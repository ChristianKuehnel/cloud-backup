#!/usr/bin/env php
<?php 
  // This script will dump the configuration variables of the Nextcloud 
  // database to stdout so that it can be parsed from a bash script
  include "/var/www/nextcloud/config/config.php";
  $relevant = array("dbuser", "dbpassword", "dbhost", "dbname" );

  foreach ($relevant as $var){
    echo "$var=$CONFIG[$var]\n";
  }
?>
