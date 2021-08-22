<?php

    declare(strict_types=1);
    require_once 'src/utils/debug.php';
    require_once 'src/models/View.php';
    require_once 'src/routes/routes.php';
    require_once 'src/db/Database.php';
    use \MyNotes\View;
    use \MyNotes\Database;


    $myRoutes = require 'src/routes/routes.php';
    $userURL = $_SERVER['REQUEST_URI'];

    if (key_exists($userURL, $myRoutes)) {
        $view = new View('templates/notes/'.urlencode($myRoutes[$userURL]['template']), $myRoutes[$userURL]['web-title']);
    }

?>


<html lang='en'>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/styles/main.css">
    <title><?= $view->returnWebTitle();?></title>
</head>
<body>
    <?php
        require_once 'templates/notes/nav.php';
    ?>
    <div class="content">
        <?php
            $view->render();
        ?>
    </div>
    <footer>
        <?php
            require_once 'templates/notes/footer.php'
        ?>
    </footer>
</body>
</html>
