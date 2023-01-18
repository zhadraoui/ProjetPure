<?php
require 'rb.php';  
R::setup('mysql:host=safaa.org;dbname=safaaorg_purecss','safaaorg_purecss','@PureCss2023');
if (!R::testConnection()) { 
    echo "Connection error";
}

?>