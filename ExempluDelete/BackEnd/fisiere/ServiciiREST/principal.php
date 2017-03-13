<?php

class Principal {

  public static function deleteServ($db,$id){
    try {

      $id = $db->deleteMetoda($id);
      $json = Principal::raspuns($id);
      echo $json;
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
