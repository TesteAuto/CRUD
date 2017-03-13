<?php
require_once("CurlPostDao.php");
require_once("CurlGetDao.php");
require_once("CurlPutDao.php");
require_once("CurlDeleteDao.php");

class Teste
{
  public function testeDELETE() {
    $dao = new CurlDeleteDao("http://localhost/ExempluDelete/BackEnd", "/stergere/9", array());
    return $dao->getResponse();
  }
 
public function runTests()
{
    try {
     print_r($this->testeDELETE());
 } catch (Exception $e) {
    var_dump("Eroare in test.php");
}
}

}
//http://localhost/ExempluDelete/BackEnd/fisiere/test.php
$test = new Teste();
$test->runTests();

