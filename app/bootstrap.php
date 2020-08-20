<?php
/**
 * Created by PhpStorm.
 * Author: Ian Kipchirchir
 * Date: 7/16/20
 * Time: 10:30 AM
 */

// Load Config
require 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});