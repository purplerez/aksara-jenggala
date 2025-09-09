<!DOCTYPE html>
<html lang="en">
   <?php 
        include "component/header.php";
   ?>
    <body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">
       <?php 
            include "component/navbar.php";


            // konten
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            if($page == 'home') include "page/home.php";
            else if($page == 'shopall') include "page/shop-all.php";

           
            include "component/footer.php";
        ?>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
