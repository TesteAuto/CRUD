<?php
require_once("CurlPostDao.php");
require_once("CurlGetDao.php");
require_once("CurlPutDao.php");
require_once("CurlDeleteDao.php");

class Teste
{
  public function testePOST() {
    $dao = new CurlPostDao("http://localhost/ExempluPost/BackEnd","/creare", array(
      "col1" => 'exemplu5',
      "col2" => 'exemplu5',
      "col3" => 'exemplu5'
      )
    );
    return $dao->getResponse();
}

public function runTests()
{
    try {
     print_r($this->testePOST());
 } catch (Exception $e) {
    var_dump("Eroare in test.php");
}
}

}
//http://localhost/ExempluPost/BackEnd/fisiere/test.php
$test = new Teste();
$test->runTests();

