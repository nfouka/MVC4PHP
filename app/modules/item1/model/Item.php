<?php
namespace app\modules\item1\model  ;
class Item extends \app\kernel\Model {
   public $id, $description, $expiration, $slug;

   public static function getFromSlug( $slug ) {
      $db = \app\kernel\Database::getInstance();
      $sql = "SELECT * FROM items WHERE slug = :slug";
      $stmt = $db->prepare($sql);
      $stmt->setFetchMode(\PDO::FETCH_CLASS, "Item");
      $stmt->execute(array(":slug" => $slug));
      return $stmt->fetch();
   }

   public static function getList() {
      $db = \app\kernel\Database::getInstance();
      $sql = "SELECT * FROM items";
      $stmt = $db->query($sql);
      $stmt->setFetchMode(\PDO::FETCH_CLASS, "Item");
      return $stmt->fetchAll();

   }

}



