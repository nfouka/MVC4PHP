<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>Todo list</title>
   <base href="http://127.0.0.1:8888"/>
</head>
<body>
   <header>
      <h1>Exemple d'appli ITEM 1</h1>
   </header>
   <div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
   <ul>
      <?php foreach($this->list as $item) : ?>
      <li><a href="index.php?query=item/<?php echo $item->slug . "/item";?>"><?php echo $item->description;?></a></li>

      <?php endforeach;?>
   </ul>
   <footer>
      <p>Pied de page...</p>
   </footer>
</body>

</html>




