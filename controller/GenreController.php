<?php
class GenreController{
    private $db;
    private $genre;

    public function __construct(){
        $dbase = new Database();
        $this->db = $dbase->getConnection();
        $this->genre = new Genre($this->db);
    }

    public function index(){
        $stmt = $this->genre->read();
        $result = $stmt->get_result();

        $genres = $result->fetch_all(MYSQLI_ASSOC);

        include "page/genre_all.php";
    }
}