<?php

declare(strict_types=1);


$routes = [
    '/' => ['template' => 'homepage.php', 'web-title'=>'MyNotes - Homepage'],
    '/note-list' => ['template' => 'list.php', 'web-title'=>'MyNotes - Note List'],
    '/create?create='.$_GET['create'] => ['template' => 'create.php', 'web-title'=>'MyNotes - Create new note']
];


return $routes;