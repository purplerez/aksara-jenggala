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

        if(isset($_POST['submit'])) {
            $this->genre->nama = $_POST['nama'];
            if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
                $this->genre->update($_GET['id']);
            } else {
                $this->genre->create();
            }
            header("Location: index.php?page=genre");
            exit;
        }
        if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
            $stmt = $this->genre->read_one($_GET['id']);
            $result = $stmt->get_result();
            $edit = $result->fetch_assoc();
        }
        include "page/input_genre.php";
    }

    public function read_all() {
        $stmt = $this->genre->read();
        $result = $stmt->get_result();
        $genres = $result->fetch_all(MYSQLI_ASSOC);

        include "page/genre_all.php";
    }

    public function delete($id){
        $this->genre->delete($id);
    }

    public function edit($id) {
        $stmt = $this->genre->read_one($id);
        $result = $stmt->get_result();
        $edit = $result->fetch_assoc();
        // No need to include the form here, it's handled in index()
    }
}