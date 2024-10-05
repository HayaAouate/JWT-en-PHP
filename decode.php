<?php
const TOKEN = '';

require_once 'includes/config.php';
require_once 'classes/JWT.php';

$jwt = new JWT();
var_dump($jwt->isValid(TOKEN));
