<?php

class Index1Controller extends Controller {
    
        protected $view;
    
    public function __construct(array $route , $bundle) {
        parent::__construct($route);
         $this->view = new View( $route , $bundle  );
    }
   
   public function display() {
      $this->view->list = Item::getList();
      $this->view->display();
   }

}
