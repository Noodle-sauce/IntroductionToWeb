<?php

require "vendor/autoload.php";

flight::route("/", function(){
    echo "Hello from / route";
});

flight::start();
?>