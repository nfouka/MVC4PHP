<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>Todo list</title>
   <base href="http://localhost/todolist/www/"/>
         <?php
                include __DIR__."/../../../../../www/public/header.php" ; 
      ?>
</head>
<body>
      <div class="container">
  <div class="jumbotron">
    <h1>MVC4PHP Buid Your Framework easly With PHP7</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
          
   <header>
      <h1>Exemple de Module : ITEM 1</h1>
   </header>
   <h2>Détail d'une chose à faire</h2>
   <h3><?php echo $this->item->description; ?></h3>
   <p>A faire avant le <?php echo $this->item->expiration; ?></p>
   <footer>
      <p>Pied de page...</p>
   </footer>
      </div>
</body>


</html>
