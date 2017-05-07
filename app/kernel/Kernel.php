<?php

class Kernel {
   public static function autoload($class) {
       if (file_exists(ROOT . "/app/kernel/$class.php")) {
            require_once(ROOT . "/app/kernel/$class.php");
        } 
        
                
        else if (file_exists(ROOT . "/app/modules/item1/controller/$class.php")) {
            require_once(ROOT . "/app/modules/item1/controller/$class.php");
        } else if (file_exists(ROOT . "/app/modules/item1/model/$class.php")) {
            require_once(ROOT . "/app/modules/item1/model/$class.php");
        }
        
        else if (file_exists(ROOT . "/app/modules/item/controller/$class.php")) {
            require_once(ROOT . "/app/modules/item/controller/$class.php");
        } else if (file_exists(ROOT . "/app/modules/item/model/$class.php")) {
            require_once(ROOT . "/app/modules/item/model/$class.php");
        }
    }


   public static function run() {
      // Autoload
      spl_autoload_register(array("Kernel", "autoload"));
      $query = isset($_GET["query"]) ? $_GET["query"] : "";
      $route = Router::analyze( $query );
      $class = $route["controller"]."Controller";
      
      if(class_exists($class)) {
          $bundle = $route["controller"]  ; 
         $controller = new $class ($route , $route["bundle"] );
         $method = array($controller, $route["action"] );
         if( is_callable( $method ))
            call_user_func($method);
      }

   }
   
}
