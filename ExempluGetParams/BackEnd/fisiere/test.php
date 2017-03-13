<?php
require_once("CurlPostDao.php");
require_once("CurlGetDao.php");
require_once("CurlPutDao.php");
require_once("CurlDeleteDao.php");

class Teste
{
    public function testeGETparam() {
        $dao = new CurlGetDao("http://localhost/ExempluGetParams/BackEnd", "/afisare?id=1&col1=exemplu1");
        return $dao->getResponse();
    }
  
    public function runTests()
    {
        try {
           print_r($this->testeGETparam());
        } catch (Exception $e) {
            var_dump("Eroare in test.php");
        }
    }

}
//http://localhost/ExempluGetParams/BackEnd/fisiere/test.php
$test = new Teste();
$test->runTests();
