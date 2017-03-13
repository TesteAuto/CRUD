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
      R::setup('mysql:host=localhost;dbname=exempludb','root', 'mysqladmin');
    } catch (\RedBeanPHP\RedException $rbe) {
      throw $rbe;
    }
    $this->tabel = $tabel;
    $this->xdispense = $xdispense;
  }
  public function getMetodaParams($id,$col1) {
   try {
     $bean = R::findOne($this->tabel, "id = ? AND col1 = ?", array($id,$col1));
     if(!$bean) {
      throw new Exception("Nu exista elementul cautat in baza de date");
    }
    $ob = new stdClass();
    $ob->id = $bean->id;
    $ob->col1 = $bean->col1;
    return array($ob);
  } catch (Exception $e) {
   echo json_encode(array("Eroare" => $e->getMessage()));
 }
}
}
?>
