<?php
namespace app\kernel;
class Kernel {

   public static function run() {
      // Autoload
     
      $query = isset($_GET["query"]) ? $_GET["query"] : "";
      $route = Router::analyze( $query );
      $class = "\\app\\modules\\item\\controller\\".$route["controller"]."Controller";
      
      if(class_exists($class)) {
          $bundle = $route["controller"]  ; 
         $controller = new $class ($route , $route["bundle"] );
         $method = array($controller, $route["action"] );
         if( is_callable( $method ))
            call_user_func($method);
      }else{
          print 'Class '.$class.' Not Exists' ; 
          print "\n" ; 
      }

   }
   
}
