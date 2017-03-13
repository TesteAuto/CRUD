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
  public function deleteMetoda($id) {
    try {
     $bean = R::findOne($this->tabel, "id = ?", array($id));
     if(!$bean) {
      throw new Exception("Acest id nu exista in baza de date");
     }
     R::trash($bean);
     return true;
   }catch (Exception $e) {
     echo "Eroare: ".$e->getMessage();
   }
 }
}
?>
