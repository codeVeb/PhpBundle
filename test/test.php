<?php
/**
 *
 */

require_once '../vendor/autoload.php';

use PhpHelper\HttpStatusCode;

class test {

  function __construct(){
    $sc = new HttpStatusCode\HttpStatusCode();
    $sc->getHttpStatusCode(200);
  }
}

$t = new test();
?>
