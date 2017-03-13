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
  public function putMetoda($id, $param = array()) {

    try {
      $bean = R::findOne($this->tabel, "id = ?", array($id));
      if(!$bean) {
        throw new Exception("Nu exista in baza de date ".$id);
      }else{
        foreach ($param as $key => $value) {
          $bean[$key] = $value;
        }
          return R::exportAll(R::load($this->tabel, R::store($bean)));
      }
    } catch (Exception $e) {
      echo "Eroare: ".$e->getMessage();
    }
  }
}
?>
