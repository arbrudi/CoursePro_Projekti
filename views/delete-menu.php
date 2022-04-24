<?php

require_once '../controllers/MenuController.php';

if(isset($_GET['id'])){
$bookId= $_GET['id'];
}

$book = new MenuController;
$book->delete($bookId);



?>