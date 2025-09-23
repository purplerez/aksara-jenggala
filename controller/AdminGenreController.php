<?php 

class AdminGenreController {
    private $db;
    private $genre;

    public function __construct(){
        $dbase = new Database();
        $this->db = $dbase->getConnection();
        $this->genre = new Genre($this->db);
    }

    public function index() {
        include "page/admin/input_genre.php";
    }

    public function read_all() {
        $stmt = $this->genre->read();
        $result = $stmt->get_result();
        $genres = $result->fetch_all(MYSQLI_ASSOC);
        
        include "page/admin/genre_all.php";
    }

}