<?php
require_once("conectare.php");

class Stergere extends Conectare{

  function __construct()
  {
    parent::__construct("exemplutabel",false);
  }
}
?>
