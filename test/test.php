<?php

require_once '../vendor/autoload.php';

/**
 *
 */
class cls1 {
  use PhpHelper/RgbHex;

  function test()
  {
    echo __CLASS__.__METHOD__;
  }
}

?>
