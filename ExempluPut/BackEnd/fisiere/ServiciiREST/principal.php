<?php

class Principal {

  public static function putServ($app, $db, $id){
    try {
      $request = $app->request();
      echo json_encode(Principal::raspuns($db->putMetoda($id, json_decode($request->getBody(), true))));
    } catch(Exception $e) {
     echo json_encode(array("error" => $e->getMessage()));
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
