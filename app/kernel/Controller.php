<?php
namespace app\kernel;
class Controller {
	
   protected $route;
  

   public function __construct( array $route ) {
      $this->route = $route;
     
   }

}
