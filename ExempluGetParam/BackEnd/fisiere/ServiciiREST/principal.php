<?php

class Principal {

  public static function getServ($app, $db){
   try {
    $request = $app->request();
    $id = $request->get('id');
    $row = $db->getMetodaParam($id);
    $json = Principal::raspuns(array($row));
    echo $json;
    $app->response()->header('Content-Type', 'application/json');
  } catch(Exception $e) {
   echo $e->getMessage();
 }
}

private static function raspuns($response)
{
  if(is_array($response)) {
    return json_encode($response[0]);
  } else {
    return json_encode((array)$response);
  }
}
}

?>
