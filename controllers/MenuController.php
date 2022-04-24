<?php
require_once '../config/Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from books');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']='../images/books/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO books (book_image, book_title, book_body, book_file)
        VALUES (:book_image, :book_title, :book_body, :book_file)');

        $query->bindParam(':book_image', $request['image']);
        $query->bindParam(':book_title', $request['title']);
        $query->bindParam(':book_body', $request['body']);
        $query->bindParam(':book_file', $request['file']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from books WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE books SET book_image = :book_image,
        book_title = :book_title, book_body = :book_body, book_file= :book_file WHERE id = :id');
        $query->bindParam(':book_image', $request['image']);
        $query->bindParam(':book_title', $request['title']);
        $query->bindParam(':book_body', $request['body']);
        $query->bindParam(':book_file', $request['file']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from books WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>