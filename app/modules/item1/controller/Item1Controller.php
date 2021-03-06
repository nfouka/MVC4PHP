<?php
namespace app\modules\item1\controller  ;
class Item1Controller extends \app\kernel\Controller {
    
    protected $view;
    
    public function __construct(array $route , $bundle) {
        parent::__construct($route);
         $this->view = new \app\kernel\View( $route , $bundle  );
    }
    

   public function display() {
      $slug = $this->route["params"]["slug"];
      $this->view->item = \app\modules\item1\model\Item::getFromSlug($slug);
      $this->view->display();
   }

}
