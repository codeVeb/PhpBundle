<?php

require_once '../vendor/autoload.php';

/**
 *
 */
use PhpHelper\DataObject\HttpStatusCode;

class test {

  function __construct()
  {
    $sc = new HttpStatusCode\HttpStatusCode();
    $sc->getHttpStatusCode(200);
  }
}

$t = new test();
?>
