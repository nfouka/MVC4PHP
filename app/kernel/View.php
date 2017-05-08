<?php
namespace app\kernel;
class View {
   protected $_route;
   protected $bundle ; 
   protected $data = array();

   public function __construct( $route, $bundle) {
      $this->_route = $route;
      $this->bundle = $bundle ;
   }

   public function display() {
      $viewFile = ROOT . "/app/modules/".strtolower($this->_route["bundle"])."/view/" . strtolower($this->_route["controller"]) . "/" . $this->_route["action"] . ".php";

      if (file_exists($viewFile)) {
            include($viewFile);
        } else {
            throw new DomainException("Vue introuvable - " . $viewFile);
        }
    }

   public function __set($key, $value) {
      $this->data[$key] = $value;
   }
   
   public function __get($key) {
      return $this->data[$key];
   }


}

