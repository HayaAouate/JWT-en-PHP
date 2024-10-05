<?php
const TOKEN = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMjMsInJvbGVzIjpbIlJPTEVfQURNSU4iLCJST0xFX1VTRVIiXSwiZW1haWwiOiJjb250YWN0QGdtYWlsLmZyIiwiaWF0IjoxNzI4MTYzMTY1LCJleHAiOjE3MjgyNDk1NjV9.Ti-tWLC-pVXgN1FqAFmoetbR1sqrUylkTuIhK7isVdw';

require_once 'includes/config.php';
require_once 'classes/JWT.php';

$jwt = new JWT();
var_dump($jwt->isValid(TOKEN));
