<?php
namespace app\modules\item1\controller  ;
class Index1Controller extends \app\kernel\Controller {
    
        protected $view;
    
    public function __construct(array $route , $bundle) {
        parent::__construct($route);
         $this->view = new \app\kernel\View( $route , $bundle  );
    }
   
   public function display() {
      $this->view->list = \app\modules\item1\model\Item::getList();
      $this->view->display();
   }

}
