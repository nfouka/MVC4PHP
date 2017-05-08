

<img src="https://raw.githubusercontent.com/nfouka/MVC4PHP/master/mvc4php.png" />
# MVC4PHP7
A Simple MVC Framework for PHP OOP Developer 
Build your application with SymfonyConsole and Box2 builder, and How to rend PHP a Sript OOP Langage !! 

## Install 
```bash
git clone https://github.com/nfouka/MVC4PHP.git
```


## Update packages with composer 
```bash
cd app ; composer update ; 
```

## Update your DB Settings
In Database.php 
```bash
      $this->_db = new \PDO(
         "mysql:host=localhost;dbname=todolist;charset=utf8",
         "root",
         "root"
      );
```


## Update your DB ( Mysql ONLY ) 
```bash
mysql > source 'localhost.sql' 
```

## Run MVC4PHP7 
```bash
php -S 127.0.0.1:8888 index.php
```
## Result MVC4PHP7
```bash
Module item : http://127.0.0.1:8888/ ; http://127.0.0.1:8888/index.php?query=item/acheter-le-pain/item
Module item1 : http://127.0.0.1:8888/ ; http://127.0.0.1:8888/index.php?query=item1/acheter-le-pain/item1
```
