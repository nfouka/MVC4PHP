

<img src="https://raw.githubusercontent.com/nfouka/MVC4PHP/master/mvc4php7.png" />
## MVC4PHP7

A Simple MVC Framework for PHP OOP Developer 

This is a simple MVC framework for building websites, the purpose of this work is to understand the internal functioning of a PHP framework, and show how to integrate the pattern designe from other MVC framework ( Doctrine ORM,DI, ...) 

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
mysql > source 'todolist.sql' 
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
## Credit
<Nadir Fouka> nadir@fouka.ovh Web Developer/DataScientist 
