<?php
namespace app\kernel;
class Router {
   public static function analyze( $query ) {

       
      if( $query === "" || $query === "/" ) {
         $result["controller"] = "Index";
         $result["action"] = "display";
         $result["bundle"] = "item" ; 
      } else {
         $parts = explode("/", $query);
            $result["controller"] = ucfirst($parts[0]) ; 
            $result["action"] = "display";
            $result["params"]["slug"] = $parts[1];     
            $result["bundle"] = $parts[2] ; 
         
      }
      return $result;

   }

}
