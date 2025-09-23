<?php
// session_start();
require_once('../../config/Database.php');
require_once('../../model/models.php');
require_once('../../controller/controllers.php');



$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? 'index';
$genre = new AdminGenreController();

// Routes for admin panel

switch ($page){
    case 'dashboard' : include "page/dashboard.php"; break;
    case 'genre' : {
        $genre->index();
        $genre->read_all();
    }
}

/*


switch ($page) {
    case 'login':
        $admin->login();
        break;
        
    case 'logout':
        $admin->logout();
        break;
        
    case 'dashboard':
        $admin->checkAuth();
        $admin->dashboard();
        break;
        
    case 'genre':
        $admin->checkAuth();
        switch ($action) {
            case 'create':
                $adminGenre->create();
                break;
            case 'edit':
                $adminGenre->edit();
                break;
            case 'delete':
                $adminGenre->delete();
                break;
            default:
                $adminGenre->index();
                break;
        }
        break;
        
    case 'buku':
        $admin->checkAuth();
        switch ($action) {
            case 'create':
                $adminBuku->create();
                break;
            case 'edit':
                $adminBuku->edit();
                break;
            case 'delete':
                $adminBuku->delete();
                break;
            default:
                $adminBuku->index();
                break;
        }
        break;
        
    default:
        $admin->login();
        break;
}
        */
