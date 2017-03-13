<?php
require_once("CurlPostDao.php");
require_once("CurlGetDao.php");
require_once("CurlPutDao.php");
require_once("CurlDeleteDao.php");

class Teste
{
  public function testePUT() {
    $dao = new CurlPutDao("http://localhost/ExempluPut/BackEnd","/modificare/6", array(
      "col1" => 'testExemplu',
      "col2" => 'testExemplu',
      "col3" => 'testExemplu'
      )
    );
    return $dao->getResponse();
}

public function runTests()
{
    try {
     print_r($this->testePUT());
 } catch (Exception $e) {
    var_dump("Eroare in test.php");
}
}

}
//http://localhost/ExempluPut/BackEnd/fisiere/test.php
$test = new Teste();
$test->runTests();

