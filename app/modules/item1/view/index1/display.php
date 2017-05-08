<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>Todo list</title>
   <base href="http://127.0.0.1:8888"/>
      <?php
                include "public/header.php" ; 
      ?>
</head>
<body>
    
  <div class="container">
  <div class="jumbotron">
    <h1>MVC4PHP A PHP Framewok</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
   

    
   <header>
     <h1>Exemple d'application Module M2</h1>
   </header>
   <h2>Liste de choses à faire</h2>
   <ul>
      <?php foreach($this->list as $item) : ?>
      <li><a href="index.php?query=item/<?php echo $item['slug'] . "/item";?>"><?php echo $item['description'] ;?></a></li>

      <?php endforeach;?>
   </ul>

   </div>
             <?php
                include "public/footer.php" ; 
        ?>
</body>

</html>




