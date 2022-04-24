<?php
require_once '../controllers/MenuController.php';

if(isset($_GET['id'])){
    $bookId=$_GET['id'];

}

$books = new MenuController;
$currentbook= $books-> edit($bookId);

//updating part

if(isset($_POST['submit'])){
    $books->update($_POST, $bookId);
}

?>




<form method="POST">
Image:
<input type="file" name="image" value="<?php echo $currentbook['book_image']; ?>">
<br>
Title:
<input type="text" name="title" value="<?php echo $currentbook['book_title']; ?>">
<br>
Body:
<input type="text" name="body" value="<?php echo $currentbook['book_body']; ?>">
<br>
File:
<input type="file" name="file" value="<?php echo $currentbook['book_file']; ?>">
<br>
<input type="submit" name="submit" value="Update">

</form>
