<?php
require_once(VENDOR."rb.php");

abstract class Conectare{


  protected $tabel = null;
  protected $xdispense = null;

  public function __construct($tabel, $xdispense = false) {
    date_default_timezone_set('Europe/Bucharest');
    try{
      R::ext('xdispense', function( $type ){
        return R::getRedBean()->dispense( $type );
      });
      R::setup('mysql:host=localhost;dbname=exempludb','root','mysqladmin');
    } catch (\RedBeanPHP\RedException $rbe) {
      throw $rbe;
    }
    $this->tabel = $tabel;
    $this->xdispense = $xdispense;
  }
  public function postMetoda($params = array()) {
   try {
     if($this->xdispense) {
       $bean = R::xdispense($this->tabel);
     } else {
       $bean = R::dispense($this->tabel);
     }
     foreach ($params as $key => $value) {
      $bean[$key] = $value;
    }
    return R::exportAll(R::load($this->tabel, R::store($bean)));
  } catch (\RedBeanPHP\RedException $rbe) {
   throw $rbe;
 }
}
}
?>
