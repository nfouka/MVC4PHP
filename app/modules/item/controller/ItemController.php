<?php

class ItemController extends Controller {
    
    protected $view;
    
    public function __construct(array $route , $bundle) {
        parent::__construct($route);
         $this->view = new View( $route , $bundle  );
    }
    

   public function display() {
      $slug = $this->route["params"]["slug"];
      $this->view->item = Item::getFromSlug($slug);
      $this->view->display();
   }

}
